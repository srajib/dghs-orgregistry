<?php
class Union extends AppModel{
	public $useTable = 'unions';
	public $name = 'Union';
	public $primaryKey = 'union_id';
	
	var $hasMany = array('Organization'=>array(
        'className' => 'Organization'
    ));
}
?>