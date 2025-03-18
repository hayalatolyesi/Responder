<?php

namespace Erdal\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Data implements IResponder{
    
    /*
    * 
    * For Response Messages
    *
    * $message string
    * 
    */    
    public Array $message;
    
    /** 
    * 
    * For Response code
    *
    * $message int
    * 
    */    
    public $code=0;
    
    /*
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */    
    CONST STATUS ="data";

    /*
     *
     *@param protected int | null $count 
     * 
     */

    protected int | null $count=null;
    
    /*
    *
    *  @param string $message 
    *
    *  @return void
    *
    */

    public function set(array $data,int | null $count=null):void{
        
        $this->message  = $data;

        $this->count    = $count;
        
    }
    
}