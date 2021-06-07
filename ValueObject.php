<?php


// a value objected is defined according to its value/data
// opposed to a given identity.
// by avoiding settings and asigning private values, its made immutable.

class Age
{
    // age is more than just an integer, so this value object 'age' helps readability.
    private $age;

    public function __construct($age)
    {
        // validator helps with consistency.
        if ($age < 0 || $age > 120){
            throw new InvalidArgumentException('That doesnt make sense.');
        }

        $this->age = $age;
    }

    public function increment()
    {
        //mutable version
        //$this->age +=1;

        // immutable version
        return new self($this->age + 1);

    }
    public function get()
    {
        return $this->age;
    }

}
// setting age
$age = new Age(35);
//verifying
var_dump($age->get());

// incrementing current age
$age = $age->increment();
//verifying
var_dump($age->get());


// example 2
// coordinates become a value object since x and y are joined.
// They need to be together to make sense
class Coordinates
{
    public $x;
    public $y;

    public function __construct($x,$y)
    {
        $this->x= $x;
        $this->y= $y;
        $a = 'John';
        if (true){
            $b = 'Jesse';
            echo $a;
        };
        echo $b;
    }


    public function getX(){
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function getPin()
    {
        return $this->x.','.$this->y;
    }

}

// on a map you have a pin at a coordinate.
//function pin(Coordinates $coordinates)

// point A
$begin = new Coordinates(10,15);
// point B
$end = new Coordinates(30,25);

//verifying
var_dump($begin);
var_dump($end);


// Individual coordinates
// Point A
var_dump($begin->getX());
var_dump($begin->getY());
//Point B
var_dump($end->getX());
var_dump($end->getY());
// Pin location combined as a string.
var_dump($begin->getPin());
var_dump($end->getPin());



//// Random example

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {

    }

}

$team = new Team;
$team->add(new Member('Jane Doe'));