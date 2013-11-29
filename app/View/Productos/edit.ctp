			
<section class="sub">
	<h4 class="text-center">Editando la información de <?php echo $this->Form->value('Producto.nombre')?></h4>
	<p><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Producto.id')), null,'¿Estás seguro de eliminar este producto?'); ?>
	</p>
</section>
<section class="main-content container">
	<div class="tabbable tabs-left">
    	<ul class="nav nav-tabs">
    		<?php if($tipo==1){
        		echo '<li class="active"><a href="#lA" data-toggle="tab">Información</a></li>';
            	echo '<li><a href="#lB" data-toggle="tab">Imagenes</a></li>';
            }
            else{
            	echo '<li><a href="#lA" data-toggle="tab">Información</a></li>';
            	echo '<li class="active"><a href="#lB" data-toggle="tab">Imagenes</a></li>';
            }
            ?>
            </ul>
        	<div class="tab-content">
        		<?php if($tipo==1)
        			echo '<div class="tab-pane active" id="lA">';
      			else
      				echo '<div class="tab-pane" id="lA">';
      			?>
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
                <?php if($tipo==1)
        			echo '<div class="tab-pane" id="lB">';
      			else
      				echo '<div class="tab-pane active" id="lB">';
      			?>
					<div class="row">
                  	<?php foreach ($producto['Foto'] as $foto): ?>
                  		<div class="span3 fotos">

						<?php echo $this->Html->image('../files/'.$foto['imagen'], array("style" =>' max-height: 270px;  min-height: 270px;')); ?></a>
						<h2>

						<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'fotos', 'action' => 'delete', $foto['id']), null, __('¿Eliminar Imagen?', $foto['id'])); ?>
						</h2>
						</div>
					<?php endforeach; ?>
					</div>
					<?php echo $this->Form->create('Foto',array('type'=>'file')); ?>
					<legend><?php echo __('Nueva Imagen'); ?></legend>
					<?php
						echo $this->Form->input('foto',array('type'=>'file','label'=>''));
						echo $this->Form->input('imagen',array('type'=>'hidden','label'=>''));
					?>
					<br />
					<?php echo $this->Form->end(__('Subir')); ?>

                </div>
			</div>
		</div>
	<br />
</section>