<?php

namespace Erdal\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Alert implements IResponder{
    
    /*
    * 
    * For Response Messages
    *
    * $message string
    * 
    */    
    public $message;
    
    /*
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */    
    CONST STATUS ="alert";
    
    /*
    *
    *  @param string $message 
    *
    *  @return void
    *
    */

    public function set(String $message):void{
        
        $this->message  =$message;
        
    }
    
}