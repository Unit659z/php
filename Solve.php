<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Заводун А.В.</h1>
    <?php

    $equation = "22 * X = 220";

    $parts = explode("=", $equation);
    $left_side = trim($parts[0]);
    $right_side = trim($parts[1]);


    $operator = '';
    if (strpos($left_side, '+') !== false) {
        $operator = '+';
    } elseif (strpos($left_side, '-') !== false) {
        $operator = '-';
    } elseif (strpos($left_side, '*') !== false) {
        $operator = '*';
    } elseif (strpos($left_side, '/') !== false) {
        $operator = '/';
    }


    $left_parts = explode($operator, $left_side);
    $multiplier = trim($left_parts[0]);
    $variable = trim($left_parts[1]);


    switch ($operator) {
        case '+':
            $result = ($right_side - $multiplier) / $variable;
            break;
        case '-':
            $result = ($right_side + $multiplier) / $variable;
            break;
        case '*':
            $result = $right_side / $multiplier;
            break;
        case '/':
            $result = $right_side * $multiplier;
            break;
        default:
            echo "Неверный оператор!";
            break;
    }

    echo "Значение переменной $variable = $result";
    ?>

</body>
</html>