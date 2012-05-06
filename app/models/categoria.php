<?php
class Categoria extends AppModel {
	var $hasMany = 'Proyecto';
	var $displayField = 'descripcion';
}
?>