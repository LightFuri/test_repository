<?php

class MySomeClass
{
    private $prop1;
    private $prop2;

    public function __construct($createProp1, $createProp2)
    {
        $this->prop1 = $createProp1;
        $this->prop2 = $createProp2;
    }

    public function getProp1(){
        return $this->prop1;
    }

    public function getProp2(){
        return $this->prop2;
    }
}