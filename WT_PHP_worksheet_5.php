<!DOCTYPE html>
<html>
<body>
<!-- work space for worksheet 5 is created -->
<!--   
  a)	The following is given is the output: array("Seeta"=>"31","Geeta"=>"41","Jeetu"=>"39","Ramesh"=>"40") 
Write the script for the given output and perform following action:
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key 
 -->
  <?php
echo "
Associative array : Ascending order sort by value
";
$array2=array("Seeta"=>"31","geeta"=>"41","jeetu"=>"39","Ramesh"=>"40"); asort($array2);
foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Ascending order sort by Key
";
$array3=array("Seeta"=>"31","geeta"=>"41","jeetu"=>"39","Ramesh"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Value
";
$age=array("Seeta"=>"31","geeta"=>"41","jeetu"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Key
";
$array4=array("Seeta"=>"31","geeta"=>"41","jeetu"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
} 
?>
  
<!-- 
 b)	Implement the unique_names function. When passed two arrays of names, it will return an array containing the names that appear in either or both arrays. The returned array should have no duplicates.
For example, calling unique_names([‘Raman’, ‘Sita’, ‘Geeta’], [‘Geeta’, 'Sophia', ‘Sita’]) should return [‘Sita’, ‘Geeta’, ‘Raman’, 'Sophia'] in any order.
  -->
  
  
<?php
$input = array("a" => "raman", "sita", "geeta", "b" => "geeta", "sophia", "sita");
$result = array_unique($input);
print_r($result);
?>

</body>
</html>
