<?php

    class Member{
        public $name = "Aung Khant Ko";
        public $age = 23;
        public $education = "HND";

        function friendCount(){
            echo "This is Friend Count";
        }
    }

    class goldMember extends Member{
        // public $name = "Aung Khant Ko";
        // public $age = 23;
        // public $education = "HND";

        public $coin = 11;

        // function friendCount(){
        //     echo "This is Friend Count";
        // }
    }

    class DiaMember extends goldMember{
        public $diamond=5;
    }
    

    $obj = new Member();
    echo $obj->name;
    echo "<br>";

    $goldObj = new goldMember();
    echo $goldObj->coin ."coin";
    echo "<br>";
    echo $goldObj->education;
    echo "<br>";
    echo $goldObj->friendCount();
    echo "<br>";echo "<br>";echo "<br>";

    $diaObj = new DiaMember();
    echo $diaObj->name;
    echo "<br>";
    echo $diaObj->education;
    echo "<br>";
    echo $diaObj->coin;
    echo "<br>";
    echo $diaObj->diamond;

// inheritance overloading 

    class restaurantsMenu{
        public $chief = "Aung Khant Ko";
        public $menuName = "Fried Chicken";
        public $menu = 12;
        public $price = 1000;

        function Ready(){
            echo "You Meal Is Ready";
        }
    }

    class goldResMember extends restaurantsMenu{
        // public $name = "Aung Khant Ko";
        // public $age = 23;
        // public $education = "HND";

        public $promotionLeft = 15;

        function Ready(){
            $this->menuName="Salad";
            echo "Salad and Potato Chip Menu Is Ready.";
        }
    }
    echo "<br>";
    $objNewRes = new restaurantsMenu();
    echo "<br>";
    echo $objNewRes->menuName;
    echo "<br>";
    echo $objNewRes->Ready();
    echo "<br>";echo "<br>";

    $objNewRes2 = new goldResMember();
    echo "<br>";
    echo $objNewRes2->Ready();
    echo "<br>";
    echo $objNewRes2->menuName;
    echo "<br>";
    echo $objNewRes2->promotionLeft;



?>