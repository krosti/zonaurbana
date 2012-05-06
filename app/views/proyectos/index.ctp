<?php
  echo $this->Html->css(array('proyectos'));
?>
<script type="text/javascript">
$('.seleccion').css('margin-left','127px');
  $('.item_menu').mouseleave(function () {
        $('.seleccion').animate({
        marginLeft: "127px",
      },250);
  });
  $('#mproyectos a').css('color','#fff');
  $('#mproyectos').css('font-weight','bold');
</script>
<div id="proyectos">
	<div class="cat">
		<?php echo $html->image('proyectos/triangulo.png'); ?><p>EN CONSTRUCCION</p>
	</div>
		<?php foreach ($pcontruccion as $proyecto): ?>
			<div class="proy dark">
				<?php echo $html->image('proyectos/'.$proyecto['Proyecto']['imagen'],array('width'=>'157px','height'=>'124px')); ?>
				<div class="proytittle">
					<?php echo $html->link($proyecto['Proyecto']['titulo'],array('action'=>'../proyectos/view/'.$proyecto['Proyecto']['id']),array('escape' => false));?>
				</div>
				<div class="proytext">
					<?php echo $proyecto['Proyecto']['descripcion'];?>
					<br />
					Entrega: <?php echo $proyecto['Proyecto']['entrega'];?>
				</div>
			</div>
		<?php endforeach; ?>
	<div class="cat">
		<?php echo $html->image('proyectos/triangulo.png'); ?> <p>CONSTRUIDOS</p>
	</div>
		<?php foreach ($pentregados as $proyecto): ?>
			<div class="proy dark">
				<?php echo $html->image('proyectos/'.$proyecto['Proyecto']['imagen'],array('width'=>'157px','height'=>'124px')); ?>
				<div class="proytittle">
					<?php echo $proyecto['Proyecto']['titulo'];?>
				</div>
				<div class="proytext">
					<?php echo $proyecto['Proyecto']['descripcion'];?>
					<br />
					Entrega: <?php echo $proyecto['Proyecto']['entrega'];?>
				</div>
			</div>
		<?php endforeach; ?>
	<div class="cat">
		<?php echo $html->image('proyectos/triangulo.png'); ?> <p>PROYECTOS A REALIZAR</p>
	</div>
		<?php foreach ($prealizar as $proyecto): ?>
			<div class="proy dark">
				<?php echo $html->image('proyectos/'.$proyecto['Proyecto']['imagen'],array('width'=>'157px','height'=>'124px')); ?>
				<div class="proytittle">
					<?php echo $proyecto['Proyecto']['titulo'];?>
				</div>
				<div class="proytext">
					<?php echo $proyecto['Proyecto']['descripcion'];?>
					<br />
					Entrega: <?php echo $proyecto['Proyecto']['entrega'];?>
				</div>
			</div>
		<?php endforeach; ?>
</div>