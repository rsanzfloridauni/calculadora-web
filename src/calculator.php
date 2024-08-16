<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];
switch ($operation) {
    case "suma":
        echo "Resultado: " . ($num1 + $num2);
        break;
    case "resta":
        echo "Resultado: " . ($num1 - $num2);
        break;
    case "multiplicacion":
        echo "Resultado: " . ($num1 * $num2);
        break;
    case "division":
        echo "Resultado: " . ($num1 / $num2);
        break;
}
?>
