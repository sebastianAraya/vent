
<ul>
<li>
<a href="#">+</a>
</li>
<? 

    foreach($categories as $categoria) : 
?>

    <li>
	    <?="<a href='#'>".$categoria['Categoria']['nombre']."</a>"; ?>
	    <ul>
	    <? 
		 foreach($subcats as $subcat) : 	    	
		 	if($categoria['Categoria']['id']==$subcat['Subcategoria']['categoria_id']) : ?>
		 		<li>
					<?="<a href='#'>".$subcat['Subcategoria']['nombre']."</a>"; ?>
				</li>
	    	<?endif;?>
	    <? endforeach; ?>
	    <li>
			<a href="#">+</a>
		</li>
	    </ul>
    </li>
<? endforeach; ?>
</ul>