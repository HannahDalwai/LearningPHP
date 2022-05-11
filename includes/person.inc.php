<?php

class Person {
    //properties
    public $name;
    public $eyeColor;
    public $age;

    //constructor will be run at the beginning $name is reference to later when we do create an object based on the class
    public function __construct($name,$eyeColor,$age){
       $this->name = $name;
       $this->eyeColor = $eyeColor;
       $this->age = $age;
    }

   //Methods
   public function setName($name){
       $this->name = $name;
   }
}

//destructor
public function __desctructor
