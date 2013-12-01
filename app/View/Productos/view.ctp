			<section class="header_text sub">
				<h4><span>Productos</span></h4>
			</section>
			<section class="main-content container">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<?php if($producto['Foto']!=null){
									$i=0;
									foreach ($producto['Foto'] as $foto): 
										if($i==0){
											?>
											<li style="list-style:none"><img src="/vent/files/<?php echo $foto['imagen']; ?>" class="myphotos" rel="group1" data-glisse-big="/vent/files/<?php echo $foto['imagen']; ?>" title="Aenean massa" /></li>
											<?php
											//echo '<img src="/vent/files/'.$foto['imagen'].'" class="myphotos" rel="group2">';
											echo '<ul class="thumbnails small">';
										}
										else{
											?>
											<li class="span1"><img src="/vent/files/<?php echo $foto['imagen']; ?>" class="myphotos" rel="group1" data-glisse-big= "/vent/files/<?php echo $foto['imagen']; ?>" title="Aenean massa" /></li>
											<?php
											//echo '<li class="span1"><img src="/vent/files/';
											//echo $foto['imagen']; 
											//echo '" class="myphotos" rel="group2"></li>';
										}
										$i++;
										?>
									<?php endforeach; ?>
									</ul>
						<?php }
						else{
							echo $this->Html->image('fotos/sin_imagen.jpg');
						}
						?>
							</div>
							<div class="span5">
									
								<address>
									<h2><?php echo h($producto['Producto']['nombre']);?></h2><br>
									<strong>Estado del producto:</strong> <span style="color:green">Disponible</span> <br>
									<strong>Subido el:</strong> <span><?php echo $producto['Producto']['fecha']; ?></span><br>
									<strong>Vendedor:</strong> <span><?php echo $this->Html->link($producto['User']['nombre'], array('controller' => 'users', 'action' => 'view', $producto['User']['id'])); ?></span><br>
										<strong>Categorias: </strong> 
									<?php foreach ($producto['Categoria'] as $categoria):
											echo '<span>'.$this->Html->link($categoria['nombre'], array('action' => 'index/'.$categoria['id'])).' </span>';
										endforeach;
									?><br>
									<strong>Descripción: </strong> 
										<?php echo h($producto['Producto']['descripcion']); ?>
								</address>									
								<h4><strong>Precio: $<?php echo h($producto['Producto']['precio']); ?> </strong></h4>
								<br />
								<div class="form-inline">
									<p>&nbsp;</p>
									<label>Cantidad:</label>
									<input type="text" class="span1" placeholder="1">
									<?php 
										echo $this->Html->link("Agregar a la compra", array('controller' => 'carro','action'=> 'carrito_compra_add/'.$producto['Producto']['id']), array('class' => 'btn btn-inverse')); 
									?>
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<h5><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?></h5>
									<h5>
		<?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?></h5>
															
							</div>						
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Productos</strong> Relacionados</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<?php 
										$i = 1;
										foreach ($producto_relacionado as $producto_rel):
											$valido = false;
											foreach ($producto_rel['Categoria'] as $categoria1):
												foreach ($producto['Categoria'] as $categoria2):
													if($categoria1['id'] == $categoria2['id'] && $producto_rel['Producto']['id'] != $producto['Producto']['id']){
													$valido= true;
													}
												endforeach;
											endforeach;
										if($valido){

										if($i==1){?>
											<div class="active item">
										<?php } else { ?> <div class="item"> <?php } ?>
										<?php if($i%3==1){
											?>
												<ul class="thumbnails listing-products">
										<?php } ?>
													

													<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p>
														
														<?php
											if( $producto_rel['Foto'] == null){
												echo $this->Html->link( $this->Html->image('fotos/sin_imagen.jpg',array('class'=>'fot_pro')), array('controller'=>'productos','action' => 'view', $producto_rel['Producto']['id']),array('escape' => false)); 
											}else{
												echo $this->Html->link( $this->Html->image('../files/'.$producto_rel['Foto'][0]['imagen'], array('class'=>'fot_pro')), array('controller'=>'productos','action' => 'view', $producto_rel['Producto']['id']),array('escape' => false)); 
											}?>
														</p>
														<?php echo $this->Html->link( $producto_rel['Producto']['nombre'], array('controller'=>'productos','action' => 'view', $producto_rel['Producto']['id']), array('class'=>'title','escape' => false)); ?>
														<br/>

														<?php foreach ($producto_rel['Categoria'] as $catego):
														echo $this->Html->link($catego['nombre'].' ',array('controller'=>'productos','action'=>'index/'.$catego['id']),array('class'=>'category'));
														endforeach;	?>
														<p class="price">$ <?php echo $producto_rel['Producto']['precio']?> </p>
													</div>
												</li>

										<?php if($i%3==0){
											?>
												</ul>
												</div>
										<?php } $i++;
										}
										?>

										<?php endforeach ;
										if( ($i-1) %3!=0)
											echo "</ul></div>";
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<?php echo $this->element('categorias/menu2'); ?>
						<?php echo $this->element('categorias/random_product'); ?>
					</div>
				</div>
			</section>		
		   <!-- JS -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="/vent/js/glisse.js"></script>
        <script>
            $(function () {
                $('.myphotos').glisse({speed: 500, changeSpeed: 550, effect:'roll', fullscreen: true}); 
            });
        </script>
