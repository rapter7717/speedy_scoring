<h1>Add Game</h1>
<?php
	echo $this->Form->create($game);
	echo $this->Form->control('title');
	echo $this->Form->control('description');
	echo $this->Form->control('created');
	echo $this->Form->control('category_id', ['type' => 'select', 'options' =>$categories, 'class' => 'form-control mb-3']);
	echo $this->Form->button('Save');
	echo $this->Form->end();
?>