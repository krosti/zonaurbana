<div class="categorias form">
<?php echo $this->Form->create('PSlider',array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Agregar Nuevo Slider'); ?></legend>
	<?php
		echo $this->Form->input('imagen',array('label'=>'Imagen: ','type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar Imagen', true));?>
<br/>
<hr size="1"/><br/>
</div>
<?php echo 
$this->Html->link(
		"CANCELAR",
		"/admin/p_sliders",
		array("title"=>"Volver","escape"=>false)
		);
?>