<?php
class PSlider extends AppModel {
    var $name = 'PSlider';
	var $actsAs = array(
	        'MeioUpload' => array(
	            'imagen' => array(
	                'dir' => 'img{DS}slider',
	                'create_directory' => true,
	                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	                'default' => 'default.jpg',
	            )
	        )
	    );
  
}

?>