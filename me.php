<?php
$txt1="learn php"
$txt2="mohits schools.org"
$x = 8;
$y = 4;
print "<h2>" .$txt1 . "</h2>";
print $x + $y ;
?>
//php interger
<?php
$x = 435;
var_dump($x);
?>
//php float
<?php
$x = 2.3;
var_dump($x) ;
?>
//php array
<?php 
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
//php objects must be explicitly defined
<?php
class car {
    function car(){
        $this->model = "vw"
    }
}
//create an object
$herbie = new Car();
//show object properties
echo $herbie->model;
?>
//php null value
<?php
$x='hello worlld';
$x=null;
?>
//get the length of a string
<?php
echo strlen('mylovelybae');
?>
//count number of words in a string 
<?php
echo str_word_count(my dear sister);
?>
//reverse a string 
<?php
echo strrev('hello world');
?>
//string position change
<?php
echo strpos('helloworld','world');
?>
//replace text within a string
<?php
echo str_replace('me','house', 'hello house');
?>
<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
<?php
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>
<?php
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>
<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<?php
$cars = array ('bmw', 'box','honda');
echo .$cars[0].;
?>