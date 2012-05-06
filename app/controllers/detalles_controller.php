<?php
class DetallesController extends AppController {
	var $name = 'Detalles';
	var $uses = array('Detalle','Proyecto');
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->layout = 'backend';
		$this->Detalle->recursive = 0;
		$this->set('detalles', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout = 'backend';
		if (!$id) {
			$this->Session->setFlash(__('Detalle Invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('detalle', $this->Detalle->read(null, $id));
	}

	function admin_add() {
		$this->layout = 'backend';
		if (!empty($this->data)) {
			$this->Detalle->create();
			if ($this->Detalle->save($this->data)) {
				$this->Session->setFlash(__('El detalle ha sido guardado.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		$proyectos = $this->Proyecto->find('list');
		$this->set(compact('proyectos'));
	}

	function admin_edit($id = null) {
		$this->layout = 'backend';
		$this->Detalle->set('id',$id);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Detalle Invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Detalle->save($this->data)) {
				$this->Session->setFlash(__('El Detalle ha sido guardado.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Detalle->read(null, $id);
		}
		$this->set('ruta',$id);
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id de Detalle Invalido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Detalle->delete($id)) {
			$this->Session->setFlash(__('El Detalle ha sido eliminado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Detalle NO ha sido eliminado.', true));
		$this->redirect(array('action' => 'index'));
	}
}
