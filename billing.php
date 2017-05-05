<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$hcost=400;
$scosh=1200;
$dcost=1500;
$total=0;
if($_POST['Hat']!=0)
{
	$ht = $hcost*$_POST['Hat'];
	$total= $total + ($ht);
	echo "<p> Number of hats chosen is ".$_POST['Hat']."</p><br>";
	echo "<p> The total cost of the hats will amount to Rs. $ht</p><br>";
}

if($_POST[Shoes]!=0)
{
	$ht = $scost*$_POST[Shoes];
	$total= $total + ($ht);
	echo "<p> Number of shoes chosen is ".$_POST[Shoes]."</p><br>";
	echo "<p> The total cost of the shoes will amount to Rs. $ht</p><br>";
}

if($_POST['Jeans']!=0)
{
	$ht = $dcost*$_POST['Jeans'];
	$total= $total + ($ht);
	echo "<p> Number of dress chosen is ".$_POST['Jeans']."</p><br>";
	echo "<p> The total cost of the dress will amount to Rs. $ht</p><br>";
}

echo "<p> THE TOTAL AMOUNT TO BE PAID IS Rs.$total<p><br>";
echo $_POST['Hat'];
?>
</body>
</html>