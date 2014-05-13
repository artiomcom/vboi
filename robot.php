<?php
//namespace classrobot;
//use classrobot\fighter;
//require_once('fighter.php');

class robot implements fighter
{
    public $name = "Robocop";
    public $health = 22;
    public $power = 44;
    public $location = 0;
    public $shootlocation = 0;


    public function getRandomLocation()
    {
        $rand = rand(0, 2);
        return  $rand;
    }


    public function Health()
    {
        $this->getHealth();
    }

    public function Power()
    {
        $this->getPower();
    }

    public function Location()
    {
        $this->getLocation();
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getShootlocation()
    {
        return $this->shootlocation;
    }

    public function setShootlocation($shootlocation)
    {
        $this->shootlocation = $shootlocation;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function setPower($power)
    {
        $this->power = $power;
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