<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author veenag
 */
class Car {
    //put your code here
    public $make;
    public $model;
    
    private $_speed = 0;
    
    function __construct($carMake,$carModel) 
    {
       $this->make = $carMake;
       $this->model = $carModel;
    }
    
    function accelerate()
    {
        if ($this->_speed >= 100)
            return false;
        
        $this->_speed += 10;
        return true;
    }
    
    function brake()
    {
        if($this->_speed <= 0)
        {
            return false;
        }
        else 
        {
            $this->_speed -= 10;
            return true;
        }  
    }
    function getSpeed()
    {
        return $this->_speed;
    }
    
    static function calcMpg($miles,$gallons)
    {
        return ($miles/$gallons);
    }
}
