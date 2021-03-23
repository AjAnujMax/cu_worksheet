<!DOCTYPE html>
<html>
<head>
<title>1</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<br>
<br>
  
  
<!--   Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format. -->
  
  
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 270px wide (8 columns x 60px) -->
<?php
for($a=0; $a< 10; $a++)
 { 
   for($b=0; $b< 10; $b++)
      {
	     echo $a.$b.", "; 
      }
 }
 printf("\n"); 
?>

</table>
  
  
  
<!--   Write a PHP script using nested for loop that creates a chess board as shown below. Use table width="270px" and take 30px as cell height and width.
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 270px wide (8 columns x 60px) --> -->
<?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
</table>

</body>
</html>
