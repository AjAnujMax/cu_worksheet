<!--______________________________ BASIC codes from start_____________________________________ -->
<!-- PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. -->


<!-- ___________hello world_______________________________ -->
<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?>
<br>
  <!-- ___________  print __________________ -->
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>
 
<br>
<!-- ___________  variable _________________ -->
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>
<br>
<!-- ___________ PHP Data Types_________________ -->
<!-- String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource -->
  
<!-- ---------------------string  -->
<?php
$x = "Hello world!";
$y = 'Hello world!';
echo $x;
echo "<br>";
echo $y;
?>
<br>
  
<!--<!-- ---------------------insteger -->-->
 <?php
$x = 5985;
var_dump($x);
?>
<br>
  
<!--<!-- ---------------------array----->-->
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  
<br>
  
<!--<!-- ---------------------class and object -->-->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?> 
<br>
    
<!--<!-- ---------------------function and string -->-->
  
<!-- strlen() -->
<?php 
  echo strlen("hello world"); //output 12
  ?>
<br>
 
<!--  str_wor_count-->
<?php
  echo str_word_count("hello world");
  ?> 
<br>  
<!-- strrev()  -->
  <?php 
  echo strrev("hello world");
  ?>
  <br>
<!--  strpos()  -->
<?php
  echo strpos("hello world"); //output_6
  ?>
  
<br>
<!--  str_replace  -->
<?php
  echo str_replace("hello","anuj ", "hello world"); //output :- hello anuj
  ?>
 <br>
    
<br>
<!--  NUMBERS  -->
 Check if the type of a variable is integer:
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
 <br>
 
 Check if the type of a variable is float:
  
 <?php
$x = 10.365;
var_dump(is_float($x));
?>
  
PHP Infinity is_finite() is_infinite()
Check if a numeric value is finite or infinite:
 <?php
$x = 1.9e411;
var_dump($x);
?>
 
 PHP NaN
 Invalid calculation will return a NaN value:
  <?php
$x = acos(8);
var_dump($x);
?>
  
  Check if the variable is numeric:
  <?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
 
 PHP Casting Strings and Floats to Integers
  <?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
  
<!-- ________________________________PHP Math__________________________________ -->
<!--  pi() Function  -->
 <?php
echo(pi()); // returns 3.1415926535898
?> 

<!-- min() and max() Functions -->
 <?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?> 
  
<!-- abs() Function  -->
<?php
echo(abs(-6.7));  // returns 6.7
?>
  
<!-- sqrt() Function   -->
 <?php
echo(sqrt(64));  // returns 8
?> 
  
<!-- round() Function  -->
 <?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?> 
 
<!--  Random Numbers -->
<?php
echo(rand());
?>
  
<!--  ___________________________CONSTANT_________________________________  -->
  
Create a PHP Constant
  keyword define()
  <br>
<?php
define("GREETING", "Welcome to W3Schools.com!"); //  case sencitive
echo GREETING;
?>
  <br>
  
<!-- constant array   -->
  <br>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
  
  
<!--   Constants are Global -->
  <?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?>
  
<!-- ______________________________________OPERATOR_____________________ -->
<!--   
  Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators -->
<!--   +	Addition	$x + $y	Sum of $x and $y	
-	Subtraction	$x - $y	Difference of $x and $y	
*	Multiplication	$x * $y	Product of $x and $y	
/	Division	$x / $y	Quotient of $x and $y	
%	Modulus	$x % $y	Remainder of $x divided by $y	
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power -->
  
<!-- _____________Assignment Operators   -->
  x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus
  
<!-- ___________________________Comparison Operators  -->
<!--   ==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, 
  depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7. -->
  
<!---________________________ PHP Increment / Decrement Operators   -->
<!--   ++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	
--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one -->
  
<!-- _________________________ Logical Operators  -->
<!--   and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x	True if $x is not true -->
  
  
  <!-- _________________________ STRING Operators  -->
<!--   .	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1 -->
  

<!--______________________________Array Operators    -->
<!--   +	Union	$x + $y	Union of $x and $y	
==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y -->
  
  
<!-- _____________________________Conditional Assignment Operators   -->
<!--   ?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	
??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2. -->
  
<!-- _____________________________IF ELSE___________________   -->
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
  
<!--   ___________________________SWITCH CASE   -->
  
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
  
  
<!-- PHP Loops -->
<!--   while -                loops through a block of code as long as the specified condition is true
do...while -             loops through a block of code once, and then repeats the loop as long as the specified condition is true
for -                    loops through a block of code a specified number of times
foreach -                loops through a block of code for each element in an array -->
  The PHP foreach Loop
  foreach ($array as $value) {
  code to be executed;
}
  
  <?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
  <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
<!--    _______________________break continue-->
  <?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>
  
  <?php
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>
  
  
  
<!-- _________________________________  PHP Functions -->
  <?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
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
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
  
<!--  default argument   -->
  <?php declare(strict_types=1); // strict requirement
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>
<!-- Returning values -->
  <?php declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
  
<!-- return type declaration  -->
  <?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>
  
<!--  agu by reference  -->
  <?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>
<!-- ____________________________ARRAY   -->
  <?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
  
<!--   Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays -->
  
<!--  Length of an Array - The count() Function  -->
  <?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
  
<!-- ________________________indexed array ____________________  -->
  <?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
  
  
<!-- Loop Through an Indexed Array   -->
  
 <?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
  
  
<!-- _____________________________________________________Associative Arrays   -->
  
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?> 
  
  
<!--   through loops -->
  <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<!-- ___________________________MULTIDIMENSION ARRAY -->
 <?php
  $cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
  
  for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
<!--  _____________________________________ Sorting Arrays___________________________ -->
<!--   
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key -->
  
<!--  Sort Array in Ascending Order - sort()  -->
  <?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>
 <?php  #number
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
?> 

  
<!--  Sort Array in Descending Order - rsort()  -->
 <?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
?>
  
 <?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
?>
  
<!-- Sort Array (Ascending Order), According to Value - asort()  -->
  <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>
<!--  ort Array (Ascending Order), According to Key - ksort()  -->
  <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
?>
<!-- Sort Array (Descending Order), According to Value - arsort()   -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
?>  
  
<!-- Sort Array (Descending Order), According to Key - krsort()   -->
 <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
?>
  
  </body>
</html> 
