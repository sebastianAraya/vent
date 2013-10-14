<div class="productosSolicitudes index">
	<h2><?php echo __('Productos Solicitudes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('solicitude_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productosSolicitudes as $productosSolicitude): ?>
	<tr>
		<td><?php echo h($productosSolicitude['ProductosSolicitude']['solicitude_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productosSolicitude['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $productosSolicitude['Producto']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productosSolicitude['ProductosSolicitude']['solicitude_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productosSolicitude['ProductosSolicitude']['solicitude_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productosSolicitude['ProductosSolicitude']['solicitude_id']), null, __('Are you sure you want to delete # %s?', $productosSolicitude['ProductosSolicitude']['solicitude_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Productos Solicitude'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
