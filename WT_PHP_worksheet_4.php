<!DOCTYPE html>
<html>
<body>
<!-- a)Write a script which will display the string "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - MAXI" and the words 'red', 'green' and 'white' will come from $color.
$color = array('white', 'green', 'red', 'blue', 'black'); -->

<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
?>

<!-- b)   b) Following are the marks obtain by a student in different subjects.
Programming in C: 95
Math: 90
Java: 96
Cloud Computing: 93
Operating System: 98 
Write the code for the above by using associative array. -->

<?php    
/*create an associate array. */

$student_one = array("programming"=>95, "math"=>90,   
                  "java"=>96, "cloud computing"=>93,   
                  "operating system"=>98);  
    
/* Second method to create an associate array. */
$student_two["programming"] = 95;  
$student_two["math"] = 90;  
$student_two["java"] = 96;  
$student_two["cloud computing"] = 93;  
$student_two["operating system"] = 98;  
    
/* Accessing the elements directly */
echo "Marks for student one is:\n";  
echo "Maths:" . $student_two["programming"], "\n";  
echo "Physics:" . $student_two["math"], "\n";  
echo "Chemistry:" . $student_two["java"], "\n";  
echo "English:" . $student_one["cloud computing"], "\n";  
echo "Computer:" . $student_one["operating system"], "\n";  
?>
</body>
</html>
