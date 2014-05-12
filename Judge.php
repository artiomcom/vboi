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
    public function shootComment($fighter1ShootLoc, $fighter2ShootLoc)
    {
        $fighter1 = new gamer();
        $fighter1->setShootlocation($fighter1ShootLoc);
        $fighter1shootresult = ($fighter1->getName() ." Стрелял в ". $fighter1->getShootlocation());
        var_dump($fighter1shootresult);

        $fighter2 = new robot();
        $fighter2->setShootlocation($fighter2ShootLoc);
        $fighter2shootresult = ($fighter2->getName() ." Стрелял в ". $fighter2->getShootlocation());
        var_dump($fighter2shootresult);
    }

    public function ChangeLocComment($fighter1tLoc, $fighter2Loc)
    {
        $fighter1 = new gamer();
        $fighter1->setLocation($fighter1tLoc);
        $fighterlocresult = ($fighter1->getName() ." ушел в ". $fighter1->getLocation());
        var_dump($fighterlocresult);

        $fighter2 = new robot();
        $fighter2->setShootlocation($fighter2Loc);
        $fighter2shootresult = ($fighter2->getName() ." ушел в ". $fighter2->getLocation());
        var_dump($fighter2shootresult);
    }

    public function JudgeDreddComment($player1, $player2)
    {
        $conc = (string)($this->shootComment($player1,$player2) . $this->ChangeLocComment($player1,$player2));
        var_dump($conc);
    }

}