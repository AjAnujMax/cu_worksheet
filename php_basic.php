<!--______________________________ BASIC codes from start_____________________________________ -->
<!-- PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. -->


<!-- ___________hello world_______________________________ -->
<!DOCTYPE html>
<html>
<link href="table.css" rel="stylesheet" type="text/css">
<body>
<table width="753" height="605" border="1"> 
<tbody>
    <tr>
      <th width="154" height="120" style="text-align: center">ad</th>
      <th colspan="3" style="text-align: center; font-size: 36px;">PHP</th>
      <th width="157" style="text-align: center">ad</th>
    <tr>
      <th rowspan="5" style="text-align: center">&nbsp;</th>
      <th width="417" height="48" style="text-align: center">content</th>
      <th width="460" style="text-align: center">php code </th>
      <th width="329" style="text-align: center">output</th>
      <th rowspan="5" style="text-align: center">&nbsp;</th>
    <tr>
      <th style="text-align: center">hello</th>
      <th style="text-align: center">

$txt = "PHP";
echo "I AM STARTing with $txt!";
		&nbsp;</th>
      <th style="text-align: center">
      <?php
$txt = "PHP";
echo "I AM STARTing with $txt!";
?>&nbsp;</th>
    <tr>
      <th style="text-align: center">strlen()&nbsp;</th>
      <th style="text-align: center">
echo strlen("Hello world!"); // expect outputs 12   
      
      &nbsp;</th>
      <th style="text-align: center">
      <?php
echo strlen("Hello world!"); // outputs 12
?>&nbsp;</th>
    <tr>
      <th style="text-align: center">&nbsp;</th>
      <th style="text-align: center">&nbsp;</th>
      <th style="text-align: center">&nbsp;</th>
    <tr>
      <th style="text-align: center">&nbsp;</th>
      <th style="text-align: center">&nbsp;</th>
      <th style="text-align: center">&nbsp;</th>
</table>

<!--  HELLOW WORLD	 -->

<?php
$txt = "PHP";
echo "I love $txt!";
?>

</body>
</html>
