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

	public function add()
	{

		$game = $this->Games->newEntity();
		if ($this->request->is('post')) {
			$game = $this->Games->patchEntity($game,$this->request->getData());
			if ($this->Games->save($game)) {
				$this->Flash->success(__('New Game Added'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Something went wrong'));
		}
		$this->set('game',$game);
	}

	public function edit($id = null)
  {
      $game = $this->Games->findById($id)->first();
      if ($this->request->is(['post', 'put'])) {
          $this->Games->patchEntity($game, $this->request->getData());
          if ($this->Games->save($game)) {
              $this->Flash->success(__('This game has been updated.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to update this game.'));
      }

      $this->set('game', $game);
  }
}