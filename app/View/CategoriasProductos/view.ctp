<div class="categoriasProductos view">
<h2><?php echo __('Categorias Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Producto Id'); ?></dt>
		<dd>
			<?php echo h($categoriasProducto['CategoriasProducto']['producto_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoriasProducto['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $categoriasProducto['Categoria']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categorias Producto'), array('action' => 'edit', $categoriasProducto['CategoriasProducto']['producto_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categorias Producto'), array('action' => 'delete', $categoriasProducto['CategoriasProducto']['producto_id']), null, __('Are you sure you want to delete # %s?', $categoriasProducto['CategoriasProducto']['producto_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorias Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
