<?php
class Proyecto extends AppModel {
    var $hasMany = array('Detalle','Foto');	

    var $actsAs = array(
    'MeioUpload' => array(
        'imagen' => array(
            'dir' => 'img{DS}proyectos{DS}',
            'create_directory' => false,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png', '.gif'),
			'zoomCrop' => true,
            'default' => 'default.jpg',
        )
    )
	);
	var $displayField = 'titulo';
	var $belongsTo = 'Categoria';
}
?>