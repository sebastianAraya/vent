
<ul>
	<li>
	<?php echo $this->Html->link(__('+'), array('controller' => 'categorias','action' => 'add')); ?>
	</li>
	<li>
	<?php echo $this->Html->link(__('Quienes Somos'), array('controller' => 'QuienesSomos','action' => 'index')); ?>
		<ul>
			<li> <?php echo $this->Html->link(__('Quienes Somos'), array('controller' => 'QuienesSomos','action' => 'index')); ?> </li>
			<li> <?php echo $this->Html->link(__('Conócenos'), array('controller' => 'QuienesSomos','action' => 'conocenos')); ?> </li>
		</ul>
	</li>
	<?php

	    foreach($categories as $categoria) : 
	?>

	    <li>
		    
		    <?php echo $this->Html->link(__($categoria['Categoria']['nombre']), array('controller' => 'productos','action' => 'index',$categoria['Categoria']['id'])); ?>
		    <ul>
		    <?php 
			 foreach($subcats as $subcat) : 	    	
			 	if($categoria['Categoria']['id']==$subcat['Subcategoria']['categoria_id']) : ?>
			 		<li>
			 			<?php echo $this->Html->link(__($subcat['Subcategoria']['nombre']), array('controller' => 'productos','action' => 'index',$categoria['Categoria']['id'],$subcat['Subcategoria']['id'])); ?>
						
					</li>
		    	<?php endif;?>
		    <?php endforeach; ?>
		    <li>
				<?php echo $this->Html->link(__('+'), array('controller' => 'subcategorias','action' => 'add',$categoria['Categoria']['id'])); ?>
			</li>
		    </ul>
	    </li>
	<?php endforeach; ?>
	<li> <a href="#" >Contacto</a> </li>
</ul>