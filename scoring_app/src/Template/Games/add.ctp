<h1>Add Game</h1>
<?php
	echo $this->Form->create($game);
	echo $this->Form->control('title');
	echo $this->Form->control('description');
	echo $this->Form->button('Save');
	echo $this->Form->end();
?>