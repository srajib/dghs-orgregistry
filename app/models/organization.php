<?php
class Organization extends AppModel{
    public $name = 'Organization';
    //public $useTable = "organizations";
	public $primaryKey = "organization_id";


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
		'Union'=>array(
            'className'     => 'Union',
            'foreignKey'    => 'union_code',
        ),
		'Agency'=>array(
            'className'     => 'Agency',
            'foreignKey'    => 'agencie_code',
        ),
		'OrgFunction'=>array(
            'className'     => 'OrgFunction',
            'foreignKey'    => 'org_func_id',
        ),
		'Ownership'=>array(
            'className'     => 'Ownership',
            'foreignKey'    => 'ownership_id',
        ),
		'OrgLevel'=>array(
            'className'     => 'OrgLevel',
            'foreignKey'    => 'org_level_id',
        ),

    );
}
?>