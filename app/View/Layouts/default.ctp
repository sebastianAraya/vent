
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta charset="utf-8">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
//		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<?php 
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-responsive.min');
   			echo $this->Html->css('themes/bootstrappage');
   			echo $this->Html->css('themes/flexslider');
   			echo $this->Html->css('themes/main');
		?>
		
		<!-- scripts -->

		<?php 
			echo $this->Html->script('themes/jquery-1.7.2.min');
            echo $this->Html->script('bootstrap.min'); 
            echo $this->Html->script('themes/superfish'); 
            echo $this->Html->script('themes/jquery.scrolltotop');

			echo $this->Html->script('themes/common'); 
            echo $this->Html->script('themes/jquery.flexslider-min'); 
            
        ?>
</head>
<body>
<div id="top-bar" class="container">
			<div class="row">
				<div class="span8 offset4">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="cart.html">Ver Pedido actual</a></li>
							<li><a href="checkout.html">Enviar Pedido</a></li>
							<li><a href="Login.php">Login</a></li>	
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left">
						<?php echo $this->Html->image('images/logo.png'); ?></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Hombre</a>					
								
							</li>															
							<li><a href="./products.html">Mujer</a></li>			
							<li><a href="./products.html">Servicios</a>
								<ul>									
									<li><a href="./products.html">manos cony </a></li>
									<li><a href="./products.html">pag amorchines</a></li>
									<li><a href="./products.html">otros</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">otros productos</a></li>
							<li><a href="./products.html">Destacados</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<?php echo $this->Html->image('images/carousel/banner-2.jpg'); ?>
							<div class="intro">
								<h1>Ejemplo</h1>
								<p><span>Descripción corta</span></p>
							</div>
						</li>
					

					</ul>
				</div>			
			</section>
			<section class="header_text">
				Pide los mejores productos a un valor conveniente y con facilidades de pago. 
				<br/>oportunidad unica y  bla bla bla ...
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Nuevos<strong>Productos</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>										
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
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">									<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">polera</a><br/>
														<a href="products.html" class="category">Categoria: Mujer</a>
														<p class="price">Valor: $10.000</p>
													</div>
												</li>								
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
					<!--	<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>
						-->		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Catalogos disponibles</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
		<!--		<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Home</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			-->
			<section id="copyright">
				<span>asdf</span>
			</section>
		</div>
		
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					alert(123);
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>

</body>
</html>
