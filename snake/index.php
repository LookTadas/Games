<?php
    
    include "./php/controllers/ScoreController.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["save"])){
            ScoreController::store();
            
        }
    }
    
    $score = ScoreController::index();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Snake</title>
</head>

<body>
<header>
    <?php
        include "./pages/header.php";
    ?>    
</header>
<div id="container">
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["save"])){
            require "./pages/highScore.php";
            die;
        }
        if($_COOKIE["score"] ==0){
            require "./pages/highScore.php";
            die;
        }
        
        
    }
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["gameOver"])){
            require "./pages/gameOver.php";
            die;    
        }
    }
?>

    
        <div id="score">0</div>

        <form action="" method="post" class="gameOver">
            <input type = "submit" name = "gameOver" class="btn btn-danger"  value="Game Over?!"></input>
        </form>        
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        
        require "./pages/snake.php";    
        die;
    }
?>
</body>

</html>