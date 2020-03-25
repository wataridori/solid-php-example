<?php

// Liskov Substitution Principle Violation
class Rectangle
{
    public $width;
    public $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
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


// Refactored
interface Shape
{
    public function area();
}

class Rectangle implements Shape {

    public $width;
    public $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function area() {
        return $this->height * $this->width;
    }

}

class Square implements Shape {

    public $size;

    public function setSize($height) {
        $this->size = $size;
    }

    public function area() {
        return $this->size * $this->size;
    }

}