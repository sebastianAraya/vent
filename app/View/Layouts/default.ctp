
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

   			echo $this->Html->css('app');
   			echo $this->Html->css('glisse');

			echo $this->Html->script('jquery-1.7.2.min');
            echo $this->Html->script('bootstrap.min'); 
            echo $this->Html->script('superfish'); 
            echo $this->Html->script('jquery.scrolltotop');
            echo $this->Html->script('jquery.fancybox');
            
        ?>
</head>
<body>
<?php $user = $this->Session->read('Auth.User');?>
		<div id="top-bar" class="container">

					<a href="index.html" class="logo pull-left">
						<?php echo $this->Html->link( $this->Html->image('images/2logo.png', array('class'=>'logoInicio')),array("controller"=>"pages", "action"=>"display","home"), array("escape" => false) ) ; ?></a>
			<div class="row">
				<div class="span8 offset4">
					<div class="account pull-right">
						<ul class="user-menu">		
							<li><?php echo $this->Html->link('Ver Carrito de compras',array('controller' => 'carro', 'action' => 'index'));?></li>
							<?php if($user['tipo']!='admin'){ ?>
							<li><?php echo $this->Html->link('Entrar',array('controller' => 'users', 'action' => 'login'));?></li>
							<?php }else{ ?>
							<li><?php echo $this->Html->link("Bienvenido ".$user['nombre'],array('controller' => 'users', 'action' => 'view',$user['id']));?>
									<li><?php echo $this->Html->link('Salir',array('controller' => 'users', 'action' => 'logout'));?></li>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu" style="margin: 0px;">
				<div class="navbar-inner main-menu" style="padding: 0px;">				
					<nav id="menu" class="pull-right">
						<?php echo $this->element('categorias/main'); ?>
					</nav>
				</div>
			</section>
			
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			
			<section id="footer-bar" style="margin: 0px;">
				<div class="row">
					<div class="span3">
						<h4>Navegación</h4>
						<ul class="nav">
							<li> <?php echo $this->Html->link(__('Quienes Somos'), array('controller' => 'QuienesSomos','action' => 'index')); ?> </li>
							<li> <?php echo $this->Html->link(__('Conócenos'), array('controller' => 'QuienesSomos','action' => 'conocenos')); ?> </li>
							<?php foreach($categories as $categoria) : ?>
							    <li> 
								    <?php echo $this->Html->link(__($categoria['Categoria']['nombre']), array('controller' => 'productos','action' => 'index',$categoria['Categoria']['id'])); ?>
							    </li>
							<?php endforeach; ?>
							<li> <a href="#" >Contacto</a> </li>
						</ul>
					</div>
					<div class="span4">
						<h4>Nuestros Vendedores</h4>
						<ul class="nav">
							<?php foreach($usuaries as $categoria) : ?>
							    <li> 
								    <?php echo $this->Html->link(__($categoria['User']['nombre']), array('controller' => 'Users','action' => 'view',$categoria['User']['id'])); ?>
							    </li>
							<?php endforeach; ?>
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
			
			<section id="copyright" style="margin-left: 0px; margin-right: 0px; text-align:center;">
				Creado por <span> <a href="mailto: sebastian.arayam@usach.cl"> Sebastian Araya </a> </span> y <span> <a href="mailto: mrubio321@gmail.com"> Manuel Rubio </a> </span>
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
