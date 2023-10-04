<?php
// O exemplo abaixo exibe os números de 1 a 5:
if(isset($_GET['enviado'])) { 
  $x = $_GET["valor"];
  $flag = $x+5;
  while($x <= $flag) {
    echo "O número é: $x <br>";
    $x++; 
  }
}  
?>

<!DOCTYPE html>
<html lang="en">
<body>
 <form action="" method="get">
    <label for="valor">Número:</label>
    <input type="text" id="valor" name="valor"><p>
    <button name="enviado" type="submit">Enviar</button>
   </form>
</body>
</html>