<?php
$usuario  = $_POST["usuario"];
$senha = $_POST["senha"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
   echo "usuario: " . $usuario . "<br>";
   echo "senha:   $senha  ";

   //echo strpos("senha", "8");
   if (strlen($senha)>= 8){
    echo("senha valida");
  }else  {
    echo("senha invalida");
 }




   ?>



</body>
</html>
