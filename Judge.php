<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 5/12/14
 * Time: 11:22 PM
 */

require_once('robot.php');
require_once('gamer.php');

class Judge
{

    public $fighter1;
    public $fighter2;

    public function initFighters()
    {
        $this->fighter1 = new gamer();
        $this->fighter2 = new robot();
    }

    public function shootComment($fighter1ShootLoc, $fighter2ShootLoc)
    {
        $this->fighter1->setShootlocation($fighter1ShootLoc);
        $fighter1shootresult = ($this->fighter1->getName() ." Стрелял в ". $this->fighter1->getShootlocation().", а");
        $this->fighter2->setShootlocation($fighter2ShootLoc);
        $fighter2shootresult = ($this->fighter2->getName() ." Стрелял в ". $this->fighter2->getShootlocation());
        $total = $fighter1shootresult ." ". $fighter2shootresult;
//        var_dump($total);
//        var_dump($this->hitComment( $this->fighter1,$this->fighter2 ));
        return $total;
    }

    public function hitComment($fighter1,$fighter2)
    {
        $fighter1 = $this->fighter1;
        $fighter2 = $this->fighter2;

        $hitComm = "";

        switch($hitComm)
        {
            case ($fighter1->getShootlocation()==$fighter2->getLocation()):
                $hitComm = $fighter1->getName() . " HIT!";

            case ($fighter1->getShootlocation()!=$fighter2->getLocation()):
                $hitComm = $fighter1->getName() . " MISS!";

            case ($fighter2->getShootlocation()==$fighter1->getLocation()):
                $hitComm = $fighter2->getName() . " HIT!";
            case ($fighter2->getShootlocation()!=$fighter1->getLocation()):
                $hitComm = $fighter2->getName() . " MISS!";
        }

////        if ($this->fighter1->getShootlocation()==$this->fighter2->getLocation())
////            var_dump("Bruce Lee HIT!");
//            $hitComm = $this->fighter1->getName() . " HIT!";
//        if ($this->fighter1->getShootlocation()!=$this->fighter2->getLocation())
//            $hitComm = $this->fighter1->getName() . " MISS!";
//
//        if ($this->fighter2->getShootlocation()==$this->fighter1->getLocation())
////            var_dump("ROBOCOB HIT");
//            $hitComm = $this->fighter2->getName() . " HIT!";
//        if ($this->fighter2->getShootlocation()!=$this->fighter1->getLocation())
//            $hitComm = $this->fighter2->getName() . " MISS!";
        return $hitComm;
    }

    public function ChangeLocComment($fighter1tLoc, $fighter2Loc)
    {
        $this->fighter1->setLocation($fighter1tLoc);
        $fighterlocresult = ($this->fighter1->getName() ." ушел в ". $this->fighter1->getLocation().", а");
        $this->fighter2->setLocation($fighter2Loc);
        $fighter2shootresult = ($this->fighter2->getName() ." ушел в ". $this->fighter2->getLocation());
        $total = $fighterlocresult ." ". $fighter2shootresult;
//        var_dump($total);
        return $total;
    }

}