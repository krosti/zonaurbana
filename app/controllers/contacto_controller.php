<?php
class ContactoController extends AppController {
	var $name = 'Contacto';
	var $helpers = array('Session', 'Html', 'Form');
	var $components = array('Email');
	
	function index() {
			$this->set('title_for_layout', 'Contacto');
			if (!empty($this->data)) 
			{
				$Info = $this->data;
				$this->Contact->set($this->data);
					if ($this->Contact->validates()) {
						$this->Email->to = 'bahiajugos@speedy.com.ar';
						$this->Email->bcc = array('andreslh90@gmail.com'); 
						$this->Email->subject = 'Consulta desde el Sitio Web | MODDE.';
						$this->Email->from = $Info['Contact']['nombre'];
						$this->Email->template = 'default';
						$this->Email->sendAs = 'html';									
						if($this->Email->send()){
							$this->Session->setFlash('Su mensaje ha sido enviado correctamente');							
						}
					}
				unset($this->data['Contact']);
			}
	}
}
?>