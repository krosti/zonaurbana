<?php

class PSlidersController extends AppController {
	var $name = 'PSliders';
	var $components = array ('Session'); // Added*/ 
	var $helpers = array('Html', 'Form', 'Javascript','Session'/*,'Pagination'*/);

    var $paginate = array(
    	 'PSlider' => array (
        	 'limit' => 5,        
        	 'order' => array('PSlider.id' => 'asc')
        )
    );

	//var $components = array('Uploader.Uploader');
	//var $components = array('Upload');
	
	function admin_index(){
		$this->layout = 'backend';
		$this->PSlider->recursive = 0;
		$this->set('psliders', $this->paginate());
	}
	function admin_add() {
		$this->layout = 'backend';
		if (!empty($this->data)) {
			$this->PSlider->create();
			if ($this->PSlider->save($this->data)) {
				$this->Session->setFlash(__('El slider ha sido guardado.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	function admin_edit($id = null) {
		$this->layout = 'backend';
		$this->set('psliders', $this->PSlider->read(null, $id));
		$this->PSlider->id = $id;
		if (empty($this->data)) {
			$this->data = $this->PSlider->read();
		} else {
			
			if ($this->PSlider->save($this->data)) {
				$this->Session->setFlash('El slider fue actualizado correctamente.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function admin_delete($id) {
		$this->PSlider->delete($id);
		$this->Session->setFlash('El slider: '.$id.' fue borrado.');
		$this->redirect(array('action'=>'index'));
	}
		

	function index() {
		
		$this->set('locales', $this->Locale->find('all'));
		$data = $this->paginate('Locale');    $this->set('locales', $data);
	}
}

?>