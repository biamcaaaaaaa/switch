<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="valor1"> Valor: </label>
    <input type="text" name="valor1">
    <br><br>
    <button type="submit"> ENVIAR </button>
</form>
<br>
<?php 
if($_POST){
$valor1 = $_POST['valor1'];
for($i = 1; $i <= 10; $i++){
    echo $valor1 . " x " . $i . " = " . $valor1 * $i;
    echo "<br>";
}


switch ($valor1){
    case 1: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 2: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 3: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 4: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 5: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 6: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 7: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 8: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 9: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    case 10: 
        echo "Você esta na tabuada do:" . $valor1;
        echo "<br>";
        break;
    default: 
        echo " somente tabuada do 1 ao 9";
        break;
} 
}
?>


</body>
</html>