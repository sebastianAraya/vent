<section class="sub">
	<h4 class="text-center">Nuevo Producto</h4>
</section>

<section class="main-content container">
	<div class="tabbable tabs-left">
    	<ul class="nav nav-tabs">
    		<li class="active"><a href="#lA" data-toggle="tab">Información</a></li>
             </ul>
        	<div class="tab-content">
        		<div class="tab-pane active" id="lA">';
                	<div class="span5" >
					<?php echo $this->Form->create('Producto'); ?>
                    <?php
					echo $this->Form->create('Producto');
					echo $this->Form->input('user_id');
					echo $this->Form->input('nombre',array('type'=>'text'));
					echo $this->Form->input('descripcion');
					echo $this->Form->input('precio');
				//para admin
					?>
					</div>
					<div class="span5">
					<?php
						echo $this->Form->input('destacado');
						echo $this->Form->input('fecha',array('type'=>'hidden'));
						echo $this->Form->input('Categoria',array('type' => 'select', 'multiple'=>'checkbox'));
						echo $this->Form->end(__('Agregar y subir fotos'));
					?>
					</div>
                </div>
            	<div class="tab-pane" id="lB">;
      			
			</div>
		</div>
	<br />
</section>

