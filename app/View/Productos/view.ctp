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
									<h4><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?></h4>
									<h4>
		<?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?></h4>
		
								<address>
									<strong>Nombre:</strong> <span><?php echo h($producto['Producto']['nombre']);?></span><br>
									<strong>Codigo Producto:</strong> <span>C- <?php echo h($producto['Producto']['id']); ?> </span><br>
									<strong>Disponibilidad:</strong> <span style="color:green">Disponible</span> <br>
									<strong>Numero de veces que se solicita este producto:</strong> <span> <?php echo $producto['Producto']['cantidad']; ?></span><br>				<strong>Subido el:</strong> <span><?php echo $producto['Producto']['fecha']; ?></span><br>
									<strong>Dueñ@ del producto:</strong> <span><?php echo $this->Html->link($producto['User']['id'], array('controller' => 'users', 'action' => 'view', $producto['User']['id'])); ?></span><br>
									<strong>Categorias: </strong> 
									<?php foreach ($producto['Categoria'] as $categoria):
											echo '<span>'.$this->Html->link($categoria['nombre'], array('action' => 'index/'.$categoria['id'])).' </span>';
									endforeach;?>
								</address>									
								<h4><strong>Precio: $<?php echo h($producto['Producto']['precio']); ?> </strong></h4>
								<br />
								<form class="form-inline">
									<p>&nbsp;</p>
									<label>Cantidad:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Agregar a la compra</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Descripción</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home">
										<?php echo h($producto['Producto']['descripcion']); ?>
									</div>
									
								</div>							
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
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
														<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
														<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
														<a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
														<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
														<a href="product_detail.html">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
														<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<?php echo $this->element('categorias/menu2'); ?>
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
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
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
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
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
										<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>   
							</ul>
						</div>
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
