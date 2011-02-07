<?php

class Application_Model_LoginForm
{

	protected $_email=NULL;
	protected $_password=NULL;
	
    public function setEmail($email)
    {
        $this->_email = (string) $email;
        return $this;
    }
 
    public function getEmail()
    {
        return $this->_email;
    }
     
    
   public function setPassword($password)
    {
        $this->_password = (string) $password;
        return $this;
    }
 
    public function getPassword()
    {
        return $this->_password;
    }    
    
    
    
	public function toString(){
		$elementDictionary =  array("email"=>$this->_email,"password"=>$this->_password);
		return $elementDictionary;
	}

	/*
	 * Validate this $params.
	 * returns array of error messages
	 */
	public function invalidForm($params){
		//value tracks whether an error occured
		$errorMessages = array();
		
		
		/* Validate Email */
		$validator = new Zend_Validate_EmailAddress();
		if (!$validator->isValid($params['email'])){ 
		    	$errorMessages['email'] = $validator->getMessages();
				//$validator->getMessages() is an array of messages
		}
		
		/* Validate password */
		$validator = new Zend_Validate_Alnum();
		if (!$validator->isValid($params['password']) || (strlen($params['password']) < 8) ){
				$errorMessages['password'] = $validator->getMessages();
		}
				
				
				
		return $errorMessages;
	}
	
}

