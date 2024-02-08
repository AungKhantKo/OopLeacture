<?php

    class People{
        public $name = "Mg Mg";
        public $age = 25;

        public function eat (){
            echo "Fried chicken";
        }
    }

    class Dog{
        public $name = "Aung Gyi";
        public $age = 2;
    }

    $obj = new People();
    $dogobj = new Dog();

    // var_dump("People =>".$obj->name );
    // var_dump("People =>".$dogobj->name );

    echo $obj->eat();

?>