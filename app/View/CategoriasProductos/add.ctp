<div class="categoriasProductos form">
<?php echo $this->Form->create('CategoriasProducto'); ?>
	<fieldset>
		<legend><?php echo __('Add Categorias Producto'); ?></legend>
	<?php
		echo $this->Form->input('categoria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorias Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
