<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 5/12/14
 * Time: 10:41 PM
 */
//require_once('fighter.php');

class gamer implements fighter
{

    public $name = "Bruce Lee";
    public $health = 22;
    public $power = 44;
    public $location = 0;
    public $shootlocation = 0;

    public function getHealth()
    {
        return $this->health;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getShootlocation()
    {
        return $this->shootlocation;
    }

    public function setShootlocation($shootlocation)
    {
        $this->shootlocation = $shootlocation;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
    }
}

