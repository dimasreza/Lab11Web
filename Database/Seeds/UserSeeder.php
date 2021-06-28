<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'username' => 'DimasRezaNugraha',
			'useremail' => 'dimasrezaan@gmail.com',
			'userpassword' => password_hash('dimasrezan', PASSWORD_DEFAULT),
		]); 
	}
}
