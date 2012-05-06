<div class="productos form">
<?php echo $form->create('Foto',array('action' => 'add','type' => 'file'));?>
	<fieldset>
		<legend><?php __('Agregar Nueva Foto'); ?></legend>
		<?php echo $form->create('Foto',array('action' => 'add','type' => 'file'));
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('orden', array('label'=>'Nro. de Orden: ')).'<br/>';
		echo $this->Form->input('imagen', array('type' => 'file','label'=>'Imagen: ')).'<br/>';
		?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar', true));?>
<br/>
<hr size="1"/><br/>
</div>
<?php echo 
$this->Html->link(
		"CANCELAR",
		"/admin/detalles",
		array("title"=>"volver","escape"=>false)
		);
?>