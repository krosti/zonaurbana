<?php 
	echo '<h6>Puede seleccionar cualquiera de los titulos para poder ordenarlos de mayor a menor o alfabeticamente en orden descendiente</h6>';
?>
<div class="productos index">
	<h2><?php __('Proyectos');?></h2>
	<ul>
		<li>
		Agregar Proyecto
		<?php echo $this->Html->link($this->Html->image("admin/icono_plus.png",array("class"=>"imageHome")), "add",
													array("title"=>"Agregar Nuevo Proyecto","escape"=>false)); ?>
		</li>
	</ul>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th title = "Identificador univoco del Proyecto. No existen 2 con el mimo ID"><?php echo $this->Paginator->sort('ID', 'id');?></th>
			<th title = "Titulo del producto"><?php echo $this->Paginator->sort('Titulo', 'title');?></th>
			<th><?php echo $this->Paginator->sort('Descripcion', 'descripcion');?></th>
			<th><?php echo $this->Paginator->sort('Categoria', 'categoria_id');?></th>
			<th><?php echo $this->Paginator->sort('Imagen', 'picture');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($proyectos as $proyecto):		
	?>
	<tr>
		<td><?php echo $proyecto['Proyecto']['id']; ?>&nbsp;</td>
		<td><?php echo $proyecto['Proyecto']['titulo']; ?>&nbsp;</td>
		<td><?php echo $proyecto['Proyecto']['descripcion']; ?></td>
		<td><?php echo $proyecto['Categoria']['descripcion']; ?></td>
		<td><?php echo $html->image("proyectos/".$proyecto['Proyecto']['imagen'], array('width' => 50, 'height'=>50));?>&nbsp;</td>
		<td align="center">
		<?php
			echo 
				$this->Html->link(
						$this->Html->image("admin/icono_ver.png",array("class"=>"imageHome")),
						array('action' => 'view', $proyecto['Proyecto']['id']),
						array("title"=>"Ver mas informacion del Proyecto","escape"=>false)
						); 
			?>
		<?php echo 
			$this->Html->link(
				$this->Html->image("admin/icono_edit.gif",array("class"=>"imageHome")),
				array('action' => 'edit','/'.$proyecto['Proyecto']['id']),
				array("title"=>"Modificar Proyecto","escape"=>false)
				);?>
		<?php echo 
			$this->Html->link(
				$this->Html->image("admin/icono_delete.png",array("class"=>"imageHome")),
				array('action' => 'delete', $proyecto['Proyecto']['id']),
				array("title"=>"Eliminar Proyecto","escape"=>false),
				'Seguro que desea eliminar el Proyecto?'
				);?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class = "paginator"> <p>
	<?php echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%. Mostrando %current%  de %count% en total. Primero: %start%, Ultimo: %end%', true)));
	?> </p>
	</div>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<br/>
<hr size="1"/><br/>
<?php echo $this->Html->link(__('Volver al ADMINISTRADOR', true),"/admin",array("title"=>"Ir al Administrador","escape"=>false)); ?>