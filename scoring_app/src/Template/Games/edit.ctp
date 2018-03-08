+<h1>Edit Game</h1>
<?php
    echo $this->Form->create($game);
    echo $this->Form->control('title');
    echo $this->Form->control('description');
    echo $this->Form->control('category_id');
    echo $this->Form->control('modified');
	echo $this->Form->button(__('Save'));
    echo $this->Form->end();
?>