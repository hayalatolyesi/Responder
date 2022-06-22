<?php

namespace Erdal\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class ResponseDB {
    
    /*
     * 
     * For Message Objects Storage
     *
     * $messageObject array
     * 
     */

    private array $messageObject = array();
    

    /*
    *
    *  @param IResponder $response (Not null)
    *
    *
    *  @return Responder\ResponseDB
    *
    */
    public function setResponse(IResponder $response):ResponseDB{
        
        $this->messageObject =json_encode($response->get(),JSON_UNESCAPED_UNICODE);
        
        return $this;
        
    }
    

    /*
    *
    *  @return messageObject Array
    *
    */    
    public function getAll():array{
        
        return $this->messageObject;
        
    }
    
}
