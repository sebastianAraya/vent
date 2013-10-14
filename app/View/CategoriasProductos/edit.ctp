<div class="categoriasProductos form">
<?php echo $this->Form->create('CategoriasProducto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categorias Producto'); ?></legend>
	<?php
		echo $this->Form->input('producto_id');
		echo $this->Form->input('categoria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriasProducto.producto_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CategoriasProducto.producto_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
