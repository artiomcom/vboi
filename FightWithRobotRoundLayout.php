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

    public function getRound(){

        for ($i=0; $i < 3; $i++) {

            var_dump("Куда стрелять?");
            $line = readline("");

            $this->player = new gamer();
            $this->player->setShootlocation($line);
            $playershootloc = $this->player->getShootlocation();


            $this->robocop = new robot();
            $this->robocop->setLocation(1);

            $this->dredd = new DreddJudje();
            $this->dredd->roundWinnerComment($playershootloc, $this->robocop->getRandomShootToLoc());


        }

    }

} 