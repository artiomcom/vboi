<?php
//namespace classrobot;
//use classrobot\robot as robot;

//require_once('gamer.php');
//require_once('robot.php');
require_once('fighter.php');
require_once('FightWithRobotRoundLayout.php');

class vboi  {

    public function PlayRound()
    {
        $robocop = new robot();
        $player = new gamer();
        $rl = new FightWithRobotRoundLayout();
        $rl->getRound($player, $robocop);
    }
}

$instance = new vboi();
$instance->PlayRound();