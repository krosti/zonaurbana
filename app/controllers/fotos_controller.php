<?php
class FotosController extends AppController {
	var $name = 'Fotos';
	var $uses = array('Foto','Proyecto');
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->layout = 'backend';
		$this->Foto->recursive = 0;
		$this->set('fotos', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout = 'backend';
		if (!$id) {
			$this->Session->setFlash(__('Foto Invalida', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('foto', $this->Foto->read(null, $id));
	}

	function admin_add() {
		$this->layout = 'backend';
		if (!empty($this->data)) {
			$this->Foto->create();
			if ($this->Foto->save($this->data)) {
				$this->Session->setFlash(__('La foto ha sido guardada.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		$proyectos = $this->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

	function admin_edit($id = null) {
		$this->layout = 'backend';
		$this->Foto->set('id',$id);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Foto Invalida', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Foto->save($this->data)) {
				$this->Session->setFlash(__('La Foto ha sido guardada.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Foto->read(null, $id);
		}
		$this->set('ruta',$id);
		$proyectos = $this->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id de Foto Invalida', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Foto->delete($id)) {
			$this->Session->setFlash(__('Foto borrada.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Foto NO borrada.', true));
		$this->redirect(array('action' => 'index'));
	}
}
