<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle1 = new Circle("Hinh tron", 10);
echo $circle1->show();
echo "Dien tich: ".$circle1->calculateArea()."<br>";
echo "Chu Vi: ".$circle1->calculatePerimeter()."<br>";
$circle1->resize();
echo "Dien tich resize: ".$circle1->calculateArea()."<br>";
echo "Chu Vi resize: ".$circle1->calculatePerimeter()."<br>";

$Rectangle1 = new Rectangle("Hinh chu nhat", 10, 20);
echo $Rectangle1->show();
echo "Dien tich: ".$Rectangle1->calculateArea()."<br>";
echo "Chu Vi: ".$Rectangle1->calculatePerimeter()."<br>";
$Rectangle1->resize();
echo "Dien tich resize: ".$Rectangle1->calculateArea()."<br>";
echo "Chu Vi resize: ".$Rectangle1->calculatePerimeter()."<br>";

$vuong = new Square("Hinh Vuong", 25);
echo $vuong->show();
echo "Dien tich: ".$vuong->calculateArea()."<br>";
echo "Chu Vi: ".$vuong->calculatePerimeter()."<br>";
$vuong->resize();
echo "Dien tich resize: ".$vuong->calculateArea()."<br>";
echo "Chu Vi resize: ".$vuong->calculatePerimeter()."<br>";