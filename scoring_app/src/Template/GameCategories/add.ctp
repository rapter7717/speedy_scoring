<h1>Add Category</h1>
<?php
	echo $this->Form->create($category);
	echo $this->Form->control('name');
	echo $this->Form->control('game_count');
	echo $this->Form->control('description');
	echo $this->Form->control('created');
	echo $this->Form->button('Save');
	echo $this->Form->end();
?>