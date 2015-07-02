<?php

	namespace App\Model\Table;
	
	use Cake\ORM\Table;
	use Cake\Validation\Validator;
	use Cake\ORM\Rule\IsUnique;
	
	class UsersTable extends Table
	{
		
		public function validationDefault(Validator $validator)
		{
			$validator
				->requirePresence('email', 'create')
				->add('email', 'validFormat', [
					'rule' => 'email',
					'message' => 'E-mail must be valid'
				])
				->add('email', 'unique', [
					'rule' => 'validateUnique',
					'provider' => 'table'
				])
				->requirePresence('password', 'create')
				->notEmpty('password')
				->notEmpty('confirm_password')
				->add('confirm_password', 'custom', [
					'rule' => function($value, $context){
						if($value !== $context['data']['password']){
							return false;
						}
						return true;
					},
					'message' => 'The passwords do not match',
				]);
			
			return $validator;
		}
		
	}