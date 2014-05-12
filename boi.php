<?php
//namespace classrobot;
//use classrobot\robot as robot;


require_once('robot.php');
require_once('FightWithRobotRoundLayout.php');



class boi  {

   public $robocob;

   public function getRobotCharachter()
    {
      $this->robocob = new robot();
       var_dump($this->robocob->getPower());
    }

    public function roboShoot()
    {
        $this->robocob = new robot();
        $this->robocob->getRandomShootToLoc();
        var_dump($this->robocob->getShootlocation());
    }

    public function dredd($figther1, $fighter2)
    {

    }
    public function getRoundlay()
    {
        $in = new FightWithRobotRoundLayout();
        $in->getRound();
    }

}

$instance = new boi();
//$instance->getRobotCharachter();
$instance->roboShoot();
$instance->getRoundlay();