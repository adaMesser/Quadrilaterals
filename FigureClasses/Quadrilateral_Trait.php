<?php

trait Quadrilateral_Trait
{
    public function getQuadrilateralType(){
        echo "This figure is ".$this->type."<br>";
    }
    public function getQuadrilateralInfo()
    {
        echo "Perimeter = " . $this->getPerimeter() . ", Area = " . $this->getArea() . "<br><br>";
    }
}
