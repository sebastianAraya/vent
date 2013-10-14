<div class="productosSolicitudes form">
<?php echo $this->Form->create('ProductosSolicitude'); ?>
	<fieldset>
		<legend><?php echo __('Edit Productos Solicitude'); ?></legend>
	<?php
		echo $this->Form->input('solicitude_id');
		echo $this->Form->input('producto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductosSolicitude.solicitude_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductosSolicitude.solicitude_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos Solicitudes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
