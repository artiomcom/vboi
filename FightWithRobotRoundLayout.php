<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 5/12/14
 * Time: 11:43 PM
 */

require_once('robot.php');
require_once('gamer.php');
require_once('Judge.php');

class FightWithRobotRoundLayout {

    protected $dredd;

    public function getRound($player1, $player2)
    {
        for ($i=0; $i < 10; $i++) {
            var_dump("Куда стрелять?");
//           $line = readline("");
            $line = $this->read_stdin();
            $player1 = new gamer();
            $player1->setShootlocation($line);
            $player1shootloc = $player1->getShootlocation();
            var_dump("Куда уклоняться?");
//            $line1 = readline("");
            $line1 = $this->read_stdin();
            $player1->setLocation($line1);
            $player1location = $player1->getLocation();

            $player2 = new robot();
            $player2->setShootlocation($player2->getRandomLocation());
            $player2shootloc = $player2->getShootlocation();

            $player2->setLocation($player2->getRandomLocation());
            $player2location = $player2->getLocation();

            $this->dredd = new Judge();
            $this->dredd->initFighters();

            $this->dredd->shootComment($player1shootloc,  $player2shootloc);
            $this->dredd->ChangeLocComment($player1location, $player2location);
//            $this->dredd->JudgeDreddComment($player1,$player2);
        }
    }

   public  function read_stdin()
    {
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
    }

} 