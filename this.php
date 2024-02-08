<?php

    class People{
        public $name ="Aung Aung";
        public $age = 25;
        public function changeName(){
            $this->name= "Phway Phway";
        }
    }

    $obj = new People();
    
    echo $obj->name;
    echo "<br>";

    $obj->changeName();
    echo $obj->name;

?>