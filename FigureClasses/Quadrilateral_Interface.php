<?php

interface Quadrilateral_Interface
{
    public function __construct($sideA, $sideB, $sideC, $sideD);
    public function getType();

    public function getSideA();
    public function getSideB();
    public function getSideC();
    public function getSideD();

    public function setSideA($sideA);
    public function setSideB($sideB);
    public function setSideC($sideC);
    public function setSideD($sideD);

    public function getPerimeter();
    public function setPerimeter($perimeter);
    public function getArea();
    public function setArea($area);
}
