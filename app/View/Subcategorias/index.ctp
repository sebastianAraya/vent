<div class="subcategorias index">
	<h2><?php echo __('Subcategorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subcategorias as $subcategoria): ?>
	<tr>
		<td><?php echo h($subcategoria['Subcategoria']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subcategoria['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $subcategoria['Categoria']['id'])); ?>
		</td>
		<td><?php echo h($subcategoria['Subcategoria']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subcategoria['Subcategoria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subcategoria['Subcategoria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subcategoria['Subcategoria']['id']), null, __('Are you sure you want to delete # %s?', $subcategoria['Subcategoria']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subcategoria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
