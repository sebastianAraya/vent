<div class="fotos view">
<h2><?php echo __('Foto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foto['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $foto['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['imagen']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foto'), array('action' => 'edit', $foto['Foto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foto'), array('action' => 'delete', $foto['Foto']['id']), null, __('Are you sure you want to delete # %s?', $foto['Foto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
