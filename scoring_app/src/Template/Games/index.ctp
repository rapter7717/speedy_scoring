<h1>Games</h1>
<table>
	<tr>
		<th>Title</th>
		<th>Created</th>
	</tr>
	<?php foreach ($games as $game): ?>
		<tr>
			<td> <?php echo $game->title; ?></td>
			<td> <?php echo $game->created; ?></td>
		</tr>
	<?php endforeach; ?>
</table>