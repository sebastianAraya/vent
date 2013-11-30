<section class="header_text sub">
				<h4><span>Carro de Compras</span></h4>
			</section>
			<section class="main-content container">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Eliminar</th>
									<th>Imagen</th>
									<th>Producto</th>
									<th>Valor unitario</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$total = 0;
								if($carrito != null){
								foreach ($carrito as $variable): ?>	
								<tr>
									<td><?php echo $this->Html->link('Borrar',array('controller' => 'Carro', 'action' => 'carrito_compra_delete/'.$variable['producto']['Producto']['id']));?></td>
									<td>
										<?php 
													if( $variable['producto']['Foto'] == null){
														echo $this->Html->link( $this->Html->image('fotos/sin_imagen.jpg'), array('action' => 'view', $variable['producto']['Producto']['id']),array('escape' => false)); 
													}else{
														echo $this->Html->link( $this->Html->image('../files/'.$variable['producto']['Foto'][0]['imagen']), array('action' => 'view', $variable['producto']['Producto']['id']),array('escape' => false)); 
													} ?>
									<td><?php echo $variable['producto']['Producto']['nombre'] ?></td>
									<td><?php echo $variable['cantidad'] ?></td>
									<td><?php echo $variable['producto']['Producto']['precio'] * $variable['cantidad'] ?></td>
								</tr>
								<?php endforeach; }?>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>Total: <strong><?php echo $total?></strong></td>
								</tr>		  
							</tbody>
						</table>
						
						<p class="buttons center">				
							<button class="btn" type="button">Comprar</button>
						</p>					
					</div>
					<div class="span3 col">
						<?php echo $this->element('categorias/menu2'); ?>
						<?php echo $this->element('categorias/random_product'); ?>
					</div>
				</div>
			</section>