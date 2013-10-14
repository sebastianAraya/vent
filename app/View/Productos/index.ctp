<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('destacado'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('mostrar'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['User']['id'], array('controller' => 'users', 'action' => 'view', $producto['User']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['destacado']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['mostrar']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['cantidad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fotos'), array('controller' => 'fotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitudes'), array('controller' => 'solicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitude'), array('controller' => 'solicitudes', 'action' => 'add')); ?> </li>
	</ul>
</div>
