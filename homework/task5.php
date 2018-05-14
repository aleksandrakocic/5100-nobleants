<!-- When you are writing scripts, you will often need to see exactly what is inside your variables.
For this PHP exercise, think of the ways you can do that, 
then write a script that outputs the following, 
using the echo statement only for line breaks.
string(5) "Harry"
Harry
int(28)
NULL
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable Content and Destruction</title>
</head>
<body>
<?php

$name = "Harry";
$age = 28;

var_dump($name);
echo "<br/>";

print_r($name);
echo "<br/>";

var_dump($age);
echo "<br/>";

print_r($age);
echo "<br/>";

$nul = null;
var_dump($nul);
?>
</body>
</html>