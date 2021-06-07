<?php

// demo of inheritance

    class CoffeeMaker

    {

        Public function brew()
        {
            var_dump('Brewing a coffee');
        }
    }

    // Extending the coffee maker class. This brings in all its properties and adds new ones.
    class SpecialityCoffeeMaker extends CoffeeMaker
    {

        public function brewLatte()
        {
            var_dump('Brewing a latte');
        }
    }
//A coffee maker can brew coffee.
(new CoffeeMaker())->brew();

// a Speciality coffee maker can brew lattes.
(new SpecialityCoffeeMaker())->brewLatte();

// a Speciality coffee maker can also brew coffee.
(new SpecialityCoffeeMaker())->brew();