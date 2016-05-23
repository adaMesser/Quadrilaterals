<?php
include 'include.php';

$irregular_quadrilateral = new Irregular_Quadrilateral(3, 4, 5, 6);
$irregular_quadrilateral->getQuadrilateralType();
$irregular_quadrilateral->getQuadrilateralInfo();

$kite = new Kite(2, 2, 4, 4);
$kite->getQuadrilateralType();
$kite->getQuadrilateralInfo();

$parallelogram = new Parallelogram(4, 5, 4, 5);
$parallelogram->getQuadrilateralType();
$parallelogram->getQuadrilateralInfo();

$trapezoid = new Trapezoid(2, 6, 4, 5);
$trapezoid->getQuadrilateralType();
$trapezoid->getQuadrilateralInfo();

$rhombus = new Rhombus(4, 4, 4, 4);
$rhombus->getQuadrilateralType();
$rhombus->getQuadrilateralInfo();

$rectangle = new Rectangle(4, 5, 4, 5);
$rectangle->getQuadrilateralType();
$rectangle->getQuadrilateralInfo();

$square = new Square(4, 4, 4, 4);
$square->getQuadrilateralType();
$square->getQuadrilateralInfo();