<div class="users view">
<table class = "table table-striped" cellpadding = "0" cellspacing = "0">
<h3 style="text-align: center;"><?php echo __('VENDEDOR'); ?></h3>
	<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<th><?php echo __('Tipo'); ?></th>
		<td>
			<?php echo h($user['User']['tipo']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<th><?php echo __('Nombre'); ?></th>
		<td>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<th><?php echo __('Apellido'); ?></th>
		<td>
			<?php echo h($user['User']['apellido']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<th><?php echo __('Correo'); ?></th>
		<td>
			<?php echo h($user['User']['correo']); ?>
			&nbsp;
		</td>
	</tr>
	</table>
</div>
<div class="related">
	<h3><?php echo __('Mis Productos'); ?></h3>
	
</div>
