<div class="solicitudes view">
<h2><?php echo __('Solicitude'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($solicitude['Solicitude']['telefono']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitude'), array('action' => 'edit', $solicitude['Solicitude']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitude'), array('action' => 'delete', $solicitude['Solicitude']['id']), null, __('Are you sure you want to delete # %s?', $solicitude['Solicitude']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitudes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitude'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($solicitude['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Destacado'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Mostrar'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($solicitude['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['user_id']; ?></td>
			<td><?php echo $producto['nombre']; ?></td>
			<td><?php echo $producto['descripcion']; ?></td>
			<td><?php echo $producto['precio']; ?></td>
			<td><?php echo $producto['destacado']; ?></td>
			<td><?php echo $producto['fecha']; ?></td>
			<td><?php echo $producto['mostrar']; ?></td>
			<td><?php echo $producto['cantidad']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), null, __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
