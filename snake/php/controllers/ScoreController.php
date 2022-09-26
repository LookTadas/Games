<?php
    include "./php/models/Score.php";
    class ScoreController
    {

    public static function index ()
    {
        $score = Score::all();
        return $score;
    }

    public static function show ()
    {
        $score = Score::find($_POST["playerName"]);
        return $score;
    }

    public static function store ()
    {
        Score::create();
    }

    public static function edit ()
    {

    }

    public static function update ()
    {
        $score = new Score();
        $score->playerName = $_POST["playerName"];
        $score->tag = $_POST["tag"];
        $score->highScore = $_POST["highScore"];
        

    }

    public static function destroy ()
    {

    }
    }   
?>