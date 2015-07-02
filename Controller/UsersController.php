<?php

namespace App\Controller;
use Cake\Event\Event;

class UsersController extends AppController{
	
	var $name = 'Users';
	/**
	 * Runs automatically before the controller action is called
	 */
	function beforeFilter(Event $event){
		parent::beforeFilter($event);
		$this->Auth->allow('register', 'login', 'logout');
	}
	
	
	public function isAuthorized($user)
	{
		return true;
	}

	public function index(){
		$id = $this->Auth->user('id');
	}

	/**
	 * Registration page for new users
	 */
	public function register() {
		
		if ($this->Auth->user()) {
			$this->redirect([
								'controller' => 'users', 
								'action' => 'index'
							]);
		}
		$user = $this->Users->newEntity();
		if($this->request->is('post')){
			$user = $this->Users->patchEntity($user, $this->request->data);
			if($this->Users->save($user)){
				$this->Flash->success(__('Your account has been created.'));
				return $this->redirect(['action' => 'login']);
			}
			$this->Flash->error(__('Your account could not be created. Please, try again.'));
		}
		$this->set('user', $user);
	}
			

	/**
	 * Ran directly after the Auth component has executed
	 */
	public function login() {
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid email or password, try again'));
		}
	}

	/**
	 * Log a user out
	 */
	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}
	

}
