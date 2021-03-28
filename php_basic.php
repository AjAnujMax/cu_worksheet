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
</body>
</html> 
