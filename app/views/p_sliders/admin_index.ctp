<?php 
	echo '<h6>Puede seleccionar cualquiera de los titulos para poder ordenarlos de mayor a menor o alfabeticamente en orden descendiente</h6>';
?>
<div class="categorias index">
	<h2><?php __('Primer Slider');?></h2>
	<ul>
		<li>
		Agregar Slider
		<?php echo $this->Html->link($this->Html->image("admin/icono_plus.png",array("class"=>"imageHome")), "add",
													array("title"=>"Agregar Nuevo Slider","escape"=>false)); ?>
		</li>
	</ul>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th title = "Identificador del slider"><?php echo $this->Paginator->sort('ID', 'id');?></th>
			<th><?php echo $this->Paginator->sort('Imagen','imagen');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($psliders as $slider):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $slider['PSlider']['id']; ?>&nbsp;</td>
		<td><?php echo $this->Html->image("slider/".$slider['PSlider']['imagen'],array('width'=>'500px','height'=>'145px')); ?>&nbsp;</td>

		<td align="center">
		<?php echo 
			$this->Html->link(
				$this->Html->image("admin/icono_edit.gif",array("class"=>"imageHome")),
				array('action' => 'edit','/'.$slider['PSlider']['id']),
				array("title"=>"Modificar Imagen","escape"=>false)
				);?>
		<?php
			echo 
			$this->Html->link(
				$this->Html->image("admin/icono_delete.png",array("class"=>"imageHome")),
				array('action' => 'delete', $slider['PSlider']['id']),
				array("title"=>"Eliminar Imagen","escape"=>false), 
				"Seguro que desea eliminar el slider ".$slider['PSlider']['id']. "?");
		?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class = "paginator">
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%. Mostrando %current% fotos de %count% en total. Primer foto: %start%, Ultima foto: %end%', true)
	));
	?>	
	</p>
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