
<ul>
<li>
<a href="#">+</a>
</li>
<?php

    foreach($categories as $categoria) : 
?>

    <li>
	    <?php echo "<a href='#'>".$categoria['Categoria']['nombre']."</a>"; ?>
	    <ul>
	    <?php 
		 foreach($subcats as $subcat) : 	    	
		 	if($categoria['Categoria']['id']==$subcat['Subcategoria']['categoria_id']) : ?>
		 		<li>
					<?="<a href='#'>".$subcat['Subcategoria']['nombre']."</a>"; ?>
				</li>
	    	<?php endif;?>
	    <?php endforeach; ?>
	    <li>
			<a href="#">+</a>
		</li>
	    </ul>
    </li>
<?php endforeach; ?>
</ul>