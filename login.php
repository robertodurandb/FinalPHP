<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ol id="indice">
            <li class="menu"><a href="index.php">Volver a la Página principal</a></li>
            
            	
		</ol>
    </nav>
    <header>
        <h1>Acceso</h1>
    </header>
    <form class="login" action="validacion.php" method="post">
        <div class="container">
            <label for="f_usuario">Usuario</label>
            <input type="text" name="f_usuario"
                id="f_usuario" placeholder="Ingrese usuario" required>
            <br>
            <label for="f_clave">Contraseña</label>
            <input type="password" name="f_clave"
                id="f_clave" placeholder="Ingrese contraseña" required>
                <br><br>
        
        <button class="acceder">Acceder </button>
        </div>
    </form>
    <div class="container1">
    <span class="messageError">
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "1"){
                echo "¡Ingreso erroneo!";
            }
            if($_GET["error"] == "2"){
                echo "¡Sesion caducada!";
            }
            if($_GET["error"] == "3"){
                echo "¡Vuelva pronto!";
            }
        }

        ?>
    </span>
    </div>
    <br><br><br>
    <div class="container1">
        usuario=admin<br>clave=1234

    </div>
    
</body>
</html>