<?php
class Contacto extends AppModel {
    var $useTable = false;
    var $_schema = array(
        'nombre'	=>array('type'=>'string', 'length'=>100), 
        'email'		=>array('type'=>'string', 'length'=>100),
		'telefono'	=>array('type'=>'string', 'length'=>100),
		'asunto'	=>array('type'=>'string', 'length'=>100),
        'mensaje'	=>array('type'=>'text')
    );
	var $validate = array(
    'nombre' => array(
        'rule'=>'notEmpty', 
        'message'=>'Se requiere un nombre' 
		),
	'email' => array(
		'email2' => array(		
			'rule'=>'notEmpty', 
			'message'=>'Se requiere un email',
			'last' => true
			),
		'email3' => array(			
			'rule' => array('email', true),
			'message' => 'Por favor indique una direccion de correo electronico valida.'
			), 	
		),		
    'mensaje' => array(
        'rule'=>'notEmpty',
        'message'=>'Por favor dejenos un mensaje sobre que desea consultarnos' 
		)
	);
}
?>