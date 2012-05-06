<?php
class AdminsController extends AppController {

	var $name = 'Admins';
	var $helpers = array('Html', 'Form','Session');
	var $layout = 'backend';
	/**
	 * Callback
	 */
	function beforeFilter() {}
	
	/**
	 * Login action
	 */
 
	function admin_login() {	
		if (!empty($this->data)){	
			$someone = $this->Admin->findByUsername($this->data['Admin']['username']);
			if(!empty($someone['Admin']['password']) && $someone['Admin']['password'] == $this->data['Admin']['password']){		
					$this->Session->write('Admin', $someone['Admin']);
					$this->Session->setFlash('Bienvenido!  '.$this->data['Admin']['username'],'default',array('class'=>'flash_good'));
					$this->redirect('/admin');
			}
			else{
				if (!$someone){
					$this->Session->setFlash('Usuario Inexistente!','default',array('class'=>'flash_bad'));
				}else{			
					$this->Session->setFlash('Password Incorrecto!','default',array('class'=>'flash_bad'));
				}
			}
		}		
	}
	
	function admin_logout(){		
		$this->Session->delete('Admin');
		$this->redirect('/admin');
}

	function index() {
		$this->Admin->recursive = 0;
		$this->set('admins', $this->paginate());
	}

	function admin_index() {
		$this->Admin->recursive = 0;
		$this->set('admins', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Usuario incorrecto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('admin', $this->Admin->read(null, $id));
	}
	
	function admin_add() {
		if (!empty($this->data)) {
			$this->Admin->create();
			if ($this->Admin->save($this->data)) {
				$this->Session->setFlash(__('El usuario fue cargado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo cargar el usuario.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Usuario incorrecto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Admin->save($this->data)) {
				$this->Session->setFlash(__('El usuario fue editado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo editar el usuario.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Admin->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Usuario incorrecto', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Admin->delete($id)) {
			$this->Session->setFlash(__('El usuario fue eliminado', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('No se pudo eliminar el usuario', true));
		$this->redirect(array('action' => 'index'));
	}
}
