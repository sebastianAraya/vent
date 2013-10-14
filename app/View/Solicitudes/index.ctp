<div class="solicitudes index">
	<h2><?php echo __('Solicitudes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($solicitudes as $solicitude): ?>
	<tr>
		<td><?php echo h($solicitude['Solicitude']['id']); ?>&nbsp;</td>
		<td><?php echo h($solicitude['Solicitude']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($solicitude['Solicitude']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($solicitude['Solicitude']['correo']); ?>&nbsp;</td>
		<td><?php echo h($solicitude['Solicitude']['telefono']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $solicitude['Solicitude']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $solicitude['Solicitude']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $solicitude['Solicitude']['id']), null, __('Are you sure you want to delete # %s?', $solicitude['Solicitude']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Solicitude'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
