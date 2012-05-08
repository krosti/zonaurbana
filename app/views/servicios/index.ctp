<?php 
	echo $this->Html->css(array('servicios'));
 ?>
 <div class="servicios">
	<div class="menu2">
		<div class="centro_menu2" >
			<div class="seleccion2"></div>
			<div class="item_menu2" id="mservicios"><?php echo $html->link('SERVICIOS',array('action'=>'../'),array('escape' => false));?></div>
			<div class="item_menu2" id="mdesarrolladora"><?php echo $html->link('DESAROLADORA',array('action'=>'../proyectos/index'),array('escape' => false));?></div>
			<div class="item_menu2" id="mconstructora"><?php echo $html->link('CONSTRUCTORA',array('action'=>'../servicios'),array('escape' => false));?></div>
			<div class="item_menu2" id="mareap"><?php echo $html->link('AREA PROYECTUAL',array('action'=>'../contacto/index'),array('escape' => false));?></div>
		</div>
	</div>
</div>

