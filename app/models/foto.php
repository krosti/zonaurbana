<?php
class Foto extends AppModel {
    var $belongsTo = 'Proyecto';
	var $actsAs = array(
    'MeioUpload' => array(
        'imagen' => array(
            'dir' => 'img{DS}fotos{DS}',
            'create_directory' => false,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png', '.gif'),
			'zoomCrop' => true,
            'default' => 'default.jpg',
        )
    )
	);
}
?>