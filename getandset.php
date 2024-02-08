<?php

// Getter
    class SomeThing{
        private $num = 100;
        function getData(){
            var_dump ($this->num);
        }
    }

    $obj = new SomeThing();
    echo $obj->getData();
    echo "<br>";

// Setter and Getter
    class setMethod{
        private $name = "Kyaw Gyi";
        function setData($name){
            $this->name = $name;
        }

        function getData(){
            echo "MY NAME IS " .$this->name;
        }
    }

    $newObj = new setMethod();
    echo $newObj->setData("Mg Mg");
    echo $newObj->getData();

?>