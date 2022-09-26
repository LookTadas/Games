<?php
    include "./php/models/db.php";
    
    class Score 
    {
        public $id;
        public $playerName;
        public $tag;
        public $highScore;
    
        public function __construct ($id = null, $playerName = null, $tag = null, $highScore = null) 
        {
            $this->id = $id;
            $this->playerName = $playerName;
            $this->tag = $tag;
            $this->highScore = $highScore;
                
        }

        public static function all ()
        {
            $score = [];
            $db = new Db();
            $sql = "SELECT * FROM `players_high_score` ORDER BY `highScore` DESC";
            $result = $db->connect->query($sql);
            while ($row = $result->fetch_assoc())
            {
                $score[] = new Score ($row["id"], $row["playerName"], $row["tag"], $row["highScore"]);
            }
            $db->connect->close();
            return $score;
        }

        public static function create ()
        {
            
            $db = new Db();
            $statement = $db->connect->prepare("INSERT INTO `players_high_score`(`playerName`, `tag`, `highScore`) VALUES (?, ?, ?)");
            $tag = strtoupper($_POST["tag"]);
            $statement -> bind_param ("ssi", $_POST["playerName"], $tag, $_COOKIE["score"]);
            $statement -> execute();
            $statement -> close();
            $db->connect->close();

            
        }

        // public static function find($playerName){
        //     $score = [];
        //     $db = new Db();
        //     $sql = "SELECT * FROM `players_high_score` WHERE `playerName` = " $playerName;
        //     $result = $db->connect->query($sql);
        //     while ($row = $result->fetch_assoc())
        //     {
        //         $score[] = new Score ($row["id"], $row["playerName"], $row["tag"], $row["highScore"]);
        //     }
        //     $db->connect->close();
        //     return $score;

        // }
    }
?>

