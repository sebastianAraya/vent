<div class="solicitudes form">
<?php echo $this->Form->create('Solicitude'); ?>
	<fieldset>
		<legend><?php echo __('Add Solicitude'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('correo');
		echo $this->Form->input('telefono');
		echo $this->Form->input('Producto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Solicitudes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
