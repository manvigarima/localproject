<?php
class RegisterController extends Zend_Controller_Action
{

	

   function indexAction()
	{
		
		
		$regobj = new Application_Model_Register();

		if($this->getRequest()->isPost())
		{
			 $uname = $this->_getParam('uname');
			  $email = $this->_getParam('email');
			 // $password= $this->_getParam('password');
    //             $mobile =$this->_getParam('mobile');
    //             $address = $this->_getParam('address');

			 // $regobj->insertuser( $uname,$email,$password,$mobile,$address);
			  $regobj->insertuser( $uname,$email);
			 // $this->_redirect('/register/');	

		}
		
	}

	

}

