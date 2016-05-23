<?php
include 'include.php';

$irregular_quadrilateral = new Irregular_Quadrilateral(3, 4, 5, 6);
$irregular_quadrilateral->getQuadrilateralType();

$kite = new Kite(2, 2, 4, 4);
$kite->getQuadrilateralType();

$parallelogram = new Parallelogram(4, 5, 4, 5);
$parallelogram->getQuadrilateralType();

$trapezoid = new Trapezoid(2, 6, 4, 5);
$trapezoid->getQuadrilateralType();

$rhombus = new Rhombus(4, 4, 4, 4);
$rhombus->getQuadrilateralType();

$rectangle = new Rectangle(4, 5, 4, 5);
$rectangle->getQuadrilateralType();

$square = new Square(4, 4, 4, 4);
$square->getQuadrilateralType();
