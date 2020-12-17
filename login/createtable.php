<?php 


date_default_timezone_set("Asia/Kathmandu");

//connection to mysql server and coursera database
$createtablecon = new mysqli('localhost','root','','coursera');

if($createtablecon->connect_error){
    die("connection failed " . $createtablecon->connect_error);
}else{
    echo "Connection to the server is successful" .  "<br>";
}

//Table sql

$createtablesql = "CREATE TABLE userinfo ( 
    id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    First_Name VARCHAR(200) NOT NULL , 
    Middle_Name VARCHAR(200) NOT NULL , 
    Last_Name VARCHAR(200) NOT NULL , 
    Username VARCHAR(50) NOT NULL , 
    Email_Address VARCHAR(200) NOT NULL , 
    Phone_Number INT(20) NOT NULL , 
    Address VARCHAR(200) NOT NULL , 
    Password VARCHAR(20) NOT NULL , 
    Age INT(100) NOT NULL ,
    Date_Entry DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE = INNODB";


if($createtablecon->query($createtablesql)==TRUE){
    echo "table created sucessfully";
}else{
    echo "failed to create table" . mysqli_error($createtablecon);
}
echo "<br>hello world <br>";
$createtablecon->close();

?>