<?php

$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
if ($c == "+") {
    $sum=$a+$b;
} 
else if($c=="-"){
    $sum=$a-$b;
}
else if($c=="*"){
    $sum=$a*$b;
}
else if($c=="/"){
    $sum=$a/$b;
}
echo $sum;
?>
