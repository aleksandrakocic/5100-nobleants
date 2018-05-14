<!--
PHP includes all the standard arithmetic operators.
For this PHP exercise, you will use them along with variables to print equations to the browser. 
In your script, create the following variables: $x=10; $y=7;
Write code to print out the following:
10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arithmetic Operators and Variables</title>
</head>
<body>
<?php

$x=10;
$y=7;

$result1 = $x + $y;
echo "{$x} + {$y} = {$result1} <br/>";

$result2 = $x - $y;
echo "{$x} - {$y} = {$result2} <br/>";

$result3 = $x * $y;
echo "{$x} * {$y} = {$result3} <br/>";

$result4 = $x / $y;
echo "{$x} / {$y} = {$result4} <br/>";

$result5 = $x % $y;
echo "{$x} % {$y} = {$result5} <br/>";
?>  
</body>
</html>