<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 5/12/14
 * Time: 11:43 PM
 */

require_once('robot.php');
require_once('gamer.php');
require_once('DreddJudje.php');

class FightWithRobotRoundLayout {

    public $robocop;
    public $player;
    public $dredd;

    public function getRound($player1,$player2){

        for ($i=0; $i < 3; $i++) {

            var_dump("Куда стрелять?");
            $line = readline("");
            $this->player = new gamer();
            $this->player->setShootlocation($line);
            $playershootloc = $this->player->getShootlocation();

            var_dump("Куда уклоняться?");
            $line1 = readline("");
            $this->player->setLocation($line1);
            $playerlocation = $this->player->getLocation();

            $this->robocop = new robot();
            $this->robocop->getRandomLocation();
            $robotlocation = $this->robocop->getShootlocation();

            $this->dredd = new DreddJudje();

            $this->dredd->roundComment($playershootloc,  $this->robocop->getRandomShootToLoc());

            $this->dredd->roundComment($playershootloc,  $this->robocop->getRandomShootToLoc());


        }

    }

} 