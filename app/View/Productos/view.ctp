<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['User']['id'], array('controller' => 'users', 'action' => 'view', $producto['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destacado'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['destacado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mostrar'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['mostrar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['cantidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Fotos'); ?></h3>
	<?php if (!empty($producto['Foto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Foto'] as $foto): ?>
		<tr>
			<td><?php echo $foto['id']; ?></td>
			<td><?php echo $foto['producto_id']; ?></td>
			<td><?php echo $foto['imagen']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fotos', 'action' => 'view', $foto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fotos', 'action' => 'edit', $foto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fotos', 'action' => 'delete', $foto['id']), null, __('Are you sure you want to delete # %s?', $foto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Categorias'); ?></h3>
	<?php if (!empty($producto['Categoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Categoria'] as $categoria): ?>
		<tr>
			<td><?php echo $categoria['id']; ?></td>
			<td><?php echo $categoria['nombre']; ?></td>
			<td><?php echo $categoria['foto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categorias', 'action' => 'view', $categoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categorias', 'action' => 'edit', $categoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categorias', 'action' => 'delete', $categoria['id']), null, __('Are you sure you want to delete # %s?', $categoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Solicitudes'); ?></h3>
	<?php if (!empty($producto['Solicitude'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Solicitude'] as $solicitude): ?>
		<tr>
			<td><?php echo $solicitude['id']; ?></td>
			<td><?php echo $solicitude['nombre']; ?></td>
			<td><?php echo $solicitude['apellido']; ?></td>
			<td><?php echo $solicitude['correo']; ?></td>
			<td><?php echo $solicitude['telefono']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'solicitudes', 'action' => 'view', $solicitude['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'solicitudes', 'action' => 'edit', $solicitude['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'solicitudes', 'action' => 'delete', $solicitude['id']), null, __('Are you sure you want to delete # %s?', $solicitude['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Solicitude'), array('controller' => 'solicitudes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
