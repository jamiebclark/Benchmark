<?php
$times = Benchmark::getTimes();
?>
<table class="benchmark-times" cellpadding=5 cellspacing=5>
	<tr><th>Label</th><th>Time</th><th>Total<th></tr>
	<?php foreach ($times as $benchmark): ?>
		<tr>
			<td><?php echo __($benchmark['label']); ?></td>
			<td><?php echo number_format($benchmark['increment'], 2); ?></td>
			<td><?php echo number_format($benchmark['age'], 2); ?></td>
		</tr>
	<?php endforeach; ?>
</table>