<div class="productosSolicitudes view">
<h2><?php echo __('Productos Solicitude'); ?></h2>
	<dl>
		<dt><?php echo __('Solicitude Id'); ?></dt>
		<dd>
			<?php echo h($productosSolicitude['ProductosSolicitude']['solicitude_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productosSolicitude['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $productosSolicitude['Producto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Productos Solicitude'), array('action' => 'edit', $productosSolicitude['ProductosSolicitude']['solicitude_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Productos Solicitude'), array('action' => 'delete', $productosSolicitude['ProductosSolicitude']['solicitude_id']), null, __('Are you sure you want to delete # %s?', $productosSolicitude['ProductosSolicitude']['solicitude_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos Solicitudes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productos Solicitude'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
