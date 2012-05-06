<?php
class ProyectosController extends AppController {
	var $name = 'Proyectos';
	var $uses = array('Proyecto','Categoria','Detalle','Foto');
	var $helpers = array('Javascript','Html','Form');

	function index(){
		$this->set('pcontruccion', $this->Proyecto->find('all', array('order'=>array('Proyecto.id'=>'ASC'),'conditions'=>array('Proyecto.categoria_id'=>'1'))));
		$this->set('pentregados', $this->Proyecto->find('all', array('order'=>array('Proyecto.id'=>'ASC'),'conditions'=>array('Proyecto.categoria_id'=>'2'))));
		$this->set('prealizar', $this->Proyecto->find('all', array('order'=>array('Proyecto.id'=>'ASC'),'conditions'=>array('Proyecto.categoria_id'=>'3'))));
	}

	function view($id){
		$this->Proyecto->id = $id;
		$this->set('proyecto', $this->Proyecto->read() );
		$this->set('detalles', $this->Detalle->find('all') );
		$fotos=$this->set('detalles', $this->Detalle->find('all', array('order'=>array('Detalle.id'=>'ASC'),'conditions'=>array('Detalle.proyecto_id'=>$id) )));
		$this->set('fotos', $this->Proyecto->find('all') );
		$fotos=$this->set('fotos', $this->Foto->find('all', array('order'=>array('Foto.orden'=>'ASC'),'conditions'=>array('Foto.proyecto_id'=>$id) )));
	}
	function admin_index() {
		$this->layout = 'backend';
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout = 'backend';
		if (!$id) {
			$this->Session->setFlash(__('Proyecto Invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proyecto', $this->Proyecto->read(null, $id));
	}

	function admin_add() {
		$this->layout = 'backend';
		if (!empty($this->data)) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->data)) {
				$this->Session->setFlash(__('El proyecto ha sido guardado.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		$categorias = $this->Categoria->find('list');
		$this->set(compact('categorias'));
	}

	function admin_edit($id = null) {
		$this->layout = 'backend';
		$this->Proyecto->set('id',$id);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Proyecto Invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proyecto->save($this->data)) {
				$this->Session->setFlash(__('El proyecto ha sido guardado.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proyecto->read(null, $id);
		}
		$this->set('ruta',$id);
		$categorias = $this->Categoria->find('list');
		$this->set(compact('categorias'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id de Proyecto Invalido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Proyecto->delete($id)) {
			$this->Session->setFlash(__('ElProyecto ha sido eliminado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El Proyecto NO ha sido eliminado.', true));
		$this->redirect(array('action' => 'index'));
	}
}
