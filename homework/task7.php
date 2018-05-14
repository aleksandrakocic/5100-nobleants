<!-- PHP allows several different types of variables. 
For this PHP exercise, 
you will create one variable and assign it different values, 
then test its type for each value.
Write a script using one variable “$whatsit” to print the following to the browser.
Your echo statements may include no words except “Value is”. 
In other words, use the function that will output the variable type to get the requested text. 
Use simple HTML to print each statement on its own line and add a relevant title to your page. 
Include line breaks in your code to produce clean, readable HTML.
Use numbers only in the above variable assignments, not in the echo statements.
You will need a third variable as well.
Value is string.
Value is double.
Value is boolean.
Value is integer.
Value is NULL. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable Data Types</title>
</head>
<body>
<?php
$whatsit = 'Aleksandra';
echo 'Value is ' . gettype($whatsit) . '.'. '<br/>';

$whatsit = 19.5;
echo 'Value is ' . gettype($whatsit) . '.' . '<br/>';

$whatsit = true;
echo 'Value is ' . gettype($whatsit) . '.' . '<br/>';

$whatsit = 20;
echo 'Value is ' . gettype($whatsit) . '.' . '<br/>';

$whatsit = null;
echo 'Value is ' . gettype($whatsit) . '.' . '<br/>';

?>
</body>
</html>