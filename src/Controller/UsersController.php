<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class UsersController extends AppController
{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow(['add','logout']);
	}
	
	public function index()
	{
		if(!($this->request->session()->read('Auth.User'))) {
			return $this->redirect(
				['action' => 'login']
			);
		}
		$this->loadModel('Menu');
		$this->set('menu', $this->Menu->find('all'));	
		$this->set('users', $this->Users->find('all'));	
	}

	public function view($id)
	{
		$user = $this->Users->get($id);
		$this->set(compact('user'));
	}

	public function add()
	{
		$user = null;
		if ($this->request->is('post')){
			$data = $this->request->getData();
			$user = $this->Users->newEntity();
			if(isset($data)) {
				$user = $this->Users->patchEntity($user, $data);
				if($this->Users->save($user)){
					$this->Flash->success(__('The user has been saved.'));
					return $this->redirect(['action' => 'login']);
				}
			}
		
		}
		$this->set('user',$user);
	}

	public function login()
	{
		if($this->request->is('post')){
			$user = $this->Auth->identify();
			if($user){
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid user id or password, try again'));
		}
	}

	public function logout(){
		return $this->redirect($this->Auth->logout());
	}
}
