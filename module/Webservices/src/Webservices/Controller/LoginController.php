<?php
namespace Webservices\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class LoginController extends AbstractActionController
{
	public function indexAction()
	{}

	public function logingoogleAction()
    	{
		return new JsonModel(
			array('status' => 'success', 'message' => '', 'token' => '7b333424bssaggg' )
		); 
        	
    	}

}
