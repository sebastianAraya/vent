			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<?php echo $this->Html->image('carousel/banner-1.jpg'); ?>
						</li>
						<li>
							<?php echo $this->Html->image('carousel/banner-2.jpg'); ?>
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section class="header_text container">
				<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">
										<?php echo $this->Html->image('images/feature_img_2.png'); ?>
										<h4>Quienes <strong>SOMOS</strong></h4>

										<p>Somos una plataforma donde microempresarios tienen una oportunidad para mostrar sus productos y comercializarlos...<a href="#myModal" role="button" data-toggle="modal">Ver más</a></p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<?php echo $this->Html->image('images/feature_img_1.png'); ?>
										<h4>Como <strong>COMPRAR</strong></h4>
										<p>Solo debes elegir los productos que quieres comprar dejándolos en el carro de compra, esto gatilla un mail al vendedor y este recibirá tu pedido, en un plazo máximo de 24 horas se comunicara contigo para acordar la entrega y el pago.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<?php echo $this->Html->image('images/feature_img_3.png'); ?>
										<h4>Como <strong>PAGAR</strong></h4>
										<p>Puedes pagar contra entrega en efectivo, o puedes realizar una trasferencia bancaria previo acuerdo con el vendedor.</p>
									</div>
								</div>
							</div>	
						</div>
			</section>
			<section class="main-content container">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Últimos <strong>Productos</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<?php 
										$i = 1;
										foreach ($productos as $producto): 
										if($i==1){
										 	echo '<div class="active item"><ul class="thumbnails">';
										}
										else{
											if($i%4==1){
												if($i!=1){
													echo '</div></ul>';
												}
												echo '<div class="item">';
												echo '<ul class="thumbnails">';
											}
										}
										$i++;
										?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p>
														
														<?php
											if( $producto['Foto'] == null){
												echo $this->Html->link( $this->Html->image('fotos/sin_imagen.jpg',array('class'=>'fot_pro')), array('controller'=>'productos','action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
											}else{
												echo $this->Html->link( $this->Html->image('../files/'.$producto['Foto'][0]['imagen'], array('class'=>'fot_pro')), array('controller'=>'productos','action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
											}?>
														</p>
														<?php echo $this->Html->link( $producto['Producto']['nombre'], array('controller'=>'productos','action' => 'view', $producto['Producto']['id']), array('class'=>'title','escape' => false)); ?>
														<br/>

														<?php foreach ($producto['Categoria'] as $catego):
														echo $this->Html->link($catego['nombre'].' ',array('controller'=>'productos','action'=>'index/'.$catego['id']),array('class'=>'category'));
														endforeach;	?>
														<p class="price">$ <?php echo $producto['Producto']['precio']?> </p>
													</div>
												</li>
										<?php endforeach; ?>
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Los más <strong>Vendidos</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<?php 
										$i = 1;
										foreach ($productos2 as $producto): 
										if($i==1){
										 	echo '<div class="active item"><ul class="thumbnails">';
										}
										else{
											if($i%4==1){
												if($i!=1){
													echo '</div></ul>';
												}
												echo '<div class="item">';
												echo '<ul class="thumbnails">';
											}
										}
										$i++;
										?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p>
														
														<?php
											if( $producto['Foto'] == null){
												echo $this->Html->link( $this->Html->image('fotos/sin_imagen.jpg',array('class'=>'fot_pro')), array('controller'=>'productos','action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
											}else{
												echo $this->Html->link( $this->Html->image('../files/'.$producto['Foto'][0]['imagen'], array('class'=>'fot_pro')), array('controller'=>'productos','action' => 'view', $producto['Producto']['id']),array('escape' => false)); 
											}?>
														</p>
														<?php echo $this->Html->link( $producto['Producto']['nombre'], array('controller'=>'productos','action' => 'view', $producto['Producto']['id']), array('class'=>'title','escape' => false)); ?>
														<br/>
														<?php foreach ($producto['Categoria'] as $catego2):
														echo $this->Html->link($catego2['nombre'].' ',array('controller'=>'productos','action'=>'index/'.$catego2['id']),array('class'=>'category'));
														endforeach;	?>
														<p class="price">$ <?php echo $producto['Producto']['precio']?> </p>
													</div>
												</li>
										<?php endforeach; ?>
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>		
					</div>				
				</div>
			</section>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	
	<h3 class='text-center' id="myModalLabel">¿Quienes somos?</h3>
	</div>
	<div class="modal-body">
	<p>
	     Somos una plataforma donde microempresarios tienen una oportunidad para mostrar sus productos y comercializarlos, ofrecemos una relación precio calidad conveniente para un gran espectro de clientes, como somos microempresarios podemos ofrecer un servicio más cercano y tenemos la capacidad de adaptarnos fácilmente al mercado.
	</p>
	</div>
	<div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
	</div>
</div>