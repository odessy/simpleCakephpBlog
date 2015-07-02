<?php

	namespace App\Model\Table;
	
	use Cake\ORM\Table;
	use Cake\Validation\Validator;
	
	class PostsTable extends Table
	{
		
		public function validationDefault(Validator $validator)
		{
			$validator
				->notEmpty('title')
				->requirePresence('body')
				->add('body', 'length', [
					'rule' => ['minLength', 50],
					'message' => 'Posts must have a large enough body.'
				]);
			
			return $validator;
		}
		
		public function isOwnedBy($postId, $userId)
		{
			return $this->exists(['id' => $postId, 'user_id' => $userId]);
		}
	}