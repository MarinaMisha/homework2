<?php
require_once 'Figure.php';
class Rectangle extends Figure {
    private  int $length;
    private int $width;

    /**
     * @throws Exception
     */
    public function  __construct($length, $width)
    {
        if ($length <= 0 || $width <=0) {
            throw  new  Exception("Неверние размері для Rectangle ");
        }
        $this->length = $length;
        $this-> width = $width;

    }
    public function area() :int
    {
        return $this->length *$this->width;

    }
    public function perimeter() : int
    {
        return 2 *($this->length + $this->width) ;

    }
    public function getArea(): int{
        return $this->area();
    }
    public function getPerimeter():int
    {
        return $this->perimeter();


    }




}
