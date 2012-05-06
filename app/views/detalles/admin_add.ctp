<div class="productos form">
<?php echo $form->create('Detalle',array('action' => 'add','type' => 'file'));?>
	<fieldset>
		<legend><?php __('Agregar Nuevo Detalle'); ?></legend>
		<?php echo $form->create('Detalle',array('action' => 'add','type' => 'file'));
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('letra', array('label'=>'Letra (se usa para el orden): ')).'<br/>';
		echo $this->Form->input('descripcion', array('label'=>'Descripcion: ')).'<br/>';
		echo $this->Form->input('superficie', array('label'=>'Superficie: ')).'<br/>';
		echo $this->Form->input('archivo', array('type' => 'file','label'=>'Archivo (PDF): ')).'<br/>';
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