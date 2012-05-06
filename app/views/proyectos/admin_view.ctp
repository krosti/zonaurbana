<h2><?php  __('Producto');?></h2>
<hr size="1"/><br/>
		
<div class = "imagenvie">
	<div class = "view_img"> <?php echo $html->image("productos/".$producto['Producto']['picture'], array('width' => 128, 'height'=>128)); ?> </div>
</div>
<div class = "mostrarI">
	<p><?php echo "<span>Id: </span>".$producto['Producto']['id']; ?> </p>
	<p><?php echo "<span>Titulo: </span>".$producto['Producto']['title'];; ?>	</p>
	<p><?php echo "<span>Descripcion: </span>".$producto['Producto']['description']; ?></p>
	<p><?php echo "<span>Subcategoria: </span>"; echo $this->Html->link($producto['Subcategoria']['title'], array('controller' => 'subcategorias', 'action' => 'view', $producto['Subcategoria']['id'])); ?> </p>
	<p><?php echo "<span>Precio comun: </span>".$producto['Producto']['precio']; ?></p>
	<p><?php echo "<span>Precio mayorista: </span>".$producto['Producto']['preciomayorista']; ?></p>	
	<p><?php echo "<span>Cantidad de Cuotas: </span>".$producto['Producto']['cantcuotas']; ?></p>
	<p><?php echo "<span>Precio de cada cuota: </span>".$producto['Producto']['preciocuotas']; ?></p>
	<p><?php echo "<span>Fecha de Creacion: </span>".$producto['Producto']['created']; ?></p>
	<p><?php echo "<span>Fecha de Modificacion: </span>".$producto['Producto']['modified']; ?></p>			
</div>
<div class = "pie">
<br/>
<hr size="1"/><br/>
<?php echo 
$this->Html->link(
		"VOLVER al Listado de Productos",
		"/admin/productos",
		array("title"=>"Ir al listado de Productos","escape"=>false)
		);
?>
</div>