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
  
<!--<!-- ---------------------insteger -->-->
 <?php
$x = 5985;
var_dump($x);
?>
  
<!--<!-- ---------------------array----->-->
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  
  
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
    
<!--<!-- ---------------------function and string -->-->
  
<!-- strlen() -->
<?php 
  echo strlen("hello world"); //output 12
  ?>
 
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

  </body>
</html> 
