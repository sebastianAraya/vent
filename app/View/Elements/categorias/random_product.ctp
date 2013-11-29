<div class="block">
						<h4 class="title">
								<span class="pull-left"><span class="text">Producto al azar</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<?php $i = 1; foreach ($random_producto as $producto): 
										if ($i == 1) {echo '<div class="active item">';$i++; } else echo '<div class="item">'; ?>
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<?php 
													if( $producto['Foto'] == null){
														echo $this->Html->link( $this->Html->image('fotos/sin_imagen.jpg'), array('action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
													}else{
														echo $this->Html->link( $this->Html->image('../files/'.$producto['Foto'][0]['imagen']), array('action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
													} ?>
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
										</ul>
									</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>