<h1>Games</h1>
<table>
	<tr>
		<th>Title</th>
		<th>Created</th>
		<th>View/Edit</th>
	</tr>
	<?php foreach ($games as $game): ?>
		<tr>
			<td> <?php echo $game->title; ?></td>
			<td> <?php echo $game->created; ?></td>
			<td> 
				<?php echo $this->Html->link('View', ['action' => 'view', $game->id]); ?> 
				<?php echo $this->Html->link('Edit', ['action' => 'edit', $game->id]); ?> 
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<p><?php echo $this->Html->link('Add New Game',['action' => 'add']); ?></p>