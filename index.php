<?php
class Person{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public  function getInfo(){
        return $this->name." ".$this->age;
    }
}

$person_1 = new Person("Chung", 20);
echo $person_1->getInfo();
?>