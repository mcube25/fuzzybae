//1. Write a function to print all elements of an array i.e function printArray($array) 
2. Write a function that adds a constant to all elements of an array and print the array using the printArray function you wrote in 
question 1 in the form  function addNumberToArray($array, $constant)      
 3. Count and print the number of even numbers in an array in form of function countEven($array) e.g countEven(21,1,2,3,7,10) prints 2 
 because there are two even numbers in the array; 2 and 10.       
 4. Write a function to determine the maximum of positive numbers in an array in the form function findMax($array). Echo the
  maximum value.  E.g findMax(20, 15, 4, 3) prints 20       
5. Find if there exist the sum of any two numbers in an array equal  to a target in the form function($array, $target) e.g 
(1,3,2, 6. 10), target 8 returns true because 2 + 6 =8  (1,3,2, 6. 10), target 9 returns false because no two numbers add 
up to 9 Hints: use 2 nested loop for your solution.
//solution
//1.
<?php
$grade=array('grade1','grade2','grade3');
$arrlength = count($grade);
function printArray($grade){
    for($x = 0; $x < $arrlength; $x++) {
    echo $grade[$x];
    echo "<br>";
}
printArray();
?>