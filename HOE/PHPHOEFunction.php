<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function stringLengthOddOrEven($inputstring)
{
    
    if(strlen($inputstring)%2 == 0)
    {
        return "gogireddy".substr($inputstring, 0,3);
    }
    else
    {
        return "veena".substr($inputstring, -3);
    }
}