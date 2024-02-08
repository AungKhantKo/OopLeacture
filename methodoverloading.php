git<?php

    class People{
        public $name = "Aung Khant Ko";
        public $age = 23;
        public function wish($shop="Engaland"){
            echo "I wanna go to " .$shop . " Because I have a reason";
        }
    }

    $obj = new People();

    var_dump($obj);

    echo $obj->wish("America");

?>