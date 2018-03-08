<h1>Edit Game</h1>
<?php
    echo $this->Form->create($game);
    echo $this->Form->control('title');
    echo $this->Form->control('description');
    echo $this->Form->control('category_id',  ['type' => 'select', 'options' => $categories , 'class' => 'form-control mb-3']);
    echo $this->Form->control('modified');
	echo $this->Form->button(__('Save'));
    echo $this->Form->end();
?>