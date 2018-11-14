<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Variable functions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php

$name = "  Bob  ";

$age = "thirty five";

$job = "plumber";

$carMake = "Toyota";

$carColour = "RED";

$happy = true;

$time = "this many";

$break = "<br>";

//------------------------------Functions Displayed Below------------------------------------//

//using the trim function to remove all white spaces (characters)------------------------------
$name= trim($name, ' ');
echo $name.$break;

//variable first, replacement value, recall variable after function takes place----------------
$age= str_replace('thirty five', '35', $age);
echo $age.$break;

//tolower function to place characters in lower case-------------------------------------------
$carColour= strtolower($carColour);
echo $carColour.$break;

//strlen counts the characters within a string (including white spaces)------------------------
$time= strlen($time);
echo $time.$break;

//created variable which has 2 variables in 1--------------------------------------------------
$car = $carColour.$carMake;
echo $car.$break;

//using a maths function to recall the answer-------------------------------------------------
$retirement = ('65' - $age);
echo $retirement.$break;

$story = ($name.' is a'.' '.$job.' He drives a'.' '.$car.' and works'.' '.$time.' hours a day.'.' He is'.' '.$age.' '.'years old and is'.' '.$retirement.' '.'years from retirement.'.' '.'He is happy with his life.');

echo $story.$break;
?>

</body>
</html>