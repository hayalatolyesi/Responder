<?php

namespace Erdal\Library\Responder;

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
     * $messageObject arstring
     * 
     */

    private string $messageObject;
    

    /*
    *
    *  @param IResponder $response (Not null)
    *
    *
    *  @return Responder\ResponseDB
    *
    */
    public function setResponse(IResponder $response):ResponseDB{
        
        $this->messageObject =$response->get();
        
        return $this;
        
    }
    

    /*
    *
    *  @return messageObject Array
    *
    */    
    public function getAll():string{
        
        return $this->messageObject;
        
    }
    
}
