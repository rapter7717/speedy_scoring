<h1>Categories</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Created</th>
		<th>View/Edit</th>
	</tr>
	<?php foreach ($game_categories as $category): ?>
		<tr>
			<td> <?php echo $category->name; ?></td>
			<td> <?php echo $category->created; ?></td>
			<td> 
				<?php echo $this->Html->link('View', ['action' => 'view', $category->id]); ?> 
						<?php echo $this->Html->link('Edit', ['action' => 'edit', $category->id]); ?> 
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<p><?php echo $this->Html->link('Add New Category',['action' => 'add']); ?></p>