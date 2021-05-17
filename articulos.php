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
<body background="img/fondo.png">
    <nav>
        <ol id="indice">
            <li class="menu"><a href="login.php">Acceder</a></li>
            <li class="menu"><a href="contacto.php">Contacto</a></li>
            <li class="menu"><a href="articulos.php">Artículos</a></li>
			<li class="menu"><a href="index.php">Principal</a></li>		
		</ol>
    </nav>
    <header>
        <h1>Accesorios para PC</h1>
    </header>
    
    <section>
        <table>
            <tr>
                <td>
        <figure>
            <div class="Imgcomponente">
                <img src="img/impresora.jpg" class="zoom" alt="impresora">
            </div>
            <figcaption>>Nombre: Impresora <br> >Precio: $210</figcaption>
        </figure>
    </td>
    <td>
        <figure>
            <div class="Imgcomponente">
                <img src="img/monitor.jpg" class="zoom" alt="impresora">
            </div>
            <figcaption>>Nombre: Monitor <br> >Precio: $350</figcaption>
        </figure>
    </td>
    <td>
        <figure>
            <div class="Imgcomponente">
                <img src="img/mouse.jpg" class="zoom" alt="mouse">
            </div>
            <figcaption>>Nombre: Mouse <br> >Precio: $20</figcaption>
        </figure>
    </td>
    <td>
        <figure>
            <div class="Imgcomponente">
                <img src="img/parlantes.jpg" class="zoom" alt="parlantes">
            </div>
            <figcaption>>Nombre: Parlantes <br> >Precio: $30</figcaption>
        </figure>
    </td>
    <td>
        <h2>Calculadora de precio</h2>
        <form class="productos">
            <span>Valor 1:</span>
            <input type="number" name="valor01" id="valor01" size="3">
            <br>
            <span>Valor 2:</span>
            <input type="number" name="valor02" id="valor02" size="3">
            <br>
            Resultado:<span id="resultado">---</span>
            <br>
            <input type="button" name="suma" id="suma" value="sumar">
            <input type="button" name="resta" id="resta" value="restar">
            <input type="button" name="multiplica" id="multiplica" value="multiplicar">
            <input type="button" name="divide" id="divide" value="dividir">
            
            
        </form>
    </td>
    </tr>


    <tr>
        <td>
<figure>
    <div class="Imgcomponente">
        <img src="img/router.jpg" class="zoom" alt="router">
    </div>
    <figcaption>>Nombre: Router <br> >Precio: $70</figcaption>
</figure>
</td>
<td>
<figure>
    <div class="Imgcomponente">
        <img src="img/ssd.jpg" class="zoom" alt="ssd">
    </div>
    <figcaption>>Nombre: SSD 240GB <br> >Precio: $60</figcaption>
</figure>
</td>
<td>
<figure>
    <div class="Imgcomponente">
        <img src="img/teclado.jpg" class="zoom" alt="teclado">
    </div>
    <figcaption>>Nombre: Teclado <br> >Precio: $30</figcaption>
</figure>
</td>
<td>
<figure>
    <div class="Imgcomponente">
        <img src="img/webcam.jpg" class="zoom" alt="webcam">
    </div>
    <figcaption>>Nombre: Webcam <br> >Precio: $40</figcaption>
</figure>
</td>

</tr>
    </table>
</section>
<section>
    

    <script>
        const btnSuma = document.querySelector('#suma');
        btnSuma.addEventListener('click',sumar);

        const btnResta = document.querySelector('#resta');
        btnResta.addEventListener('click',restar);

        const btnMultiplica = document.querySelector('#multiplica');
        btnMultiplica.addEventListener('click',multiplicar);

        const btnDivide = document.querySelector('#divide');
        btnDivide.addEventListener('click',dividir);
    </script>
</section>
    
</body>
</html>