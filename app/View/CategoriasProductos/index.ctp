<div class="categoriasProductos index">
	<h2><?php echo __('Categorias Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoriasProductos as $categoriasProducto): ?>
	<tr>
		<td><?php echo h($categoriasProducto['CategoriasProducto']['producto_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoriasProducto['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $categoriasProducto['Categoria']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriasProducto['CategoriasProducto']['producto_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriasProducto['CategoriasProducto']['producto_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriasProducto['CategoriasProducto']['producto_id']), null, __('Are you sure you want to delete # %s?', $categoriasProducto['CategoriasProducto']['producto_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Categorias Producto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
