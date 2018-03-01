<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class SheriffScoresTable extends Table
{
	public function initialize(array $config)
	{
		$this->addbehavior('Timestamp');
	}
}