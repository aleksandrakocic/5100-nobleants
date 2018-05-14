<!--
create two variables
one for the word “Twinkle” and one for the word “star”
Echo the statement to the browser
this time substituting the variables for the relevant words
Change the value of each variable to whatever you like,
and echo the statement a third time.
Remember to include code to show your statements on different lines. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create and Use Variables</title>
</head>
<body>
 <?php
$twinkle="Twinkle"; 
$star="star"; 
echo "First time - {$twinkle} {$star} <br/>";

$twinkle ="changed Twinkle";
$star="changed Star"; 
echo"Again with changed values of variables {$twinkle} {$star}";
 ?>
</body>
</html>