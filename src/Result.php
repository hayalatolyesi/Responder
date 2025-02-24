<?php

namespace Erdal\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Result implements IResponder{
    
    /** 
    * 
    * For Response Messages
    *
    * $message string
    * 
    */    
    public bool $message;
    
    /** 
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */    
    CONST STATUS ="result";
    
    /** 
    *
    *  @param string $message (Not Null)
    *
    *  @return void
    *
    */

    public function set(bool $message):void{
        
        $this->message  = $message;

    }
    
}