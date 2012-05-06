<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	
	<title>	Zona Urbana SA </title>
	<?php
		echo $html->meta('icon');
		echo $this->Html->css(array('styles'));
		echo $javascript->link(array('jquery.1.6','menu','lemmon-slider'));
		header("Content-Type: text/html; charset=utf-8");
	?>
</head>
<body>
<div class="header">
		<div id="img_header">
			<?php echo $html->image('home/header.png');?>
		</div>
</div>
<div id="menu">
		<div id="centro_menu">
			<div class="seleccion"></div>
			<div class="item_menu" id="mempresa"><?php echo $html->link('EMPRESA',array('action'=>'../'),array('escape' => false));?></div>
			<div class="item_menu" id="mproyectos"><?php echo $html->link('PROYECTOS',array('action'=>'../proyectos/index'),array('escape' => false));?></div>
			<div class="item_menu" id="mservicios"><?php echo $html->link('SERVICIOS',array('action'=>'../servicios'),array('escape' => false));?></div>
			<div class="item_menu" id="mcontacto"><?php echo $html->link('CONTACTO',array('action'=>'../contactos/index'),array('escape' => false));?></div>
		</div>
		<div id="verde">
		</div>
</div>


<div class="cuerpo">
	<?php echo $content_for_layout; ?>
</div>

<div id="footer">
	<div id="footer_interno">
		<div id="footer_arriba">
			<div id="footer_direccion">
				<div id="fcalle">Av Colon 24, Piso 1</div>
				<div id="fciudad">Bahia Blanca (8000)</div>
				<div id="ftel">Tel&eacute;fono: (0291) 4526013</div>
			</div>
			<div id="imgs_footer">
				<?php echo $html->image('home/verde_footer.png',array('class'=>'puertaverde'));?>
				<div class="email">info@zonaurbanasa.com.ar</div>
			</div>
		</div>
		<div id="footer_abajo">
			<div id="footer_derechos">
				&copy; 2012 ZONA URBANA - desarrolladora inmobiliaria | TODOS LOS DERECHOS RESERVADOS
			</div>
			<div id="footer_nouz">
				NouZ
			</div>
		</div>
	</div>
</div>
</body>
</html>	