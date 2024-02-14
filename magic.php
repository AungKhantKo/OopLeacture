<?php

    // class Magic{
    //     public $result=0;
    //     public function __construct(){
    //         echo "This is construct method";
    //     }
    //     public function __destruct(){
    //         echo "Result is =>" .$this->result;
    //     }
    //     public function Sum($num1,$num2){
    //         $this->result=$num1+$num2;
    //     }
    // }

    // $obj = new Magic();
    // $obj->Sum(9,9);


    // __get function
    // class Member{
    //     public $name="Mg Mg";
    //     function __get($name)
    //     {
    //         echo "You try to get this property " .$name;
    //     }
    // }

    // $getObj = new Member();
    // echo $getObj->somethingProperty;

    // // __set function
    // class GoldMember{
    //     public $age = 12;
    //     function __set($name,$value)
    //     {
    //         echo "You are trying to set non exit property {$name} with value of {$value}";
    //     }
    // }

    // $goldM = new GoldMember();
    // echo "<br>";
    // $goldM->assadasdad="Aung Aung";


    // class DiaMond{
    //     public $name1="Mg Mg";
    //     function __isset($name1)
    //     {
    //         echo "You try to check property" .$name1;
    //     }
    // }

    // echo "<br>";
    // $DiaM = new DiaMond();
    // echo isset($DiaM->name1);

    // if(isset($DiaM->age)){
    //     echo "IT OK";
    // }

    // call method

    class DoSomething{
        function somethingNew(){
            echo "Something";
        }

        function __call($name,$arguments)
        {
            echo "Call Magic Method in method is " .$name. ", arrgument is " .implode(',',$arguments);
        }
    }

    $obj = new DoSomething();
    
    echo $obj->Hello("Aung Aung");
?>