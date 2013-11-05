
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
   			echo $this->Html->css('bootstrappage');
   			echo $this->Html->css('flexslider');
   			echo $this->Html->css('main');

			echo $this->Html->script('jquery-1.7.2.min');
            echo $this->Html->script('bootstrap.min'); 
            echo $this->Html->script('superfish'); 
            echo $this->Html->script('jquery.scrolltotop');
            echo $this->Html->script('jquery.fancybox');
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
							<li><?php echo $this->Html->link('Login',array('controller' => 'users', 'action' => 'login'));?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu" style="padding: 0px;">				
					<a href="index.html" class="logo pull-left">
						<?php // echo $this->Html->image('images/logo.png'); ?></a>
					<nav id="menu" class="pull-right">
						<?php echo $this->element('categorias/main'); ?>
					</nav>
				</div>
			</section>
			
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			
			<section id="footer-bar">
				<div class="row">
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
						<p class="logo"> <?php echo $this->Html->image('images/2logo.png',array('class'=>'site_logo')); ?> </p>
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
			
			<section id="copyright">
				<span>asdf</span>
			</section>
		</div>
		
<?php
		echo $this->Html->script('common'); 
        echo $this->Html->script('jquery.flexslider-min');   
?>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
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
