<?php

include_once('Rectangle.php');

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width );
        $this->height = $width;
    }
    public function resize(){
        $this->height = $this->height*rand(1,100);
        $this->width = $this->height;
    }
}