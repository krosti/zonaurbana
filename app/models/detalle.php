<?php
class Detalle extends AppModel {
    var $belongsTo = 'Proyecto';
    var $actsAs = array(
    'MeioUpload' => array(
        'archivo' => array(
            'dir' => 'files{DS}uploads',
            'create_directory' => true,
            'allowedMime' => array('application/pdf', 'application/msword', 'application/vnd.ms-powerpoint', 'application/vnd.ms-excel',
									'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/rtf', 'application/zip'),
            'allowedExt' => array('.pdf', '.doc', '.ppt', '.xls', '.xlsx', '.rtf', '.zip'),
            'default' => false,
         )
       )
    );
	
}
?>