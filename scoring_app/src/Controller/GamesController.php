<?php 

namespace App\controller;

class GamesController extends AppController 

{
	public function index()
	{
		$this->loadComponent('Paginator');
		$games = $this->Paginator->paginate($this->Games->find());
		$this->set(compact('games'));
	}

	public function view($id = null)
	{
		$game = $this->Games->findById($id)->first();
		$this->set(compact('game'));
	}
}