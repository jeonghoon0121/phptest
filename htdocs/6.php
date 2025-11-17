<?php
$conn = new mysqli("localhost", "root", "root", "php");
$a =$_POST['a'];
$b =$_POST['b'];
$c =$_POST['c'];

    $sql = "INSERT INTO board(author, title, content) VALUES('$a', '$b', '$c')";
    echo $sql;
    $conn->query($sql);

    header("Location: 9.php");
?>
