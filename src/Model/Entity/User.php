<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class User extends Entity
{
	protected $_accessible = [
		'email'	=> true,
		'password' => true,
		'confirm_password' => true,
		'first_name' => true,
		'last_name' => true,
	];
	
	
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
	
}