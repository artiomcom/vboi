<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 5/11/14
 * Time: 9:35 PM
 */

//namespace classrobot;

interface fighter {

    public function getName();
    public function getHealth();
    public function getPower();
    public function getLocation();
    public function getShootlocation();

    public function setName($name);
    public function setHealth($health);
    public function setPower($power);
    public function setLocation($location);
    public function setShootlocation($shootlocation);
} 