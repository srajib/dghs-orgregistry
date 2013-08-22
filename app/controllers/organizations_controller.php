<?php 
class OrganizationsController extends AppController
{
	
	public $name    = 'Organizations';
	public $helpers = array('Paginator');

    public function testAction()
    {
        $this->layout = 'template';
    }
	
	
}