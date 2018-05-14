<!-- For this PHP exercise, write a script using the following variable: 
$around="around";
Single quotes and double quotes don't work the same way in PHP. 
Using single quotes (' ') and the concatenation operator, 
echo the following to the browser, using the variable you created:
What goes around comes around. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concatenation of Strings</title>
</head>
<body>
 <?php
 $around = "around";

 echo 'What goes ' . $around . ' comes ' . $around; 

 ?>   
</body>
</html>