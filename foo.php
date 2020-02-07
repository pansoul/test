<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 03.08.2018
 * Time: 18:34
 */
 class Foo
 {
    private $name = null;
    
    public function __construct($name = 'Some Default 1')
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;        
    }
    
    public function foo()
    {
        return "Do something";
    }
    
 }
 
 // v1
 // v2