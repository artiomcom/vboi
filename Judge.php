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
        $fighter1shootresult = ($this->fighter1->getName() ." Стрелял в ". $this->fighter1->getShootlocation());

        $this->fighter2 = new robot();
        $this->fighter2->setShootlocation($fighter2ShootLoc);
        $fighter2shootresult = ($this->fighter2->getName() ." Стрелял в ". $this->fighter2->getShootlocation());

        $total = $fighter1shootresult ." ". $fighter2shootresult;
        var_dump($total);
        return $total;
    }



    public function ChangeLocComment($fighter1tLoc, $fighter2Loc)
    {
        $this->fighter1->setLocation($fighter1tLoc);
        $fighterlocresult = ($this->fighter1->getName() ." ушел в ". $this->fighter1->getLocation());

        $this->fighter2 = new robot();
        $this->fighter2->setLocation($fighter2Loc);
        $fighter2shootresult = ($this->fighter2->getName() ." ушел в ". $this->fighter2->getLocation());
        $total = $fighterlocresult ." ". $fighter2shootresult;
        var_dump($total);
        return $total;
    }

    public function JudgeDreddComment($player1, $player2)
    {
        $player1 = $this->fighter1;
        $player2 = $this->fighter2;
        $conc = (string)($this->shootComment($player1,$player2) . (string)$this->ChangeLocComment($player1,$player2));
        var_dump((string)$this->shootComment($player1,$player2));
    }
}