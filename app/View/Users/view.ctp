<div class="users view">
<table class = "table table-striped" cellpadding = "0" cellspacing = "0">
<h3 style="text-align: center;"><?php echo __('VENDEDOR'); ?></h3>
<?php if($user['User']['foto']!=null){ ?>
<div class="span3 fotos" style="margin-left: 15%;"><?php echo $this->Html->image('../files/'.$user['User']['foto'], array("style" =>'max-height: 185px; min-height: 185px; max-width: 185px; min-width: 185px;')); ?></a></div>
<?php }else{ ?>
<div class="span3 fotos" style="margin-left: 15%;"><?php echo $this->Html->image('../files/default.jpg', array("style" =>'max-height: 185px; min-height: 185px; max-width: 185px; min-width: 185px;')); ?></a></div>
<?php } ?>
	<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($user['User']['username']); ?>
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
		<tr>
		<th><?php echo __('Tipo'); ?></th>
		<td>
			<?php echo h($user['User']['tipo']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>

		</tr>
	</tr>
	
	</table>
	<div class="control-group" style="margin-left: 74%;">
		<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-inverse large', 'tabindex' => '3')); ?> 
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']),  array('class' => 'btn btn-inverse large', 'tabindex' => '3'), __('¿Está seguro que desea eliminar su cuenta?')); ?>
		</div>
</div>

