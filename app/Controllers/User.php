<?php namespace App\Controllers;

use CodeIgniter\Controller;

class User extends BaseController {
	
	public function __construct() {
		helper('form');
		$session = \Config\Services::session();
	}
	
	public function index() {
		echo view('login_screen');
	}
	
	public function login() {
		$data = array();
		
		echo view('login_screen');
	}
	
	public function create() {
		
		helper('form');
		
		$action = $this->request->getVar('action');
		if($action && $action=='create') {
			$forename = $this->request->getVar('forename');
			$surname = $this->request->getVar('surname');
			$email = $this->request->getVar('email');
			$password = $this->request->getVar('password');
			$confirm_password = $this->request->getVar('confirm_password');
			
			if(empty($forename) || empty($surname) || empty($email) || empty($password) || empty($confirm_password)) {
				$response = array(
					'class' => 'warning',
					'title' => 'All fields are required.',
					'msg' => 'Please fill out all the required information and try again.'
				);
//				$session->setFlashdata(get_class($this), $response);
//				redirect("Users/create");
			}
		}
		
		echo view('user/create');
	}
}
