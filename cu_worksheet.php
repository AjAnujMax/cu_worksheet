<!DOCTYPE html>
<html>
<body>
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


</body>
</html>
