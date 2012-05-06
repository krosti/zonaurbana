<?php

class AppController extends Controller {
	var $helpers = array('Javascript','Html','Form','Session');
	
	function beforeFilter() {
		// if an admin route is requested and not logged in
		$admin = $this->Session->read('Admin');		
		if(isset($this->params['admin']) && $this->params['admin'] && is_null($admin)) {
		
			// set Flash and redirect to login page
			$this->Session->setFlash('Necesita estar logueado para realizar esta accion.','default',array('class'=>'flash_bad'));
			$this->redirect("/admin/admins/login");
		}
	}

}
?>