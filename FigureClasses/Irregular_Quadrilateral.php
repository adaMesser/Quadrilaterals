<?php

class Irregular_Quadrilateral implements Quadrilateral_Interface
{
    use Quadrilateral_Trait;
    protected $type = "Irregular Quadrilateral";
    protected $sideA;
    protected $sideB;
    protected $sideC;
    protected $sideD;

    public function __construct($sideA, $sideB, $sideC, $sideD)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
        $this->sideD = $sideD;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSideA()
    {
        return $this->sideA;
    }

    public function getSideB()
    {
        return $this->sideB;
    }

    public function getSideC()
    {
        return $this->sideC;
    }

    public function getSideD()
    {
        return $this->sideD;
    }

    public function setSideA($sideA)
    {
        $this->sideA = $sideA;
    }

    public function setSideB($sideB)
    {
        $this->sideB = $sideB;
    }

    public function setSideC($sideC)
    {
        $this->sideC = $sideC;
    }

    public function setSideD($sideD)
    {
        $this->sideD = $sideD;
    }

    public function getPerimeter()
    {
        return $this->perimeter;
    }

    public function setPerimeter($perimeter)
    {
        $this->perimeter = $perimeter;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }
}
