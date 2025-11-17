<?php

$a=$_POST["a"];
$b=$_POST["b"];

echo $a*$b;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    가로길이:<?php echo $a; ?><br>
    세로길이:<?php echo $b; ?><br>
    넓이:<?php echo $a; ?><br>
</body>
</html>