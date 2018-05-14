<!-- 
Arithmetic-assignment operators perform an arithmetic operation on the variable
 at the same time as assigning a new value. 
write a script to reproduce the output below. 
Manipulate only one variable using no simple arithmetic operators 
to produce the values given in the statements.
Hint: In the script each statement ends with "Value is now $variable."
Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now 11.
Decrement value by one. Value is now 10.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Arithmetic-Assignment Operators and Variables</title>
</head>
<body>
<?php

$number =8;
echo "Value is now {$number} <br/>";

$number += 2;
echo "Value is now {$number} <br/>";

$number -= 4;
echo "Value is now {$number} <br/>";

$number *= 5;
echo "Value is now {$number} <br/>";

$number /= 3;
echo "Value is now {$number} <br/>";

$number +=1;
// $number ++;
echo "Value is now {$number} <br/>";

$number -=1;
// $number --;
echo "Value is now {$number} <br/>";


?>
</body>
</html>