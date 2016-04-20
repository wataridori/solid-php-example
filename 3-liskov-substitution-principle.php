<?php

// Liskov Substitution Principle Violation
// The Rectangle - Square problem
class Rectangle
{
    protected $width;
    protected $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function area()
    {
         return $this->height * $this->width;
    }
}

class Square extends Rectangle
{
    public function setHeight($value)
    {
        $this->width = $value;
        $this->height = $value;
    }

    public function setWidth($value)
    {
        $this->width = $value;
        $this->height = $value;
    }
}

class RectangleTest
{
    private $rectangle;

    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function testArea()
    {
        $this->rectangle->setHeight(2);
        $this->rectangle->setWidth(3);
        // Expect rectangle's area to be 6
    }
}
