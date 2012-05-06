<?php
	echo $this->Html->css(array('proyectoabierto'));
	echo $javascript->link(array('proyectos'));
?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
window.onload = function(){
//Funcion para el Slider
		$( '#slider1' ).lemmonSlider({
	    'infinite' : true
		})
		$('div._jq-ficha','div.container').hide(),
	    $('div._jq-mapa','div.container').show(),
	    $('div._jq-img','div.container').hide();
}
	$(document).ready(function(){
		var map;
		function initialize() {
	      var mapDiv = document.getElementById('contruccion-ubicacion');
	      map = new google.maps.Map(mapDiv, {
	        center: new google.maps.LatLng($('.puntos').attr('id'),$('.puntos').attr('alt')),
	        zoom: 15,
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	      });

	      google.maps.event.addListenerOnce(map, 'tilesloaded', addMarkers);
	    }

	    function addMarkers() {
	          var latLng = new google.maps.LatLng($('.puntos').attr('id'),$('.puntos').attr('alt'));
	          var marker = new google.maps.Marker({
	            position: latLng,
	            map: map
	          });
	    }
	  	google.maps.event.addDomListener(window, 'load', initialize);
  	});
</script>
	<div class="puntos" id="<?php echo $proyecto['Proyecto']['latitud'];?>" alt="<?php echo $proyecto['Proyecto']['longitud'];?>">

	<div class="body-projects">
		<div class="menu">
			<div class="nav-projects">
				<div id="btn-proyecto-realizar">
		    	<?php echo $html->image('proyecto_abierto/down-green-arrow.png');?>
		    	<span><?php echo $proyecto['Categoria']['descripcion'];?></span>
				</div>
				<div id="btn-volver-listado">
					<?php echo $html->image('proyecto_abierto/prev-arrow.png');?>
					<span><?php echo $html->link('VOLVER AL LISTADO',array('action'=>'../proyectos/index'),array('escape' => false));?></span>
				</div>
			</div>
			<div id="nav-project-description"> 
				<ul>
					<li id="btn-ficha-tecnica" class="_jq-proy-btn">
					 <a href="#"> FICHA TECNICA </a>
					</li>
					<li id="btn-ubicacion" class="selected _jq-proy-btn">
						<a href="#"> UBICACION </a>
					</li>
					<li id="btn-imagenes" class="_jq-proy-btn">
						<a href="#"> IMAGENES </a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="section-tecnica _jq-ficha">
        <div class="img-ficha-tecnica">
        	<?php echo $html->image('proyectos/'.$proyecto['Proyecto']['imagen']);?>
        </div>
        <div class="descripcion-tecnica">
        	<h3> <?php echo $proyecto['Proyecto']['titulo'];?></h3>
        	<?php echo $proyecto['Proyecto']['descripcion'];?>
        	<br /><br />
        	<?php echo $proyecto['Proyecto']['texto'];?>
        	<br /><br />
        	Entrega <?php echo $proyecto['Proyecto']['entrega'];?> | <?php echo $proyecto['Proyecto']['direccion'];?> | <?php echo $proyecto['Proyecto']['barrio'];?> | <?php echo $proyecto['Proyecto']['ciudad'];?> 
        </div>
			</div>
			<div class="section-map">
				 <div id="contruccion-ubicacion" class='_jq-mapa'></div>
			</div>
			<div class="section-imagenes _jq-img">
				<div id="slider1" class="slider">
			    <ul>
			      <?php foreach ($fotos as $foto) :?>
				      <li><?php echo $html->image('fotos/'.$foto['Foto']['imagen']);?></li>
			      <?php endforeach;?>
			    </ul>
        </div>
				<div class="controls">	    
			    <a href="#" class="prev-slide"><?php echo $html->image('proyecto_abierto/prev-arrow.png');?></a> 
			    <a href="#" class="next-slide"><?php echo $html->image('proyecto_abierto/next-arrow.png');?></a> 
	      </div>
	    </div>
		</div>
		<div class="details-departament">
     	<span> UNIDADES </span>
     	<table class="info-departament">
				<thead>
					<tr>
						<th colspan="2" class="info-left detalles-style"> <?php echo $html->image('proyecto_abierto/down-arrow.png');?> DETALLE</th>
						<th>SUPERFICIE</th>
						<th>FICHA TECNICA</th>
						<th>PRECIO</th>
					</tr>
				</thead>
				<tbody class="table-body" >
					<?php foreach ($detalles as $detalle) :?>
					<tr>
						<td><?php echo $detalle['Detalle']['letra'];?></td>
						<td class="info-left"><?php echo $detalle['Detalle']['descripcion'];?></td>
						<td><?php echo $detalle['Detalle']['superficie'];?></td>
						<td><?php echo $html->link('Ver Archivo',array('action'=>'../files/uploads/'.$detalle['Detalle']['archivo']),array('escape' => false));?></td>
						<td><?php echo $html->link('Consultar',array('action'=>'../contacto/index'),array('escape' => false));?></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>