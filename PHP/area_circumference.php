<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

<form action="area_circumference.php" method="get">

<p><input type="text" name="R" id=""></p>
<p><input type="submit" value="submit"></p>


</form>

    
<?php

define( 'pi' , 3.14159);

(float)$R = ($_GET["R"]) ;
//$R = readfile("");

$R = round($R,2);

$A = pi*pow($R , 2);
$A = number_format($A, 4, '.' ,'');
echo "A=$A\n";


?>


</body>
</html>