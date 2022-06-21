<?php

namespace Erdal\Responder;

use Exception;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

class Error implements IResponder{
    
    /*
     * 
     * For Response Messages
     *
     * protected $data string
     * 
     */
    
    protected string $data;
    

    /*
     * 
     * For message code number
     *
     * $code int
     * 
     */

    public int $code;
    
    /*
     * 
     * For PHP Exception Object
     *
     * $exception string
     * 
     */

    public \Exception $exception;
    

    /*
     * 
     * This Object, Identity Name
     *
     * CONST STATUS string
     * 
     */    

    CONST STATUS ="error";
    
    /*
    *
    *  @param string $message (Not null)
    *
    *  @param int $customCode (Not null)
    *
    *  @param \Exception $exception (nullable)
    *
    *  @return void
    *
    */

    public function set(string $message,int $customCode,\Exception $exception=null):void{
        
        $this->data         = $message;
        
        $this->code         = $customCode;
        
        $this->exception    = json_encode($exception,JSON_UNESCAPED_UNICODE) ?? new Exception();
        
    }


    /*
    *
    *  @param string $data 
    *
    *  @return String
    *
    */
    public function get():String{
        
        return $this->data;

        
    }
    
}