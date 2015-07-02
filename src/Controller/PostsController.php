<?php

namespace App\Controller;
use Cake\Event\Event;

	class PostsController extends AppController
	{
		
		/**
		 * Runs automatically before the controller action is called
		 */
		public function beforeFilter(Event $event){
			parent::beforeFilter($event);
			$this->Auth->allow('index', 'view');
		}
		
		public function isAuthorized($user)
		{
			// All registered users can create and view 
			if (in_array($this->request->action, ['create', 'index', 'view'])) {
				return true;
			}

			// The owner of an article can edit and delete it
			if (in_array($this->request->action, ['edit', 'delete'])) {
				$postId = (int)$this->request->params['pass'][0];
				if ($this->Posts->isOwnedBy($postId, $user['id'])) {
					return true;
				}
			}

			return false;
		}
		
		public function index()
		{
			$posts = $this->Posts->find('all');
			$this->set(compact('posts'));
		}
		
		public function create(){
			$post = $this->Posts->newEntity();
			if($this->request->is('post')){
				if($this->Auth->user()){
					$this->request->data['user_id'] = $this->Auth->user('id');
				}
				$post = $this->Posts->patchEntity($post, $this->request->data);
				if($this->Posts->save($post)){
					$this->Flash->success(__('Your post has been created.'));
					return $this->redirect(['action' => 'index']);
				}
				$this->Flash->error(__('Unable to add your article.'));
			}
			$this->set('post', $post);
		}
		
		public function view($id)
		{
			$post = $this->Posts->get($id);
			$this->set(compact('post'));
		}
		
		public function edit($id)
		{
			$post = $this->Posts->get($id);
			if ($this->request->is(['post', 'put'])) {
				$this->Posts->patchEntity($post, $this->request->data);
				if ($this->Posts->save($post)) {
					$this->Flash->success(__('Your post has been updated.'));
					return $this->redirect(['action' => 'index']);
				}
				$this->Flash->error(__('Unable to update your post.'));
			}

			$this->set('post', $post);	
		}
		
		public function delete($id){
			$this->request->allowMethod(['post', 'delete']);

			$post = $this->Posts->get($id);
			if ($this->Posts->delete($post)) {
				$this->Flash->success(__('The post with title - {0} has been deleted.', h($post->title)));
				return $this->redirect(['action' => 'index']);
			}
		}
	}