<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('precio');
		echo $this->Form->input('destacado');
		echo $this->Form->input('fecha');
		echo $this->Form->input('mostrar');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('Categoria');
		echo $this->Form->input('Solicitude');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
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
