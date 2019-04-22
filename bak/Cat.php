<?php
class Cat{
    var $name;
    var $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function setName($name){
        $this->name = $name;
    }

    function eat(){
        echo $this->name . ' is eating.';
    }
}


$cat1 = new Cat('mimi', 3);
//$cat1->setName('mimi');
$cat1->eat();


$cat2 = new Cat('xiaohua', 2);
//$cat2->setName('xiaohua');
$cat2->eat();
