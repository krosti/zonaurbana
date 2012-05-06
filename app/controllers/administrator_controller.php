<?php

class AdministratorController extends AppController {

    var $name = 'Administrator';
    var $uses = array();
    var $layout = 'backend';

    function beforeFilter() {
        //Si no ingreso por el formulario de login y no esta logueado => redirecciona.		
		$admin = $this->Session->read('Admin');		
		if (!$this->data && is_null($admin)) {
			$this->Session->setFlash('Solo usuarios privilegiados pueden acceder a esta secci&oacute;n.');
			$this->redirect("/admin/admins/login");
        }		
    }

    function index() {
        if ($this->data != null) {
            //Ingreso datos en el formulario.
            if ($this->Usuarios->login($this->data['User']['username'], $this->data['User']['password'])) {
                $this->Session->setFlash('Bienvenido ' . $this->Session->read('User.name') . " !");
                $this->redirect("/admin/");
            } else {
                $this->Session->setFlash('Usuario o contraseña incorrectos. Por favor verifiquelos y vuelva a intentarlo');
                $this->redirect("/admin/users/login");
            }
        }
    }
}
?>