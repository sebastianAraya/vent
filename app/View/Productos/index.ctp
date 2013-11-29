
			<section class="header_text sub">
				<h4><span>Productos</span></h4>
			</section>

			<section style="padding-left:30px;">Ordenar por: 
		    <?php echo $this->Paginator->sort('nombre'); ?>,   
		    <?php echo $this->Paginator->sort('precio'); ?>,    
		    <?php echo $this->Paginator->sort('destacado');?>,    
		    <?php echo $this->Paginator->sort('fecha'); ?>,      
		    <?php echo $this->Paginator->sort('cantidad'); ?>
			</section>
			<section class="main-content container">
				<div class="row">						
					<div class="span9">	
				<h3><?php echo $this->Html->link(__('NUEVO PRODUCTO'), array('action' => 'add')); ?></h3>
						<?php $cantidad = $this->Paginator->counter(array('format' => __('{:count}') ));if( strcmp( $cantidad , '0') != 0 ){ ?> 
							<ul class="thumbnails listing-products">
								<?php foreach ($productos as $producto): ?>
								<li class="span3">
									<div class="product-box">
										
										<span class="sale_tag">
											<?php 
											echo $this->Form->postLink( $this->Html->image('images/elim.png', 
													array('style'=>array('max-height'=>'20px'))), 
													array('action' => 'delete', $producto['Producto']['id']), 
													array('escape' => false), __('¿Estás seguro que quieres eliminar este producto?', $producto['Producto']['id'])); 
											?>
										</span>
										
										<p> 
											<?php 
											echo $this->Html->link(
													$this->Html->image('images/editar.png', array('style'=>array('max-height'=>'max-height:20px'))), 
														array('action' => 'edit', $producto['Producto']['id']), array('escape' => false));

											if( $producto['Foto'] == null){
												echo $this->Html->link( $this->Html->image('fotos/sin_imagen.jpg',array('class'=>'fot_pro')), array('action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
											}else{
												echo $this->Html->link( $this->Html->image('../files/'.$producto['Foto'][0]['imagen'], array('class'=>'fot_pro')), array('action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
											}
											?>
										<br/>
										<?php 
											echo $this->Html->link( $producto['Producto']['nombre'], array('action' => 'view', $producto['Producto']['id']),array('escape' => false,'class'=>'title')); 
											echo '<br/>Categoria: ';
											foreach ($producto['Categoria'] as $catego):
														echo $this->Html->link($catego['nombre'].' ',array('controller'=>'productos','action'=>'index/'.$catego['id']),array('class'=>'category'));
														endforeach;	?>

										<p class="price"><?php echo h($producto['Producto']['precio']); ?></p>
									</div>
								</li>   
								<?php endforeach; ?>							
							</ul>								
							<hr>


							<?php $pag = $this->Paginator->counter(array('format' => __('{:pages}') ));if( strcmp( $pag , '1') != 0 ){ ?> 
								<div class="pagination pagination-small pagination-centered">
									<?php
										echo $this->Paginator->prev('<' . __('Anterior '), array(), null, array('class' => 'prev disabled'));
										echo $this->Paginator->numbers(array('separator' => ' - '));
										echo $this->Paginator->next(__(' Siguiente') . '>', array(), null, array('class' => 'next disabled'));
										?>
								</div>
							<?php } ?>
						<?php } else{ ?> 

							<h1 class='text-center'> NO EXISTEN PRODUCTOS </h1>
						<?php } ?>
					</div>

					<div class="span3 col">
						<?php echo $this->element('categorias/menu2'); ?>
						<?php echo $this->element('categorias/random_product'); ?>
					</div>
				</div>
			</section>