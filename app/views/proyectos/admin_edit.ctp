<?php
	echo $javascript->link(array('proyectos'));
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div class="categorias form">
<?php echo $this->Form->create('Proyecto',array('type' => 'file','url' => 'edit/'.$ruta));?>
	<fieldset>
		<legend><?php __('Editar Proyecto'); ?></legend>
		<?php
		echo $this->Form->input('titulo',array('label'=>'Titulo: '));
		echo $this->Form->input('descripcion',array('label'=>'Descripcion: ','rows' => '8'));
		echo $this->Form->input('categoria_id');
		echo '<div id="mapa" style="width: 350px;height: 350px;position:absolute;margin-left: 500px;"></div>';
		echo $this->Form->input('direccion',array('label'=>'Direccion: ', 'id'=>'dir'));
		echo $this->Form->input('codpostal',array('label'=>'Cod. Postal: ', 'id'=>'codpos'));
		echo $this->Form->input('ciudad',array('label'=>'Ciudad: ', 'id'=>'ciudad'));
		echo $this->Form->input('pais',array('label'=>'Pais: ', 'id'=>'pais'));
		echo $this->Form->input('latitud',array('label'=>'Latitud: ','style'=>'display:none', 'id'=>'lat','readonly'=>"readonly"));
		echo $this->Form->input('longitud',array('label'=>'Longitud: ','style'=>'display:none', 'id'=>'long','readonly'=>"readonly"));
		echo $this->Form->input('barrio',array('label'=>'Barrio: '));
		echo $this->Form->input('entrega',array('label'=>'Entrega (XXXX): '));
		echo $this->Form->input('texto',array('rows' => '8','label'=>'Texto Largo: '));
		echo $this->Form->input('imagen', array('type' => 'file','label'=>'Imagen: ')).'<br/>';
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
		"/admin/proyectos",
		array("title"=>"","escape"=>false)
		);
?>
</div>

<script>
$(document).ready(function (){
	cambiar_marca();
	var options = {
			    zoom: 1,
				size:(350,350),
				mapTypeControl: false,
	    		navigationControl: false,
			    center: new google.maps.LatLng(40.463667, -9.74922),
			    mapTypeId: google.maps.MapTypeId.ROADMAP
				};
	 map = new google.maps.Map(document.getElementById('mapa'), options);
	 arrayMarcas = new Array();

	function cambiar_marca() {
		$('#lat').val('');
		$('#long').val('');
		address = $('#dir').val()+", "+$('#codpos').val()+", "+$('#ciudad').val()+", "+$('#pais').val();
		geocoder = new google.maps.Geocoder();
		if (geocoder) {
		    geocoder.geocode( { 'address': address}, function(results, status) {
			    if (status == google.maps.GeocoderStatus.OK) {
			    	 if (arrayMarcas.length > 0) {
			      			arrayMarcas[0].setMap(null);
			  		}
			    	arrayMarcas[0] = new google.maps.Marker({
		              	map: map, 
		              	position: results[0].geometry.location,
	    				cursor: 'pointer', 
	    				draggable: false
	          		});
	          		map.setZoom(15);
	          		map.setCenter(results[0].geometry.location);
			    	$lat = results[0].geometry.location.lat();
			    	$lng = results[0].geometry.location.lng();
			    	$('#lat').val($lat).slideDown();
			    	$('#long').val($lng).slideDown();
			    }
		   });
		};
	};

	$('#dir').blur(function(){
		cambiar_marca();
	});
	$('#codpos').blur(function(){
		cambiar_marca();
	});
	$('#ciudad').blur(function(){
		cambiar_marca();
	});
	$('#pais').blur(function(){
		cambiar_marca();
	});
});
</script>