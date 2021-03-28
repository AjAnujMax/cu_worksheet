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
  
  
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  </body>
</html> 
