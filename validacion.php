<?php
// METODO GET (INSEGURO)
  //  echo $_GET["f_usuario"];
  //  echo "<br>";
  //  echo $_GET["f_clave"];

  //METODO POST (SEGURO)
  //      echo $_POST["f_usuario"];
  //      echo "<br>";
  //      echo $_POST["f_clave"];

  //METODO REQUEST : permite capturar los dos parametros (GET Y POST)
       // echo $_REQUEST["f_usuario"];
       // echo "<br>";
      //  echo $_REQUEST["f_clave"];

        $usuario = $_POST["f_usuario"];
        $clave = $_POST["f_clave"];

        if($usuario=="admin" && $clave=="1234"){
            //redireccionamiento
           // header("Location: articulos1.php?nombre=ADMIN");
           session_start();
           $_SESSION["s_usuario"] = $usuario;
           header("Location: articulos1.php");
        }else{
            header("Location: login.php?error=1");
            
        }
?>