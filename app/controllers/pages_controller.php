<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $uses = 'PSlider';
	var $helpers = array('Javascript','Html','Form');

	function home() {
		$this->set('psliders', $this->PSlider->find('all', array('order'=>array('PSlider.id'=>'ASC'))));
	}

	function contacto() {

	}

}
?>