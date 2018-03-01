<?php 

namespace App\controller;

class SheriffScoresController extends AppController 

{
	public function index()
	{
		$this->loadComponent('Paginator');
		$sheriff_scores = $this->Paginator->paginate($this->SheriffScores->find());
		$this->set(compact('sheriff_scores'));
	}

	
}