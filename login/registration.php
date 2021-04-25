<?php 
session_start();

//this only takes input from the user of login or sign up


date_default_timezone_set("Asia/Kathmandu");

//test to see if all the input of login or sign in 
// is get to this file or not

if(isset($_POST['login'])){
	include('dbconnection.php');
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // echo "Email:" .$email. " Password:" .$password. " ";  
    $sql = "SELECT Email_Address, Pswd, Username FROM userinfo";
    $query = mysqli_query($con, $sql);

    while( $row = mysqli_fetch_assoc($query)) {
        echo '<br/>';
        $emailDb = $row['Email_Address'];
        $passwordDb = $row['Pswd'];
        if($email == $emailDb && $password == $passwordDb){
            $userNameForStore = $row['Username'];
            $_SESSION['usernamefortore'] = $userNameForStore;


            
            //      let userNameGet = <?php echo $usernameForWelcome;
            //     alert(userNameGet);
            //             // echo 'email and password matched';
            //include('../Play/game.html');
            header("Location: ../Play/game.php");
            break;
        } else {
            echo 'incorrect email and password';
        }
        echo '<br/>';
	}
	$dbclose = mysqli_close($con);
}
if(isset($_POST['signup'])){
    include('dbconnection.php');
    $firstname = $_POST['first'];
    $middlename = $_POST['middle'];
    $lastname = $_POST['last'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    // echo $firstname . " " . $middlename ." ". $lastname ." ". $username ." ". $age ." ". $address ." ". $phonenumber ." ". $email ." ". $password;


    //inserting these data into the mysql
    //when inserting when we want all colum name 
    //then it is not neccessary to include column_name
    //but every entry should be in order
    //id-not needed, First_Name, Middle_Name, Last_Name, Username, Email_Address, Phone_Number, Address, Password, Age , date 
    $sql = "INSERT INTO userinfo VALUES ( DEFAULT, '$firstname', '$middlename', '$lastname', '$username', '$email', '$phonenumber', '$address', '$password', '$age', DEFAULT )";

    $query = mysqli_query($con, $sql);

    if($query){
        //echo 'Data successfully Inserted in the database';
        $userNameForStore = $username;
        $_SESSION['usernamefortore'] = $userNameForStore;
           
        header("Location:  ../Play/game.php");
    }else{
        // echo 'Error:' . $sql . '<br>' . mysqli_error($con);
    }
    $dbclose = mysqli_close($con);
}

//header("Location: ../index.php");
?>

<html>
    <head>
        <?php echo $userNameForStore; ?>
    </head>
    
</html>
