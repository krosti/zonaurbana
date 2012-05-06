<div class="categorias form">
<?php echo $this->Form->create('Detalle',array('type' => 'file','url' => 'edit/'.$ruta));?>
	<fieldset>
		<legend><?php __('Editar Detalle'); ?></legend>
		<?php
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('letra', array('label'=>'Letra (se usa para el orden): ')).'<br/>';
		echo $this->Form->input('descripcion', array('label'=>'Descripcion: ')).'<br/>';
		echo $this->Form->input('superficie', array('label'=>'Superficie: ')).'<br/>';
		echo $this->Form->input('archivo', array('type' => 'file','label'=>'Archivo (PDF): ')).'<br/>';
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
		"/admin/detalles",
		array("title"=>"","escape"=>false)
		);
?>
</div>