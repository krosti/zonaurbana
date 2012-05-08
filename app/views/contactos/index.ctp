<?php 
	echo $this->Html->css(array('contacto'));
 ?>
 <div class="barra">
 	<?php echo $html->image("default/triangulo-down.png"); ?>
 	<span>su consulta ser&aacute; respondida a la brevedad</span>
 </div>
<div id="contactofixed">
	<div class="contactogeneral">
	
		<div id="contactoizq">
			<?php echo $form->create('Contact');?>	
			<div class="inputizq">						
				<?php echo $form->input('nombre'	,array('label'=>'nombre y apellido *','class'=>'inputext'));?>	
				<?php echo $form->input('ciudad'	,array('label'=>'ciudad','class'=>'inputext'));?>	
				<?php echo $form->input('telefono',array('label'=>'tel&eacute;fono','class'=>'inputext'));?>	
				<?php echo $form->input('email'	,array('label'=>'mail *','class'=>'inputext'));?>	
				<div class = 'required'>* campos obligatorios</div>
			</div>

			<div class='inputder'>			
				<?php echo $form->input('mensaje'	,array('class'=>'inputmensaje','label'=>'consulta',"type"=>"textarea"));?>
				<?php echo $html->image("default/triangulo.png"); ?>
				<?php echo $form->button('enviar');?>	
			</div>
		</div>
		
		<div id="contactoder">
			<div class='texto1'>
				<?php echo $html->image("default/mapa.png"); ?>
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