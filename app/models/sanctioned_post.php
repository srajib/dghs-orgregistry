<?php
class SanctionedPost extends AppModel{
	public $name = 'SanctionedPost';
	public $useTable = "new_tbl_sanctioned_posts";
	public $primaryKey = 'iid';
	
	var $belongsTo = array(
	'Organization' => array(
	'className' => 'Organization',
	'foreignKey' => 'organization_id'
	),
	'Department' => array(
	'className' => 'Department',
	'foreignKey' => 'department_id'
	),
	'Designation' => array(
	'className' => 'Designation',
	'foreignKey' => 'designation_id'
	),
    ); 
	
	
	
}
?>