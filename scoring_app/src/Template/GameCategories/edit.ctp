<h1>Edit Category</h1>
<?php
    echo $this->Form->create($category);
    echo $this->Form->control('name');
    echo $this->Form->control('description');
    echo $this->Form->control('game_count');
    echo $this->Form->control('modified');
	echo $this->Form->button(__('Save'));
    echo $this->Form->end();
?>