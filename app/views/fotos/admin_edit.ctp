<div class="categorias form">
<?php echo $this->Form->create('Foto',array('type' => 'file','url' => 'edit/'.$ruta));?>
	<fieldset>
		<legend><?php __('Editar Foto'); ?></legend>
		<?php
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('orden', array('label'=>'Nro. de Orden: ')).'<br/>';
		echo $this->Form->input('imagen', array('type' => 'file','label'=>'Imagen: ')).'<br/>';
		?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar Cambios', true));?>
</div>
<div class = "pie">
<br/>
<hr size="1"/><br/>
<?php echo 
$this->Html->link(
		"VOLVER",
		"/admin/fotos",
		array("title"=>"","escape"=>false)
		);
?>
</div>