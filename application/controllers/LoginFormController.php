<?php

class LoginFormController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		//$loginFormElement = new Application_Model_LoginForm(); 
		//$this->view->loginFormElements = $loginFormElement->toString();
		
    }
    
    public function loginAction(){
		//this request object holds the HTTP request data
    	$request = $this->getRequest();
        
    	//get redirecting feauture 
    	$this->_redirector = $this->_helper->getHelper('Redirector');
    	
    	//Get request parameters from form
        $parameters = $request->getParams();
        
        //create new model
        $userData = new Application_Model_LoginForm();
        
        //Make sure that the request was a POST
        if ($this->getRequest()->isPost()) {
        	//validate form
			$errorMessages = $userData->invalidForm($parameters);
        	
			if(!empty($errorMessages)){
				//record any error messages and redirect back to signin page
				$this->view->errorMessages;
				//return $this->_redirector->setGotoSimple("index","login-form");
				return;// $this->_helper->redirector('index');
			}
				  
        }
        	
    	//redirect to root page if successful, and display user info
		$this->view->userData;
		$this->_redirector->setGotoSimple("index","index");
    	
    }
    


}

