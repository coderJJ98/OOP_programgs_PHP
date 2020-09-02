<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Person{
    private $name="jash";
    public $password="one";
    protected $age="1";

    //This will show you the name inside the class as it is given private
    //When calling a particular property inside the class you need to use this-> 
    //You dont see $ sign in front of the name as it is a property and not  variable.
    //echo $this->name;
}

class Other extends Person{
    public function Owner(){
        $a="Hi there !";
        echo $a;

        $b=$this->age;
        echo $b;
        
        //when name and age would be tried to acces in this class wont work.
        //echo $name;
    }
}
$other1 =new Other();
echo $other1->Owner();




?>


</body>
</html>