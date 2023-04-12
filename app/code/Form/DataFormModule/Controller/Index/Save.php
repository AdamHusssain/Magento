<?php

namespace Form\DataFormModule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Form\DataFormModule\Model\Test;

class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var Test
     */
    
     protected $_test;

	public function __construct(
		Context $context,
        	Test $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
	public function execute()
    {
        $request_data = $this->getRequest()->getParams();   //print_r($request_data );die();
    	$data = [
    	'employeeid'=>$request_data['employeeid'],
    	'firstname'=>$request_data['firstname'],
    	'lastname'=>$request_data['lastname'],
    	'email'=>$request_data['email'],
    	'company'=>$request_data['company'],
    	'department'=>$request_data['department'],
    	'occupation'=>$request_data['occupation'],
    	'mobile'=>$request_data['mobile'],
    	'address'=>$request_data['address'],
    	'joiningdate'=>$request_data['joiningdate'],
    	'birthday'=>$request_data['birthday']
    	];
        print_r($data);
        $test = $this->_test;
        
        $test->setData($data);
        $test->save();
        
        if($test->getId()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        
        $resultRedirect = $this->resultRedirectFactory->create();
        
        $resultRedirect->setPath('empmodule/index/index');
        
        return $resultRedirect;
    }
}
