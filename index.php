<?php
//========================================================================
// EX1  Write a PHP script to see if the specified year is a leap year or not. 
// $year = 2013;
// if($year % 4 == 0){
//     echo "$year is a leap year";
// }else{
//     echo "$year is not a leap year";
// }

//=========================================================================
//Ex2 Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.

echo "<br>";
echo "<br>";

// $temp = 27;
// if($temp < 20){
//     echo "It is wintertime!";
// }else{
//     echo "It is summertime!";
// }

//=========================================================================
echo "<br>";
echo "<br>";

//Ex3 Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum
// $num1 = 2;
// $num2 = 2;
// if($num1 == $num2){
//     echo ($num1 + $num2) * 3;
// }else{  
//     echo $num1 + $num2;
// }

//=========================================================================
echo "<br>";
echo "<br>";
//Ex4 Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// $num1 = 10;
// $num2 = 10;
// if($num1 + $num2 == 30){
//     echo $num1 + $num2;
// }else{
//     echo "false";
// }

//=========================================================================
echo "<br>";
echo "<br>";

//Ex5 Write in PHP script to check if the given positive number is a multiple of 3.

// $num = 30;
// if($num % 3 == 0){
//     echo "True";
// }else{
//     echo "false";
// }

//=========================================================================
echo "<br>";
echo "<br>";
//Ex6 Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.

// $num = 50;
// if($num >= 20 && $num <= 50){
//     echo "True";
// }else{
//     echo "false";
// }
//=========================================================================
echo "<br>";
echo "<br>";
//Ex7 Write PHP script to find the largest number between the three integers

// $num1 = 1;
// $num2 = 5;
// $num3 = 9;

// if($num1 > $num2 && $num1 > $num3){
//     echo $num1;
// }elseif($num2 > $num1 && $num2 > $num3){
//     echo $num2;
// }else{
//     echo $num3;
// }
//=========================================================================
echo "<br>";
echo "<br>";

//Ex8 Write PHP script to calculate the monthly electricity bill according to these rules

//For first 50 units – 2.50 JOD/Unit
//For next 100 units – 5.00 JOD/Unit
//For next 100 units – 6.20 JOD/Unit
//For units above 250 – 7.50 JOD/Unit

// $units = 279;
// $bill = '';
// if($units <= 50){
//     $bill = $units * 2.5;
// }elseif($units <= 150){
//     $bill = 50 * 2.5 + ($units - 50) * 5;
// }elseif($units <= 250){
//     $bill = 50 * 2.5 + 100 * 5 + ($units - 150) * 6.20;
// }else{
//     $bill = 50 * 2.5 + 100 * 5 + 100 * 6.20 + ($units - 250) * 7.50;
// }
// echo "Your bill is $bill JOD";

//=========================================================================
echo "<br>";
echo "<br>";

//Ex9 Write php script to make a calculator, the calculator should contain the four main operations 
//Addition
//Subtraction
//Multiplication
//Division

// $num1 = 10;
// $num2 = 5;
// $operation = 'subtraction';
// switch($operation){
//     case 'addition':
//         echo $num1 + $num2;
//         break;
//     case 'subtraction':
//         echo $num1 - $num2;
//         break;
//     case 'multiplication':
//         echo $num1 * $num2;
//         break;
//     case 'division':
//         echo $num1 / $num2;
//         break;
//     default:
//         echo "Invalid operation";
// }

//=========================================================================
echo "<br>";
echo "<br>";

//Ex10 Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// $age = 15;
// if($age >= 18 ){
//     echo "is eligible to vote";
// }else{
//     echo "is no eligible to vote";
// }

//=========================================================================
echo "<br>";
echo "<br>";

//Ex11 Write php script  to check whether a number is positive, negative or zero

// $num = -8;
// if($num > 0){
//     echo "Positive";
// }elseif($num < 0){
//     echo "Negative";
// }else{
//     echo "Zero";
// }
//=========================================================================
echo "<br>";
echo "<br>";

//Ex12 Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
//Average < 100% => A
//Average < 90% => B
//Average < 80% => C
//Average < 70% => D
//Average < 60% => F

// $sub1 = 60;
// $sub2 = 86;
// $sub3 = 95;
// $sub4 = 63;
// $sub5 = 55;
// $sub6 = 74;
// $sub7 = 79;
// $sub8 = 62;
// $sub9 = 50;




// $average = ($sub1 + $sub2 + $sub3 +$sub4 + $sub5 + $sub6 + $sub7 + $sub8 + $sub9) /9;
// if($average >= 90){
//     echo "A";
// }elseif($average >= 80){
//     echo "B";
// }elseif($average >= 70){
//     echo "C";
// }elseif($average >= 60){
//     echo "D";
// }else{
//     echo "F";
// }

//=========================================================================
echo "<br>";
echo "<br>";

//=============================================ARRAYS============================================
//Ex1 Write a PHP script to check if the inserted number is a prime number or not.



// function is_prime($n)
// {
//     if ($n == 1) {
//         return false;
//     } elseif ($n == 2) {
//         return true;
//     } else {
//         for ($x = 2; $x < $n; $x++) {
//             if ($n % $x == 0) {
//                 return false;
//             }
//         }
//         return true;
//     }
// }

// echo "<br>";
// echo "<br>";

//Ex2 Write a PHP script to reverse a string 
// $str1 = "Remove";
// echo strrev($str1);

// echo "<br>";
// echo "<br>";


// Ex3  Write a PHP function to check if the all string characters are lower cases or not and print the result. 


// $string = "remove";

// if (ctype_lower($string)) {
//     echo  ' Your String is Ok';
// } else {
//     echo ' Your String is not Ok';
// }

// echo "<br>";
// echo "<br>";

// Ex4 Write  function to swap to variables x=10 and y=20 and print the result after swapping in PHP 

// $x = 12;
// $y = 10;


// function swap($x, $y)
// {
//     $temp = $x;
//     $x = $y;
//     $y = $temp;
//     echo "x = $x and y = $y";
// }

// swap($x, $y);

// echo "<br>";
// echo "<br>";

// Ex5 Write a PHP function to check if a number is an Armstrong number or not and print the result in PHP 

// Write a PHP function to remove duplicates from an array and print the result in PHP

// $array = array(2, 4, 7, 4, 8, 4);

// $result = array_unique($array);

// echo '<pre>'; print_r($result); echo '</pre>';


// echo "<br>";
// echo "<br>";

//=============================================End of Arrays=============================================

//Q1 Write a program that will count the "r" characters in a string

// $str = "rrzzrr";
// $count = 0;
// for($i = 0; $i < strlen($str); $i++){
//     if($str[$i] == 'r'){
//         $count++;
//     }
// }
// echo $count;

//=========================================================================
echo "<br>";
echo "<br>";


//Q2Write a PHP function that checks whether a string is all lowercase or not 

// function isLower($str)
// {
//     for ($i = 0; $i < strlen($str); $i++) {
//         if (ord($str[$i]) >= 65 && ord($str[$i]) <= 90) {
//             return false;
//         }
//     }
//     return true;
// }

// $str = "hello";
// if (isLower($str)) {
//     echo "All Lowercase";
// } else {
//     echo "Not All Lowercase";
// }

//=========================================================================
echo "<br>";
echo "<br>";

// Q2 Write a PHP script that creates the following table (use for loops).

// for($i = 1; $i <= 10; $i++){
//     for($j = 1; $j <= 10; $j++){
//         echo $i * $j . " ";
//     }
//     echo "<br>";
// }

//=========================================================================

//Q5 Q5: Write a PHP Calculator class that will accept two values as arguments
//, then add them, subtract them, multiply them together, or divide them on request.

// class Calculator{
//     public $num1;
//     public $num2;
//     public $operation;

//     public function calculate(){
//         switch($this->operation){
//             case 'addition':
//                 return $this->num1 + $this->num2;
//                 break;
//             case 'subtraction':
//                 return $this->num1 - $this->num2;
//                 break;
//             case 'multiplication':
//                 return $this->num1 * $this->num2;
//                 break;
//             case 'division':
//                 return $this->num1 / $this->num2;
//                 break;
//         }
//     }
// }

// $calculator = new Calculator();
// $calculator->num1 = $_POST['num1'];
// $calculator->num2 = $_POST['num2'];
// $calculator->operation = $_POST['operation'];
// $result = $calculator->calculate();






?>