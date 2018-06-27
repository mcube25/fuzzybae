<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>
<?php
define('MYDEAR','hello world', true);
echo greeting;
?>
//constants are automatically global and can be used across the entire script
<?php
define('greeting','hello world', true);
function myTest(){
    echo greeting;
}
myTest();
?>
//php conditional statements
if (condition){
    code to be executed if its true;
}
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?>
//else if statements
if (condition) {
    code to be executed if condition is true;
} else {
    code to be executed if condition is false;
}
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
//if, elseif, else statements
if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    code to be executed if this condition is true;
} else {
    code to be executed if all conditions are false;
}
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
//switch statements
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
//while loop executes a block of code as long as the condition is true
while (condition is true) {
    code to be executed;
}
<?php 
$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
?>