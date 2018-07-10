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
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
//associative arrays use named keys e.g 
<?php
$cars =array('peter'=>'35','bmw'=>'22','benz'=>'33');
echo 'peter is'.$cars['peter']. 'cars old';
?>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
//loop through associative arrays 
<?php
$class=array('grade1'=>'2','grade2'=>'31','grade3'=>'22');
foreach($class as $x =>$x_value){
    echo 'key='.$x.',value='.$x_value;
}
?>
<?php 
class car {
    function car (){
        $this->model = 'merc'
    }
}
//create an odbc_fetch_object
$herbie = new car();
//show object properties
echo $herbie->model ;
?>
<?php 
class building {
  function building (){
      $this->style = 'empire state'
  }  
}
$pale = new building ();
echo $pale->style ;
?>
<?php
//to create a php constant
//use the define function
define ('pale102', 'thanks with love', true);
function myHouse(){
    echo pale102 ;
}
?>
<?php 

$time = date('H');
if ($time < '20'){
    echo 'thats great';
}else{
    echo 'its all right';
}
?>
<?php
$color = array ('1','2','3');
if ($color == array[1]){
    echo 'its blue black';
}elseif ($color > array [1]){
    echo 'not great';
}else{
    echo 'its all good'
}
?>
<?php
$favcolor = 'red';
switch ($favcolor){
    case 'red':
    echo 'your favourite color is red';
    break;
    case 'blue':
    echo 'your favourite color is blue'
    break;
    case 'green':
    echo 'your favourite color is green'
    break;
    case 'brown':
    echo 'your favourite color is brown'
    break;
    default: 
    echo 'your favourite color is neither'
}
?>