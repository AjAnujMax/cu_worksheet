<!--______________________________________________ BASIC codes from start_____________________________________ -->
<!-- PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. -->


<!-- _____________________________________________hello world_______________________________ -->
<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
?>
<br>
  <!-- _________________________  print __________________ -->
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>
 
<br>
<!-- ________________________  variable _________________ -->
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
<!-- ______________________________ PHP Data Types_________________ -->
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
<!-- ______________________________________Global Variables - Superglobals_____________________________  -->
<!-- 
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION -->
  
<!----------------------- Global  -->
 <?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>
  
<!-- -------------------- $_server-->
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<!-- 
$_SERVER['PHP_SELF']	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR']	Returns the IP address of the host server
$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current page   -->
  
  
<!-- _____________________________________ $_REQUEST   -->
  
  <html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
  
<!-- _______________________________________$_post   -->
  <html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>
  
<!-- __________________________________________________________ $_GET________________  -->
<html>
<body>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
<!-- __________________________________________________________________________  -->
  
  
</body>
</html>
</body>
</html>
  
<!-- ________________________________ REGULAR EXPRESSION______________________   -->
<!--   A regular expression is a sequence of characters that forms a search pattern. 
When you search for data in a text, you can use this search pattern to describe 
what you are searching for. -->
<?php  $exp = "/w3schools/i" ?>
  
<!--____________________________ preg_match()__________________________________  -->
  <?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1
?>
<!--____________________________preg_match_all()__________________________________  -->  
 <?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>
  
<!--____________________________preg_replace()__________________________________  -->
  <?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>
<!--   
i	Performs a case-insensitive search
m	Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)
u	Enables correct matching of UTF-8 encoded patterns -->
  
<!-- 
_____________Regular Expression Patterns___________________
Brackets are used to find a range of characters:

Expression	Description
[abc]	Find one character from the options between the brackets
[^abc]	Find any character NOT between the brackets
[0-9]	Find one character from the range 0 to 9  -->
  
  
<!-- 
______________________Metacharacters_-______________________

Metacharacter	Description
|	  Find a match for any one of the patterns separated by | as in: cat|dog|fish
. 	Find just one instance of any character
^ 	Finds a match as the beginning of a string as in: ^Hello
$ 	Finds a match at the end of the string as in: World$
\d  	Find a digit
\s  	Find a whitespace character
\b	   Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
\uxxxx  	Find the Unicode character specified by the hexadecimal number xxxx
-->
 
<!-- ______________________________Quantifiers
Quantifier	Description
n+	Matches any string that contains at least one n
n*	Matches any string that contains zero or more occurrences of n
n?	Matches any string that contains zero or one occurrences of n
n{x}	Matches any string that contains a sequence of X n's
n{x,y}	Matches any string that contains a sequence of X to Y n's
n{x,}	Matches any string that contains a sequence of at least X n's -->
  
  
<!-- ______________________________GLobal____________________________________ -->
  <?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>
  </body>
</html> 
