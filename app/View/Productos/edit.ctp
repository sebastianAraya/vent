			
<section class="sub">
	<h4 class="text-center">Editando la información de <?php echo $this->Form->value('Producto.nombre')?></h4>
	<p><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Producto.id')), null,'¿Estás seguro de eliminar este producto?'); ?>
	</p>
</section>
<section class="asdf">
	<div class="tabbable tabs-left">
    	<ul class="nav nav-tabs">
        	<li class="active"><a href="#lA" data-toggle="tab">Información</a></li>
            	<li><a href="#lB" data-toggle="tab">Imagenes</a></li>
            </ul>
        	<div class="tab-content">
                <div class="tab-pane active" id="lA">
                	<div class="span5" >
					<?php echo $this->Form->create('Producto'); ?>
                    <?php
					echo $this->Form->input('id');
					echo $this->Form->input('nombre', array('type'=>'text'));
					echo $this->Form->input('descripcion');
					echo $this->Form->input('precio', array('type'=>'number'));
				//para admin
					?>
					</div>
					<div class="span5">
					<?php
						echo $this->Form->input('destacado');
						echo $this->Form->input('mostrar');
					//fin admin
						echo $this->Form->input('cantidad');
						echo $this->Form->input('Categoria', array('type' => 'select', 'multiple'=>'checkbox'));
						echo $this->Form->end(__('Guardar'));
					?>
					</div>
                </div>
                <div class="tab-pane" id="lB">

                  	<?php foreach ($producto['Foto'] as $foto): ?>
						<?php //echo $foto['id']; ?>
						<?php //echo $foto['producto_id']; ?>
						<?php echo $foto['imagen']; ?>
						array('type' => 'file')
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fotos', 'action' => 'delete', $foto['id']), null, __('¿Eliminar Imagen?', $foto['id'])); ?>
					<?php endforeach; ?>

					<?php echo $this->Form->create('Foto',array('type'=>'file')); ?>
					<legend><?php echo __('Add Foto'); ?></legend>
					<?php
						echo $this->Form->input('producto_id', array('default'=>'Producto.id'));

						echo $this->Form->input('foto',array('type'=>'file','label'=>''));
						echo $this->Form->input('imagen',array('type'=>'hidden','label'=>''));
					?>
					<?php echo $this->Form->end(__('Submit')); ?>


					
                </div>
			</div>
		</div>
	<br />
</section>


<!--
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Producto.id'))); ?></li>
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
-->