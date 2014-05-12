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

    public function roundComment($fighter1ShootLoc, $fighter2ShootLoc)
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

} 