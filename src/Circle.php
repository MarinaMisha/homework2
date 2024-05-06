<?php
class Circle extends Figure
{
    private int $radius ;

    /**
     * @throws Exception
     */
    public function __construct($radius)
    {
        if ($radius<= 0){
            throw new Exception("Invalid radius for Circle");
        }
        $this->radius = $radius;

    }
    public function area() : int {
        return pi() * $this->radius * $this->radius;









    }
    public function perimeter () :int
    {
        // TODO: Implement perimeter() method.
        return 2 *pi() * $this->radius;
    }
    public function getArea () :int
    {
        return $this->area();


    }
    public function getPerimeter() :int {

    return $this->perimeter();

    }
}
