<?php 

//connection to mysql server 
//if the coursera database is already in the database so the coursera is commented
$createdbcon = mysqli_connect('localhost','root',''/*,'coursera'*/);

if(!$createdbcon){
    die("connection failed " . mysqli_connect_error());
}else{
    echo "Connection to the server is successful" .  "<br>";
}

//for creating database name 'coursera' in the server localhost/other host
$createdbsql = "CREATE DATABASE coursera";
$createdbquery = mysqli_query($createdbcon, $createdbsql);
if(!$createdbquery){
    echo "creating database unsucessful" . "<br/>" . mysqli_error($createdbcon);
}else{
    echo "Connection Successful";
}
//if the coursera database is exist in the server then 
//it will show the output as already existed

mysqli_close($createdbcon);

?>