<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$peso1 = $_POST["peso1"]; 
$peso2 = $_POST["peso1"];
$mediap;

$mediap = (($nota1 * $peso1) + ($nota2 * $peso2))/ ($peso1 + $peso2);
echo "<h3> A média ponderada entre $nota1 e $nota2 é igual a $mediap!</h3>";

?>
</body>
</html>
