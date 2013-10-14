<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['foto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), null, __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategorias'), array('controller' => 'subcategorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategoria'), array('controller' => 'subcategorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subcategorias'); ?></h3>
	<?php if (!empty($categoria['Subcategoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Subcategoria'] as $subcategoria): ?>
		<tr>
			<td><?php echo $subcategoria['id']; ?></td>
			<td><?php echo $subcategoria['categoria_id']; ?></td>
			<td><?php echo $subcategoria['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subcategorias', 'action' => 'view', $subcategoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subcategorias', 'action' => 'edit', $subcategoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subcategorias', 'action' => 'delete', $subcategoria['id']), null, __('Are you sure you want to delete # %s?', $subcategoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subcategoria'), array('controller' => 'subcategorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($categoria['Producto'])): ?>
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
	<?php foreach ($categoria['Producto'] as $producto): ?>
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
