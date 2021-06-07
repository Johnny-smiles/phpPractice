<?php
class Sorcerer
{

    // define properties
    public $name;

    public $race;

    public $intelligence;

    // Constructor function for the object

    // takes in 3 arguments
    public function __construct($name, $race, $intelligence)
    {
        $this->name = $name;
        $this->race = $race;
        $this->intelligence = $intelligence;
    }

    #define object methods
    // Get the name

    function get_name()
    {

        return $this->name;

    }// Get the race

    function get_race()
    {

        return $this->race;

    }// Get intelligence()

    function get_intelligence()
    {

        return $this->intelligence;

    }
}// end of sorcerer class

// create a Sorcerer
$yensid = new Sorcerer('Yen Sid', 'Human',18);

# Output the object properties in the browser.

echo $yensid->get_name();

echo "<br>";

echo $yensid->get_race();

echo "<br>";

echo 'Intelligence: ';

echo $yensid->get_intelligence();

?>


