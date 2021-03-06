<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class GamesTable extends Table
{
	public function initialize(array $config)
	{
		$this->belongsTo('GameCategories');
		$this->displayField('title');
		$this->addbehavior('Timestamp');
	}
}