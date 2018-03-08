<?php

namespace App\controller;

class GameCategoriesController extends AppController 

{
	public function index()
	{
		$this->loadComponent('Paginator');
		$game_categories = $this->Paginator->paginate($this->GameCategories->find());
		$this->set(compact('game_categories'));
	}

	public function view($id = null)
	{
		$game_categories = $this->GameCategories->findById($id)->first();
		$this->set(compact('game_categories'));
	}

	public function add()
	{

		$category = $this->GameCategories->newEntity();
		if ($this->request->is('post')) {
			$category = $this->GameCategories->patchEntity($category,$this->request->getData());
			if ($this->GameCategories->save($category)) {
				$this->Flash->success(__('New Category Added'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Something went wrong'));
		}
		$this->set('category', $category);
	}

	public function edit($id = null)
  {
      $category = $this->GameCategories->findById($id)->first();
      if ($this->request->is(['post', 'put'])) {
          $this->GameCategories->patchEntity($category, $this->request->getData());
          if ($this->GameCategories->save($category)) {
              $this->Flash->success(__('This category has been updated.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to update this category.'));
      }

      $this->set('category', $category);
  }
}