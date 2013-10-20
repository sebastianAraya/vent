<div class="fotos form">
<?php echo $this->Form->create('Foto',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Foto'); ?></legend>
	<?php
		echo $this->Form->input('producto_id',array('default'=>'17'));

		echo $this->Form->input('foto',array('type'=>'file','label'=>''));
		echo $this->Form->input('imagen',array('type'=>'hidden','label'=>''));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Fotos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
