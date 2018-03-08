<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class GameCategoriesTable extends Table
{
	public function initialize(array $config)
	{
		
		$this->hasMany('Games');
		$this->displayField('name');
		$this->addbehavior('Timestamp');
	}
}