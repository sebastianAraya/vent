

<div class="block">	
	<ul class="nav nav-list">
		<li class="nav-header">CATEGORÍA</li>
	<?php 
		$var = '<br/><ul class= "nav nav-list below"><li class="nav-header">SUBCATEGORÍA DE ';
	foreach($categories as $categoria) : ?>
		<?php 

		if($catego==$categoria['Categoria']['id']){
			 echo "<li class='active'><a href='#'>".$categoria['Categoria']['nombre']."</a></li>"; 
			 $var .= $categoria['Categoria']['nombre']."</li>";
			 foreach($subcats as $subcat) : 	    	
				 	if($categoria['Categoria']['id']==$subcat['Subcategoria']['categoria_id']) : 
				 		$var .= "<li> <a href='#'>".$subcat['Subcategoria']['nombre']."</a>	</li>";
			    	endif;
				endforeach; 
		}
		else 	
			echo "<li><a href='#'>".$categoria['Categoria']['nombre']."</a></li>"; 
		endforeach; ?>					
	</ul>
	<?php if($catego!=null){
		$var .="</ul>";
		echo $var;
	}
	?>
</div>