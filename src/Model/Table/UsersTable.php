<?php
	namespace App\Model\Table; 

	use Cake\ORM\Table;
	use Cake\Validation\Validator;
	use Cake\ORM\RulesChecker;
	
	class UsersTable extends Table
	{
		
		public function validationDefault(Validator $validator)
		{
			$validator
				->notEmpty('role', 'A Role is required')				
				->notEmpty('userid', 'A User ID is required')
				->notEmpty('username', 'A username is required')
				->notEmpty('lastname', 'A lastname is required')
				->notEmpty('firstname', 'A firstname is required')
				->notEmpty('middlename', 'A middlename is required')
				->notEmpty('email', 'A email is required')
				->notEmpty('password', 'A password is required');

			$validator
				->add('password', [
				'length' => [
					'rule' => ['minLength', 6],
					'message' => 'The password have to be at least 6 characters!',
				]
			])
			->add('password',[
				'match'=>[
					'rule'=> ['compareWith','password2'],
					'message'=>'The passwords does not match!',
				]
			])
			->notEmpty('password');
			$validator
			->add('password2', [
				'length' => [
					'rule' => ['minLength', 6],
					'message' => 'The password have to be at least 6 characters!',
				]
			])
			->add('password2',[
				'match'=>[
					'rule'=> ['compareWith','password'],
					'message'=>'The passwords does not match!',
				]
			])
			->notEmpty('password2');

			return $validator;
		}

		public function buildRules(RulesChecker $rules)
		{
			$rules->add($rules->isUnique(['email']));
			$rules->add($rules->isUnique(['userid']));
			return $rules;
		}

	}
