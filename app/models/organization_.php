<?php
class Organization extends AppModel{
    public $name = 'Organization';
    public $useTable = "organizations";


    var $belongsTo = array(
        'Division'=>array(
            'className'     => 'Division',
            'foreignKey'    => 'division_code',
        ),
        'District'=>array(
            'className'     => 'District',
            'foreignKey'    => 'district_code',
        ),
        'OrganizationType'=>array(
            'className'     => 'OrganizationType',
            'foreignKey'    => 'org_type_id',
        ),
		'Upazilla'=>array(
            'className'     => 'Upazilla',
            'foreignKey'    => 'upazila_code',
        ),

    );
}
?>