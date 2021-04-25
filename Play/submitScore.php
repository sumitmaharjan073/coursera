<?php

$a = $_POST['username'];
$b = (int)$_POST['score'];
echo $a;
echo '<br>';
echo $b;
echo gettype($b);

$conSubmit = mysqli_connect('localhost','root','','coursera');
$sqlSubmit = "INSERT INTO scorelist VALUES ('$a','$b')";
$querySubmit = mysqli_query($conSubmit, $sqlSubmit);
$dbcloseSubmit = mysqli_close($conSubmit);

header("Location: game.php");


?>
<html>
    <head>

    </head>
    <body>



    </body>
</html>