<h1>Games</h1>
<table>
	<tr>
		<th>Item</th>
		<th>Points</th>
		<th>Modified</th>
	</tr>
	<?php foreach ($sheriff_scores as $sheriffscore): ?>
		<tr>
			<td> <?php echo $sheriffscore->item; ?></td>
			<td> <?php echo $sheriffscore->points; ?></td>
			<td> <?php echo $sheriffscore->modified; ?></td>
		</tr>
	<?php endforeach; ?>
</table>