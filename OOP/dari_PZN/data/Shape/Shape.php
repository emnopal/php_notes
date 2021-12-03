<?php namespace Data\Shape;

class Shape{
    public function getCorner(){
        return -1;
    }
}

class Rectangle extends Shape{
    public function getCorner(): int{
        return 4;
    }

    public function getParentCorner(): int{
        return parent::getCorner();
    }
}

class Triangle extends Shape{
    public function getCorner(): int{
        return 3;
    }

    public function getParentCorner(): int{
        return parent::getCorner();
    }
}