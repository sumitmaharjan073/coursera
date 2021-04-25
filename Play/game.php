<?php
session_start();

$con = mysqli_connect('localhost','root','','coursera');
echo "<script src='../js/coursera.js'></script>";
//$usenameFromJs = "<script>document.write(userNameForShow);//console.log(userNameForShow);</script>";
$var_value = $_SESSION['usernamefortore'];
$sql = "SELECT First_Name, Middle_Name, Last_Name FROM userinfo WHERE Username = '$var_value'";
$query = mysqli_query($con, $sql);
while( $row = mysqli_fetch_assoc($query)) {
    
    $userFullName = $row['First_Name'] . ' ' . $row['Middle_Name'] . ' ' . $row['Last_Name'];
    $GLOBALS['UserName'] = $userFullName;
};
$dbclose = mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course For Revise > Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../Play/game.css">

</head>

<body>
    <section id="game-page">
        
        
        <div class="container">
            <div class="row">
                
            <h1>
            <form action="../index.php" method="post" id="formToPassName">
                <input type="hidden" name="userNameFromGame" value="<?php echo $UserName;?>">
            </form>
            <button type="submit" form="formToPassName" class="buttonToIcon" name="fromGame">
                <i class="fa fa-home"></i>
            </button>
            Welcome Back, <spam id="usenameForWelcome"><?php echo $UserName;?></spam></h1>
                <div class="col-md-8 border left-game-part">
                    <div class="title">
                        <h3>Quizzes</h3>
                    </div>
                    <div id="quiz">
                        <div id="card">
                            <div class="card-header" id="quizQuestionPart">
                                Q No. <span id="questionNumber">1</span> > <span id="questionContent">Quetion should appear here?</span>
                            </div>
                            <div class="card-body" id="quizAnswerPart">
                                <input type="radio" name="ans" value="a"> A. <span id="a-ans"></span><br>
                                <input type="radio" name="ans" value="b"> B. <span id="b-ans"></span><br>
                                <input type="radio" name="ans" value="c"> C.<span id="c-ans"></span><br>
                                <input type="radio" name="ans" value="d"> D. <span id="d-ans"></span><br>
                                
                            </div>
                            <h2 id="scoreValue"><h2>
                        </div>
                    </div>
                    <button class="btn-primary" id="next">Next</button>
                    
                    <a href="game.php">
                    <button class="btn-success" id="prev">Start Over</button>
                    </a>
                        
                    <!-- <button class="btn-success" id="start" onclick="startOver()">
                        Start Over
            
                    </button> -->
                    <form id="mySubmitForm" action="submitScore.php" method="POST">
                        <input type="hidden" name="username" value="<?php echo $userFullName ?>">
                        <input type="hidden" name="score" id="scoreField">
                        <!-- <input type="submit" value="Submit Score" id="start"> -->
                    </form>
                    <button type="submit" form="mySubmitForm" class="btn-success" id="start">Submit Score</button>
                   
                    <hr>
                    <!-- <div class="title">
                        <h3>TiC TaC ToE</h3>
                    </div> -->
                    <!-- <div id="tictactoe">
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="TicTacToeBoxSquare col-md-6">
                                            <input type="submit" id="b11" value=" " class="TicTacToeBox" onclick="TicTacToeInput(1,1)"/>
                                            <input type="submit" id="b12" value=" " class="TicTacToeBox" onclick="TicTacToeInput(1,2)"/>
                                            <input type="submit" id="b13" value=" " class="TicTacToeBox" onclick="TicTacToeInput(1,3)"/>
                                            <input type="submit" id="b21" value=" " class="TicTacToeBox TicTacToeClear" onclick="TicTacToeInput(2,1)"/>
                                            <input type="submit" id="b22" value=" " class="TicTacToeBox" onclick="TicTacToeInput(2,2)"/>
                                            <input type="submit" id="b23" value=" " class="TicTacToeBox" onclick="TicTacToeInput(2,3)"/>
                                            <input type="submit" id="b31" value=" " class="TicTacToeBox TicTacToeClear" onclick="TicTacToeInput(3,1)"/>
                                            <input type="submit" id="b32" value=" " class="TicTacToeBox" onclick="TicTacToeInput(3,2)"/>
                                            <input type="submit" id="b33" value=" " class="TicTacToeBox" onclick="TicTacToeInput(3,3)"/>
                    
                                            
                                        </div>
                                        <button class="col-md-2" id='buttonSt' type="button" onclick="initGame()"class="clear">Start</button>
                                        <button class="col-md-2" id='buttonNext' type="button" onclick="TicTacToePrint()">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div> -->
                   
                </div>
                <div class="col-md-4 score-list border">
                    LeaderBoard
                    <br>
                    <table class="table">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Score</th>
                        </tr>
                        
                            <?php
                            $conDis = mysqli_connect('localhost','root','','coursera');
                            $sqlDis = 
                            "SELECT FullName, Score 
                            FROM scorelist ORDER BY Score DESC";
                            $queryDis = mysqli_query($conDis, $sqlDis);
                            while( $rowDis = mysqli_fetch_assoc($queryDis)) {
                                $nameDis = $rowDis['FullName'];
                                $scoreDis = $rowDis['Score'];
                                echo "<tr>";
                                echo "<td>$nameDis</td>";
                                echo "<td>$scoreDis</td>";
                                echo "</tr>";
                            }
                            //ysqli_close($sqlDis);
                            mysqli_close($conDis);
                             ?>
                        
                    </table>
                    
                </div>
            </div>
        </div>

    </section>
    <!-- <script src="../js/coursera.js"></script> -->
    <script src="../Play/game.js"></script>
    
    
    
</body>

</html>