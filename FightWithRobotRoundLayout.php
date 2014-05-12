<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 5/12/14
 * Time: 11:43 PM
 */

require_once('robot.php');
require_once('gamer.php');
require_once('JudgeDredd.php');

class FightWithRobotRoundLayout {

    protected $dredd;

    public function getRound($player1, $player2)
    {
        for ($i=0; $i < 3; $i++) {
            var_dump("Куда стрелять?");
            $line = readline("");
            $player1 = new gamer();
            $player1->setShootlocation($line);
            $playershootloc = $player1->getShootlocation();

            var_dump("Куда уклоняться?");
            $line1 = readline("");
            $player1->setLocation($line1);
            $playerlocation = $player1->getLocation();

            $player2 = new robot();
            $player2->getRandomLocation();
//            $robotlocation = $player2->getShootlocation();

            $this->dredd = new JudgeDredd();
            $this->dredd->shootComment($playershootloc,  $player2->getRandomShootToLoc());
        }
    }

} 