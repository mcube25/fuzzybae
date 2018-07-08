//1. Draw a chessboard using a function drawChessBoard($size) where $size is the size of
the board. Use <td height=30px width=30px bgcolor=#FFFFFF></td> and <td
height=30px width=30px bgcolor=#000000></td> as table data.
Your board should look like this for size 8.
2. Given an array return true if all the elements in the array are arranged in ascending order
and false if otherwise. Example array(2,5,7, 30) returns true while array(-1, 5, 8, 2) returns false.
3.Given a 2-dimensional array, print the last element of each inner array. Example,
$cars = array
 (
 array("Volvo",22,18),
 array("BMW",15,13),
 array("Saab",5,2),
 array("Land Rover",17,15)
 );
Prints 18,13,2 and 15.
4.Given an associative array that represents age of students in a
class. The array is in the form $age = (“name” => student age) where
name is distinct. Write a function that prints the name of student
with lowest age.
Example $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
Prints out Peter because he has the lowest age of 35.
5.Print the second largest element in an array of positive numbers.
Example array(10,4,5,8,100) prints out 10 because 10 is the second
largest number.
//solutions
//1. 

//2.
        <?php
        $number =  array(2,5,7, 30 );
        $number=sort($number);
        function checkOrder($number){
         for ($i=0; $i > $number; $i++){
             echo 'true'
         }else{
             echo 'false'
         }

        }
        ?>
        //3.
        <?php
     $cars = array
   (
   array("Volvo",22,18), 
   array("BMW",15,13),
   array("Saab",5,2),
   array("Land Rover",17,15)
   );
   $counter =0;
 for($i =0; $i < count($cars); $i++){
 	for($j =0; $j < count($cars[$i]); $j++){
 		echo $cars[$i][$j]."   ";
 	}
 	$counter++;
 	if($counter == 2) break;
 	echo "</br>";
 }
        ?> 
        //4. 

<?php 
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
function youngest($age){
foreach($age as $x > $x_value) {
    echo "Key=" . ;
    echo "<br>";
}
}
?>
//5 . 
<?php
$arr =  array(10,4,5,8,100);
function secondMax($arr) {
   
  $max = $second = 0;

foreach($arr as $key => $value) {
    if($value > $max) {
        $second = $max;
        $max = $value;
    } 
    elseif($value > $second) {
        $second = $value;
    }
}

return array($second);
}
}
?>