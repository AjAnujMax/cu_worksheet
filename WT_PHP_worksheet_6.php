<html>
<head>
<title>created by ANUJ KUAMR MAHATO, 03/04/2021</title>
</head>
<body>
<br>
a)	Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. For example :<br>
$mycalc = new MyCalculator( 12, 6);<br>
echo $mycalc- > add(); // Displays 18<br>
echo $mycalc- > multiply(); // Displays 72 <br>
<br>
<br>
<br>







<?php
class Calculator {
private $_val1, $_val2;


public function __construct( $val1, $val2 ) {
$this->_val1 = $val1;
$this->_val2 = $val2;
}

public function add() {
return $this->_val1 + $this->_val2;
}

public function sub() {
return $this->_val1 - $this->_val2;
}

public function multi() {
return $this->_val1 * $this->_val2;
}

public function div() {
return $this->_val1 / $this->_val2;
}
}
$mycalc = new Calculator(12, 6); 
echo $mycalc-> add()."\n"; //  Output 18 
echo $mycalc-> multi()."\n"; // Output 72
echo $mycalc-> sub()."\n"; //  Output 6
echo $mycalc-> div()."\n"; // Output 2
?>




<br>
<br>
<br>

b)	Write a PHP class that sorts an ordered integer array with the help of sort() function. Sample array : array(11, -2, 4, 35, 0, 8, -9)
Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )

<br>
<br>
<br>






























</body>
</html>
