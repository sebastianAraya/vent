<ul>
<? if (!isset($categorias) || empty($categorias)) :
        $categorias = $this->requestAction('/categorias/index');
    endif; 
    foreach($categorias as $categoria) : 
?>
    <li>
    <?="<a href='#'>".$categoria['Categoria']['nombre']."</a>"; ?>
    </li>
<? endforeach; ?>
</ul>