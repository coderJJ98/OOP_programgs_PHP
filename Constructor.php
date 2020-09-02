
    <?php

    class person{
        //properties
        public $name;
        public $age;

        //construtor
        public function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }

        //methods

        public function setName($name){
            $this ->name=$name;

        }
        public function getName(){
            return $this->name;
        }
        //destructor
        public function __destruct(){

        }
    }