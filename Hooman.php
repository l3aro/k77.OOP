<?php

trait Human
{
    use Animal;

    abstract public function talk();

    public function eat() 
    {
        echo "yummy";
    }
}

trait Female
{
    abstract public function pregnant();
}

trait Animal
{
    abstract public function sleep();
}

// class Cat implements Female, Animal
// {

// }

class Girl
{
    use Female, Human;
    
    public function sleep()
    {
        echo "sleeping";
    }

    public function talk()
    {
        echo "Hellu";
    }

    public function pregnant()
    {
        echo "ouch";
    }
}

$H = new Boy;
$H->eat();