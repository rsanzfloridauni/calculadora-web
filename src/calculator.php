<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];
switch ($operation) {
    case "suma":
        echo "Resultado suma: " . ($num1 + $num2);
        break;
    case "resta":
        echo "Resultado resta: " . ($num1 - $num2);
        break;
    case "multiplicacion":
        echo "Resultado multiplicacion: " . ($num1 * $num2);
        break;
    case "division":
        echo "Resultado division: " . ($num1 / $num2);
        break;
}
?>
