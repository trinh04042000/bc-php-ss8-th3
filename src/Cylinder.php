<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
    public function getPerimeter($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }
    public function getBaseArea($radius) {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}