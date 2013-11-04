
<ul>
<? 
    foreach($categories as $categoria) : 
?>

    <li>
	    <?="<a href='#'>".$categoria['Categoria']['nombre']."</a>"; ?>
	   
    </li>
<? endforeach; ?>
</ul>