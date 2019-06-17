<?php

abstract class Equation
{
    abstract public function solve();
}

class SimpleEquation extends Equation
{
    public $a = 4;
    public $b = 9;

    public function solve()
    {
        if ($this->a === 0 && $this->b === 0) {
                echo "Vô số nghiệm";
        } else if ($this->a === 0 && $this->b !== 0) {
                echo "Vô nghiệm";
        } else {
            echo "x = " . -$this->b/$this->a;
        }
        echo "<br>";
    }

    public function echoMyName()
    {
        echo "Baro";
    }
}

class QuadraticEquation extends Equation
{
    public $a, $b, $c;
    public function solve()
    {
        $delta = $this->b*$this->b - 4* $this->a * $this->c;
        if ($delta < 0) {
            echo "vô nghiệm";
        } else if ($delta === 0) {
            echo "x = " . -$this->b/2/$this->a;
        } else {
            echo "x1 = " . -($this->b+sqrt($delta))/2/$this->a;
            echo "<br>";
            echo "x2 = " . -($this->b-sqrt($delta))/2/$this->a;
        }
        echo "<br>";
    }
}


$equation1 = new SimpleEquation;
$equation1->solve();

// $equation2 = new SimpleEquation;
// $equation2->a = 0;
// $equation2->b = 8;
// $equation2->solve();

// $equation3 = new SimpleEquation;
// $equation3->a = 4;
// $equation3->b = 8;
// $equation3->solve();

// $equation4 = new QuadraticEquation;
// $equation4->a = 2;
// $equation4->b = -7;
// $equation4->c = 3;
// $equation4->solve();

// $equation5 = new QuadraticEquation;
// $equation5->a = 6;
// $equation5->b = 1;
// $equation5->c = 5;
// $equation5->solve();

// $equation6 = new QuadraticEquation;
// $equation6->a = 1;
// $equation6->b = -8;
// $equation6->c = 16;
// $equation6->solve();