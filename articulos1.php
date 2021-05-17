<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <nav>
        <ol id="indice">
			<li class="menu"><a href="logout.php">Cerrar Sesión</a></li>	
			
		</ol>
    </nav>
    <?php
        session_start();
        if(isset($_SESSION["s_usuario"])){
            $usuario = $_SESSION["s_usuario"];
        }else{
            header("Location: login.php?error=2");
        }
    ?>
    <?php
        include "header.php";
        
        echo $salto;
        echo "<h4>Fecha y Hora del acceso al sistema:</h4>";
        $hora = date("G:i:s a");
        $dia = date("d-m-Y");
        echo "Fecha: ".$dia .$salto;
        echo  "Hora: " . $hora . $salto;
        ?>
    <header>
        <h1>Bienvenido a la tabla de productos</h1>
        <h3><?php echo $usuario ?></h3>
    </header>
    
   

        <h2>Tabla de productos</h2>
        <?php
        

        $arrPersonas= [
            ["id"=>1, "nom"=>"Impresora", "precio"=>210, "cantidad"=>30 ],
            ["id"=>2, "nom"=>"Monitor", "precio"=>350, "cantidad"=>30 ],
            ["id"=>3, "nom"=>"Mouse", "precio"=>20, "cantidad"=>30 ],
            ["id"=>4, "nom"=>"Parlantes", "precio"=>30, "cantidad"=>30 ],
            ["id"=>5, "nom"=>"Router", "precio"=>70, "cantidad"=>30 ],
            ["id"=>6, "nom"=>"Unidad ssd", "precio"=>60, "cantidad"=>30 ],
            ["id"=>7, "nom"=>"Teclado", "precio"=>30, "cantidad"=>30 ],
            ["id"=>8, "nom"=>"Webcam", "precio"=>40, "cantidad"=>30 ]
        ];
    ?>
<table width="50%" border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
    </tr>
    <?php for ($i=0; $i < count($arrPersonas); $i++){ ?>
        <tr>
            <?php foreach($arrPersonas[$i] as $Person){ ?>
                <td><?php  echo $Person ?></td>
          <?php  } ?>
        </tr>
        <?php  } ?>

</table>
        <form class="productos">
            
            <br>
            <input type="button" name="Agregar" id="agregar" value="agregar">
            <input type="button" name="Modificar" id="modificar" value="modificar">
            <input type="button" name="Eliminar" id="eliminar" value="eliminar">
            <br>***botones por trabajar***
            
            
        </form>
    
  


    
</body>
</html>