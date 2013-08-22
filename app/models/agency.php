<?php
class Agency extends AppModel{
    public $name = 'Agency';
    public $useTable='agency_code';
    var $primaryKey = 'id';

   var $hasMany = array('Organization'=>array(
        'className'     => 'Organization',
    ));


}
?>