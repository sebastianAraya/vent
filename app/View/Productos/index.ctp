
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
													array('escape' => false), __('¿Estás seguro que quieres eliminar este producto?', $producto['Producto']['id'])); ?>
										</span>
										
										<p> 
											<?php 
											echo $this->Html->link(__('Editar'), array('action' => 'edit', $producto['Producto']['id']));
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
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/ladies/1.jpg"><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<img alt="" src="themes/images/ladies/2.jpg"><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>