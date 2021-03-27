<!DOCTYPE html>
<html>
<link href="table.css" rel="stylesheet" type="text/css">
<body style="color: #BE1B1E; font-size: 16px;">
<table width="100%" height="605" border="1" cellspacing="20"> 
<tbody>
    <tr>
      <th width="154" height="120" style="text-align: center">&nbsp;</th>
      <th colspan="3" style="text-align: center; font-size: 36px; color: #EA7D7E;"><p>MST-1 </p>
        <p>WEB TECHNOLOGY(PHP)-27/03/2021</p>
      <p>NAME- , ROLL-</p></th>
      <th width="157" style="text-align: center">&nbsp;</th>
    <tr>
      <th rowspan="5" style="text-align: center">&nbsp;</th>
      <th width="417" height="48" style="text-align: center; color: #29CD38;"><p>QUESTION:-</p>
      <p>Q1. Write a program for performing the  following operation on the Indexed and Associative array.</p></th>
      <th width="460" style="text-align: center; color: #29CD38;"><strong>PHP CODE&nbsp;</strong> </th>
      <th width="329" style="text-align: center; color: #29CD38;"><strong>OUTPUT </strong></th>
      <th rowspan="5" style="text-align: center">&nbsp;</th>
    <tr>
      <th style="text-align: center">1. Arithmetic operations like, sum,  multiplications, subtractions and divisions among the elements of array two  arrays</th>
      <th style="text-align: center"><div>
        <div>
          <div>
            <div title="Run and Edit">&lt;?php <br>
              <br>
              $x = 45;<br>
              $y = 70;<br>
              <br>
              $add = $x + $y; <br>
              $sub = $x - $y;<br>
              $mul = $x * $y;<br>
              $div = $y / $x; <br>
              <br>
              echo &quot;Sum: &quot; . $add . &quot;&lt;br&gt;&quot;; <br>
              echo &quot;Diff: &quot; . $sub . &quot;&lt;br&gt;&quot;;<br>
              echo &quot;Mul: &quot; . $mul . &quot;&lt;br&gt;&quot;; <br>
              echo &quot;Div: &quot; . $div;<br>
              <br>
              ?&gt;</div>
          </div>
        </div>
      </div>
      <div>
      </div></th>
<th style="text-align: center"><?php 

$x = 45;
$y = 70;

$add = $x + $y; 
$sub = $x - $y;
$mul = $x * $y;
$div = $y / $x; 

echo "Sum: " . $add . "<br>"; 
echo "Diff: " . $sub . "<br>";
echo "Mul: " . $mul . "<br>"; 
echo "Div: " . $div;

?>&nbsp;</th>
    <tr>
      <th style="text-align: center">2. Sort the element of an  array in the ascending and descending order. </th>
      <th style="text-align: center"><pre>&lt;?php  // Defining array 
 
$age = array("Anuj"=&gt;20, "Ram"=&gt;14, "Shyam"=&gt;45, "Rohan"=&gt;35);
  
   //Ascending Associative Sorting, 
asort($age);  
print_r($age);  

//Desending Associative Sorting 
 arsort($age);  
print_r($age);

?&gt;</pre></th>
<th style="text-align: center"><?php  // Defining array 
 
$age = array("Anuj"=>20, "Ram"=>14, "Shyam"=>45, "Rohan"=>35);
  
   //Ascending Associative Sorting, 
asort($age);  
print_r($age);  

//Desending Associative Sorting 
 arsort($age);  
print_r($age);

?>&nbsp;</th>
    <tr>
      <th style="text-align: center">3. Merge the two arrays of  different sizes.</th>
      <th style="text-align: center"><p>&lt;?php<br>
        <br>
        $my_array1 = array(0 =&gt; 'zero_a', 2 =&gt; 'two_a', 3 =&gt; 'three_a');<br>
        $my_array2 = array(1 =&gt; 'one_b', 3 =&gt; 'three_b', 4 =&gt; 'four_b');</p>
        <p><br>
          $res = array_merge($my_array1,$my_array2);<br>
          print_r($res);<br>
          <br>
      ?&gt;</p></th>
      <th style="text-align: center"><?php

$my_array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$my_array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$res = array_merge($my_array1,$my_array2);
print_r($res);

?>&nbsp;</th>
    <tr>
      <th style="text-align: center">4. Perform any operation  of your choice in the Associative array. </th>
      <th style="text-align: center"><div>
        <div>
          <div>
            <div title="Run and Edit">
              <div>
                <p>&lt;?php</p>
                <p>$arr[&quot;xyz&quot;]= 107;<br>
                  $arr[100]= &quot;abc&quot;;<br>
                  $arr[12.36] = 98;<br>
                  $arr[&quot;abc&quot;]= &quot;pqr&quot;;<br>
                  foreach($arr as $key =&gt; $val)<br>
                  {<br>
                  echo $key.&quot;=&gt;&quot;.$val.&quot;&lt;br&gt;&quot;;<br>
                  }<br>
                  ?&gt;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div>
          <div id="highlighter_625815">
            <table cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td><div>
                    <div></div>
</div></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div></th>
      <th style="text-align: center"><?php

$arr["xyz"]= 107;
$arr[100]= "abc";
$arr[12.36] = 98;
$arr["abc"]= "pqr";
foreach($arr as $key => $val)
{
echo $key."=>".$val."<br>";
}
?>&nbsp;</th>
</table>
</body>
</html>
