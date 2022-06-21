<?php

namespace Erdal\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Warning implements IResponder{
    
    /*
    * 
    * For Response Message
    *
    * protected $data string
    * 
    */
    protected string $data;
    
    /*
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */      
    CONST STATUS ="warning";
    
    /*
    *
    *  @param string $message 
    *
    *  @return void
    *
    */
    public function set(String $message):void{
        
        $this->messadatage  = $message;

        
    }
   
    /*
    *
    *  @param string $message 
    *
    *  @return String
    *
    */
    public function get():String{
        
        return $this->data;

        
    }

}
