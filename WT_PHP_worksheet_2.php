<!DOCTYPE html>
<html>
<body>
<!--a)if character variable taxCode is ’TC’, increase price by adding the taxRate percentage if price to it.-->
<?php
$taxcode="TC";
$price=1000;
$tax=2;
if ($taxcode=="TC")
{
    $price=$price+($price*($tax/100));
}
echo "Price is:- ", $price;
?>
    
<!--b)	If integer variable opCode has the value 1, read in double values for A and B and calculate and print their sum.-->
  <?php
$opCode=1;
if ($opCode==1)
{
    $A=10.5;
    $B=20.25;
    echo "Sum is:-",$A+$B;
}
?>

<!--c)	If integer variable currentNumber is odd, change its value so that it is now 3 times currentNumber plus 1, otherwise change its value so that it is now half of currentNumber (rounded down when currentNumber is odd). -->
    <?php
$currentNumber=22;
if ($currentNumber%2!=0)
{
    $currentNumber=$currentNumber*3+1;
}
else
{
    $currentNumber=$currentNumber/2;
    if ($currentNumber%2!=0)
    {
        $currentNumber=$currentNumber-1;
    }
}
echo "Number is:-",$currentNumber;
?>

<!--d) d)	Assign true to the boolean variable leapYear if the integer variable year is a leap year. (A leap year is a multiple of 4, and if it is a multiple of 100, it must also be a multiple of 400.) -->
    
<?php 
$leapYear=NULL;
$year=2012;
if ($year%4==0)
{
    $leapYear=TRUE;
}
print($leapYear);
?>


<!-- e)	Assign a value to double variable cost depending on the value of integer variable
distance as follows:
Distance                                                               Cost
-----------------------------------                           ----------
0 through 90                                                     5.00
More than 90 but not more than 300               8.00
More than 300 but less than 9,00                   10.00
900 or more                                                     12.00 -->

<?php
$distance=50;
if($distance>0 and $distance<=90)
{
    $cost=5.00;
}
elseif($distance>90 and $distance<=300)
{
    $cost=8.00;
}
elseif($distance>300 and $distance<900)
{
    $cost=10.00;
}
elseif($distance>=900)
{
    $cost=12.00;
}
echo "Cost is:-",$cost;
?>


</body>
</html>
