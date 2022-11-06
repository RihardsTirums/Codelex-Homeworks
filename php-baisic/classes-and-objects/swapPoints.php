<?php
class Points{

    public int $x;
    public int $y;

    public function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }

    function swapPoints (){
        $tmp = $this->x;
        $this->x = $this->y;
        $this->y = $tmp;
        return $this->x . "," . $this->y . PHP_EOL;

    }
}


$tmp = new Points(-3,6);
$tmp1 = new Points(5,2);

echo $tmp->swapPoints();
echo $tmp1->swapPoints();
