<?php

    class Member{
        public $name="ZZ";
        function __construct(){
            echo "My Favourite is " .$this->name .". ";
        }
    }

    class NextMember extends Member{
        // public $name="ZZ";
        function __construct(){
            parent::__construct();
            echo "I Love It";
        }
    }

    // new Member();
    new NextMember();
?>