<?php 
	echo '<h6>Puede seleccionar cualquiera de los titulos para poder ordenarlos de mayor a menor o alfabeticamente en orden descendiente</h6>';
?>
<div class="productos index">
	<h2><?php __('Detalles');?></h2>
	<ul>
		<li>
		Agregar Detalle
		<?php echo $this->Html->link($this->Html->image("admin/icono_plus.png",array("class"=>"imageHome")), "add",
													array("title"=>"Agregar Nuevo Detalles","escape"=>false)); ?>
		</li>
	</ul>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th title = "Identificador univoco del Detalles. No existen 2 con el mimo ID"><?php echo $this->Paginator->sort('ID', 'id');?></th>
			<th><?php echo $this->Paginator->sort('Letra', 'letra');?></th>
			<th><?php echo $this->Paginator->sort('Descripcion', 'descripcion');?></th>
			<th><?php echo $this->Paginator->sort('Proyecto', 'proyecto_id');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($detalles as $detalle):		
	?>
	<tr>
		<td><?php echo $detalle['Detalle']['id']; ?>&nbsp;</td>
		<td><?php echo $detalle['Detalle']['letra']; ?>&nbsp;</td>
		<td><?php echo $detalle['Detalle']['descripcion']; ?></td>
		<td><?php echo $detalle['Proyecto']['titulo']; ?></td>
		<td align="center">
		<?php
			echo 
				$this->Html->link(
						$this->Html->image("admin/icono_ver.png",array("class"=>"imageHome")),
						array('action' => 'view', $detalle['Detalle']['id']),
						array("title"=>"Ver mas informacion del Detalle","escape"=>false)
						); 
			?>
		<?php echo 
			$this->Html->link(
				$this->Html->image("admin/icono_edit.gif",array("class"=>"imageHome")),
				array('action' => 'edit','/'.$detalle['Detalle']['id']),
				array("title"=>"Modificar Detalle","escape"=>false)
				);?>
		<?php echo 
			$this->Html->link(
				$this->Html->image("admin/icono_delete.png",array("class"=>"imageHome")),
				array('action' => 'delete', $detalle['Detalle']['id']),
				array("title"=>"Eliminar Detalle","escape"=>false),
				'Seguro que desea eliminar el detalle?'
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