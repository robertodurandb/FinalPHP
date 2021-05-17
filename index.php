<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Hardware Online</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body background="img/fondo-claro.jpg">
    <nav>
        <ol id="indice">
            <li class="menu"><a href="login.php">Acceder</a></li>
            <li class="menu"><a href="contacto.php">Contacto</a></li>
            <li class="menu"><a href="articulos.php">Artículos</a></li>
			<li class="menu"><a href="index.php">Principal</a></li>	
			
			
            	
		</ol>
    </nav>
    <header>
        <h1>La computadora y sus componentes</h1>
    </header>
    
    <main>
        
        <section>
            <div id="parrafo1">
                <h2>La computadora</h2>
                <img src="img/computadora.jpg" class="imagen" align="right" alt="computadora">  <div class="text1">Una computadora es un dispositivo electrónico que acepta datos de entrada, 
                    los procesa, los almacena y los emite como salida para su interpretación. 
                    La computadora es parte de un sistema de computación. Hoy en día se ha vuelto una 
                    herramienta indispensable para el desarrollo de diferentes actividades como estudiar, 
                    trabajar, buscar alguna información específica, enviar un correo, buscar trabajo, enviar 
                    tu CV, etc. <br>La pandemia que estamos viviendo, obligó a muchas personas tener
                    que comprarse una computadora. <br></div>
                    <br><br>

                <h2>Componentes de un computador:</h2>
                <div class="text1">un sistema de computación está conformado por hardware, periféricos y software.</div>
                <br>
                <li class="negrita">HARDWARE</li>
                <div class="text1">incluye todos los dispositivos eléctricos, electrónicos y mecánicos (que se pueden ver y tocar) 
                    que se utilizan para procesar los datos.</div>
                    <br>
                <li class="negrita">PERIFÉRICOS</li>
                  <div class="text1">son los dispositivos de hardware que se encuentran en la computadora con la finalidad de aumentar 
                    las posibilidades de acceso, almacenamiento y salida del equipo de cómputo. Incluyen los dispositivos 
                    de Entrada y los de Salida.</div>
                    <br>  
                <li class="negrita">DISPOSITIVOS DE ENTRADA</li>
                <div class="text1">son periféricos cuya función es la de reunir y traducir los datos de entrada a una forma que sea aceptable 
                    para la computadora. Los dispositivos de entrada más comunes son el teclado y el ratón o "mouse".</div>
                    <br>   
                <li class="negrita">DISPOSITIVOS DE SALIDA</li>
                <div class="text1">son periféricos que representan, imprimen o transfieren los resultados del procesamiento, extrayéndolos 
                    de la Memoria Principal de la computadora. Entre los dispositivos de salida más utilizados se encuentran 
                    el Monitor o Pantalla y la Impresora.</div>
                    <br>
                <li class="negrita">SOFTWARE</li>
                <div class="text1">es el conjunto de instrucciones electrónicas para controlar el hardware de la computadora. 
                    Algunos Programas existen para que la Computadora los utilice como apoyo para el manejo de sus propias 
                    tareas y dispositivos. Otros Programas existen para que la Computadora le dé servicio al Usuario. 
                    Por ejemplo, la creación de documentos electrónicos que se imprimen.</div>
                
            </div>
            <div>
                <h3>Referencias:</h3>
            <a href=https://www.monografias.com/trabajos102/definicion-computadoras-y-sus-componentes/definicion-computadoras-y-sus-componentes.shtml>Monografias.com</a>
            </div>
        </section>
        
        <aside>
        <?php
        include "header.php";
        
        echo $salto;
        $hora = date("G:i:s a");
        $dia = date("d-m-Y");
        
        echo  "Hora: " . $hora . $salto;
        echo "Fecha: ".$dia .$salto;
        ?>
        </aside> 

    </main>
    <footer>
       <pre>   &copy; Derechos Reservados 2021                  (Roberto Mitchell Durand Baca)</pre> 
    </footer>
</body>
</html>