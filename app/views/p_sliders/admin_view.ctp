<h2><?php echo "<span>Id: </span>".$hotel['Hotel']['id']; ?> - <?php echo "<span>Nombre: </span>".$hotel['Hotel']['nombre']; ?>	</h2>
<hr size="1"/><br/>
<div class = "mostrarI">
	<p><?php echo "<span>Descripcion: </span>".$hotel['Hotel']['descripcion']; ?></p>
	<p><?php echo "<span>Estrellas: </span>".$hotel['Hotel']['estrellas']; ?></p>
	<p><?php echo "<span>Popularidad: </span>".$hotel['Hotel']['popularidad']; ?></p>	
	<p><?php echo "<span>Tipo: </span>".$hotel['Hotel']['tipo']; ?></p>	
	<p><?php echo "<span>Perfil: </span>".$hotel['Hotel']['perfil']; ?></p>	
	<p><?php echo "<span>Direccion: </span>".$hotel['Hotel']['direccion']; ?></p>	
	<p><?php echo "<span>Codpostal: </span>".$hotel['Hotel']['codpostal']; ?></p>	
	<p><?php echo "<span>Ciudad: </span>".$hotel['Hotel']['ciudad']; ?></p>	
	<p><?php echo "<span>Pais: </span>".$hotel['Hotel']['pais']; ?></p>	
	<p><?php echo "<span>Telefono: </span>".$hotel['Hotel']['telefono']; ?></p>	
	<p><?php echo "<span>Fax: </span>".$hotel['Hotel']['fax']; ?></p>	
	<p><?php echo "<span>Email: </span>".$hotel['Hotel']['email']; ?></p>	
	<p><?php echo "<span>Cerca de: </span>".$hotel['Hotel']['cerca']; ?></p>	
</div>

<div class="actions">

</div>
<hr size="1"/><br/>
<div class="related">
	<h3><?php __('Habitaciones que pertenecen a este hotel');?></h3>
	<?php if (!empty($hotel['Room'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Precio'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Caracteristicas'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hotel['Room'] as $room):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $room['id'];?></td>
			<td><?php echo $room['nombre'];?></td>
			<td><?php echo $room['precio'];?></td>
			<td><?php echo $room['tipo'];?></td>
			<td><?php echo $room['caracteristicas'];?></td>			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<br />
<div class="related">
	<h3><?php __('Caracteristicas del hotel');?></h3>
	<?php if (!empty($caracteristicas)):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Caracteristica'); ?></th>
		<th><?php __('Accion'); ?></th>
	</tr>
	<?php foreach ($caracteristicas as $caracteristica):?>
		<tr<?php echo $class;?>>
			<td><?php echo $caracteristica['Hcarac']['caracteristica'];?></td>
			<td><?php echo $this->Html->link($this->Html->image("admin/icono_delete.png",array("class"=>"imageHome")),
				array('controller'=>'hcaracs', 'action' => 'delete', $caracteristica['Hcarac']['id']),
				array("title"=>"Eliminar Caracteristica","escape"=>false), 
				"Seguro que desea eliminar?");
		?></td>		
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<br />
<div class="related">
	<h3><?php __('Fotos del hotel');?></h3>
	<?php if (!empty($fotos)):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Foto'); ?></th>
		<th><?php __('Accion'); ?></th>
	</tr>
	<?php foreach ($fotos as $foto):?>
		<tr>
			<td><?php echo $html->image('/app/webroot/slir/w100-h100/cakehusa/app/webroot/img/hotels/'.$foto['Hfoto']['ruta']);?></td>
			<td><?php echo $this->Html->link($this->Html->image("admin/icono_edit.gif",array("class"=>"imageHome")),
				array('controller'=>'hfotos', 'action' => 'edit', $foto['Hfoto']['id']),
				array("title"=>"Eliminar Foto","escape"=>false));
				?>
				<?php echo $this->Html->link($this->Html->image("admin/icono_delete.png",array("class"=>"imageHome")),
						array('controller'=>'hfotos', 'action' => 'delete', $foto['Hfoto']['id']),
						array("title"=>"Eliminar Foto","escape"=>false), 
						"Seguro que desea eliminar?");
				?>
		</td>		
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>


<div class = "pie">
<br/>
<hr size="1"/><br/>
<?php echo 
$this->Html->link(
		"VOLVER al Listado de Hoteles",
		"/admin/hotels",
		array("title"=>"Ir al listado de hoteles","escape"=>false)
		);
?>
</div>