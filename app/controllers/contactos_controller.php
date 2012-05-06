<?php
class ContactosController extends AppController {
	var $name = 'Contactos';
	var $uses = 'Contacto';
	var $helpers = array('Session', 'Html', 'Form');
	var $components = array('Email');
	
	function index() {
			$this->set('title_for_layout', 'Contacto');
			if (!empty($this->data)) 
			{
				$Info = $this->data;
				$this->Contacto->set($this->data);
					if ($this->Contacto->validates()) {
						$this->Email->to = 'andreslh90@gmail.com.ar';
						$this->Email->bcc = array('andreslh90@gmail.com'); 
						$this->Email->subject = 'Consulta desde el Sitio Web | Zona Urbana.';
						$this->Email->from = $Info['Contacto']['nombre'];
						$this->Email->template = 'default';
						$this->Email->sendAs = 'html';									
						if($this->Email->send()){
							$this->Session->setFlash('Su mensaje ha sido enviado correctamente');							
						}
					}
				unset($this->data['Contacto']);
			}
	}
}
?>