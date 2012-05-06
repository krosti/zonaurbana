<div id="contactofixed">
	<div id="contactogeneral">
	
		<div id="contactoizq">
			<?php echo $form->create('Contact');?>	
			<div class="inputizq">						
						<?php echo $form->input('nombre'	,array('label'=>'nombre y apellido *','class'=>'inputext'));?>	
						<?php echo $form->input('email'	,array('label'=>'mail *','class'=>'inputext'));?>	
						<?php echo $form->input('telefono',array('label'=>'tel&eacute;fono','class'=>'inputext'));?>	
						<?php echo $form->input('asunto'	,array('label'=>'Asunto','class'=>'inputext'));	?>	
				
			</div>
			<div class='inputizq'>			
				<?php echo $form->input('mensaje'	,array('class'=>'inputmensaje','label'=>'mensaje'));?>
				<div class = 'required'>* campos obligatorios</div>
				<?php echo $form->end(array ('class'=>'enviar', 'label'  => '' ));?>	
			</div>
		</div>
		
		<div id="contactoder">
			<div class='texto1'>
				<?php echo $html->image("default/modde.png"); ?>
			</div>
			<div class = 'infocontact'>
				Zelarrayan 354 - local 3 - Bahia Blanca<br/><br/>(0291) 456-3555<br/>Consultas:<br/>info@modde.com.ar<br/>ventas@modde.com.ar<br/>
			</div>
		</div>		
		
	</div>
</div>
<script type="text/javascript">
$(document).ready(function()
	{ 	
		$(".inputext").focus(function()	{ $(this).css( {border: '3px solid #F3C637'});}	);
		$(".inputext").blur(function()	{ $(this).css( {border: '3px solid #FFFFFF'});}	);
	 	$(".inputmensaje").focus(function()	{ $(this).css( {border: '3px solid #F3C637'});}	);
		$(".inputmensaje").blur(function()	{ $(this).css( {border: '3px solid #FFFFFF'});}	);
 });
</script>