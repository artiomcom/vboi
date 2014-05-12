<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 5/12/14
 * Time: 11:22 PM
 */

require_once('robot.php');
require_once('gamer.php');


class DreddJudje {

    public function roundWinnerComment($fighter1ShootLoc, $fighter2ShootLoc)
    {
        $fighter1 = new gamer();
        var_dump($fighter1->getName());
        $fighter1->shootlocation= $fighter1ShootLoc;
        var_dump($fighter1->getShootlocation());


        $fighter2 = new robot();
        var_dump($fighter2->getName());
        var_dump($fighter2->getShootlocation());

    }


} 