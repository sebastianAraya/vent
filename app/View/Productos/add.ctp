<section class="header_text sub">
	<h4><span>Nuevo Producto</span></h4>
</section>
<section class="main-content container">				
	<div class="row">
		<div class="span2 offset3">
		</div>
		<div class="span3" >
		<?php
			echo $this->Form->create('Producto');
			echo $this->Form->input('user_id');
			echo $this->Form->input('nombre',array('type'=>'text'));
			echo $this->Form->input('descripcion');
			echo $this->Form->input('precio');
			echo $this->Form->input('destacado');
			echo $this->Form->input('fecha',array('type'=>'hidden'));
			echo $this->Form->input('Categoria',array('type' => 'select', 'multiple'=>'checkbox'));
			echo $this->Form->end(__('Agregar'));
		?>
		</div>
	</div>
</section>