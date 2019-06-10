<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$sharp[0] = new Circle("Hinh tron", 10);
echo $sharp[0]->show();
echo "Dien tich: ".$sharp[0]->calculateArea()."<br>";
echo "Chu Vi: ".$sharp[0]->calculatePerimeter()."<br>";
$sharp[0]->resize();
echo "Dien tich resize: ".$sharp[0]->calculateArea()."<br>";
echo "Chu Vi resize: ".$sharp[0]->calculatePerimeter()."<br>";

$sharp[1] = new Rectangle("Hinh chu nhat", 10, 20);
echo $sharp[1]->show();
echo "Dien tich: ".$sharp[1]->calculateArea()."<br>";
echo "Chu Vi: ".$sharp[1]->calculatePerimeter()."<br>";
$sharp[1]->resize();
echo "Dien tich resize: ".$sharp[1]->calculateArea()."<br>";
echo "Chu Vi resize: ".$sharp[1]->calculatePerimeter()."<br>";

$sharp[2] = new Square("Hinh Vuong", 25);
echo $sharp[2]->show();
echo "Dien tich: ".$sharp[2]->calculateArea()."<br>";
echo "Chu Vi: ".$sharp[2]->calculatePerimeter()."<br>";
$sharp[2]->resize();
echo "Dien tich resize: ".$sharp[2]->calculateArea()."<br>";
echo "Chu Vi resize: ".$sharp[2]->calculatePerimeter()."<br>";