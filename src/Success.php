<?php

namespace Erdal\Library\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Success implements IResponder{
    
    /*
    * 
    * For Response Messages
    *
    * protected $data string
    * 
    */    
    protected  $data;
    
    /*
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */    
    CONST STATUS ="success";
    
    /*
    *
    *  @param string $message 
    *
    *  @return void
    *
    */

    public function set(String $message):void{
        
        $this->data  = $message;
        
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