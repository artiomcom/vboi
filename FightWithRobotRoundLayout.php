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

     public function getRound($player1, $player2)
    {
        for ($i=0; $i < 10; $i++) {

            var_dump("Куда стрелять?");
//           $line = readline("");
            $line = $this->read_stdin();
            $player1 = new gamer();
            $player1->setShootlocation($line);

            var_dump("Куда уклоняться?");
//            $line1 = readline("");
            $line1 = $this->read_stdin();
            $player1->setLocation($line1);

            $player2 = new robot();
            $player2->setShootlocation($player2->getRandomLocation());
            $player2->setLocation($player2->getRandomLocation());

            $dredd = new Judge();
            $dredd->initFighters();
            $dredd->shootComment($player1->getShootlocation(),   $player2->getShootlocation());
            $dredd->ChangeLocComment($player1->getLocation(), $player2->getLocation());
            $con = $dredd->shootComment($player1->getShootlocation(),   $player2->getShootlocation())
                .". ".  $dredd->ChangeLocComment($player1->getLocation(), $player2->getLocation());
            var_dump( $con );
            var_dump($dredd->hitComment($player1,$player2));


        }
    }

   public  function read_stdin()//TRICK FOR WINDOWS
    {
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        $input = fgets($fr,128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose ($fr);                   // close the file handle
        return (int)$input;                  // return the text entered
    }

} 