<?php
    class FirstClass{
        const EXAMPLE = "You can't change this";

        public static function test(){
            $testing ="This is a test !";
            return $testing; 
            
        }

    }

    class SecondClass extends FirstClass{
        public static $staticProperty="This is a static property";

        public static function anothertest(){
                echo parent::Example;
                echo self:: $staticProperty;

        }
    }

    $a= FirstClass::test();
    echo $a;
    $b= SecondClass::anothertest();
    echo $b;


?>