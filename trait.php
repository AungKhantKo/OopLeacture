<?php

    trait One{
        public $name = "Aung Aung";

        public function Something(){
            echo "This is First trait one";
        }
    }

    trait Two{
        public $age = 88;

        public function Something1(){
            echo "This is First trait one";
        }
    }

    trait Three{
        public $education = "B.SC";
    }

    class outPut{
        use One,Two,Three;
        public $gender= "Male";
    }

    $obj = new outPut();

    echo $obj->gender;

    echo"<br>";
    echo $obj->name;
    echo $obj->age;
    echo $obj->education;
    echo $obj->Something1();
?>