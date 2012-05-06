<h1>Bienvenido</h1>
<table>
	<tr>
		<th><h5>PROYECTOS</h5></th>
		<th><h5>DETALLES</h5></th>
		<th><h5>FOTOS DE UN PROYECTO</h5></th>
		<th><h5>SLIDER HOME</h5></th>
	</tr>
	<tr>
		<td>
			<?php echo $this->Html->link(
						$this->Html->image("admin/icono_categoria.png",array("class"=>"imageHome")),
						"/admin/proyectos",
						array("title"=>"Cargar la lista de proyectos","escape"=>false)
						); 
			?>
		</td>
		<td>
			<?php echo $this->Html->link(
						$this->Html->image("admin/icono_producto.png",array("class"=>"imageHome")),
						"/admin/detalles",
						array("title"=>"Cargar la lista de detalles","escape"=>false)
						); 
			?>
		</td>
		<td>
			<?php echo $this->Html->link(
						$this->Html->image("admin/icono_imagenes.png",array("class"=>"imageHome")),
						"/admin/fotos",
						array("title"=>"Cargar la lista de fotos","escape"=>false)
						); 
			?>
		</td>
		<td>
			<?php echo $this->Html->link(
						$this->Html->image("admin/icono_imagenes.png",array("class"=>"imageHome")),
						"/admin/p_sliders",
						array("title"=>"Cargar la lista de sliders","escape"=>false)
						); 
			?>
		</td>
	</tr>
</table>
<?php echo 
	$this->Html->link($this->Html->image("admin/icono_home.png",array("class"=>"imageHome")),"/",array("target"=>"blank","title"=>"Ir al Sitio Web","escape"=>false)); 
?>