<?php
class AppController extends Controller
{
	/*var $components = array('Auth' => array(
									'authorize' => 'controller',
									'loginAction' => array('controller' => 'users', 'action' => 'login')
								),
								'Session', 
           'RequestHandler'
							);*/
							
	var $helpers = array('Js', 'Html', 'Form', 'Session');
	
/*	function beforeFilter()
	{
	
		$this->Auth->allow('getorgtype',
		'divreport','gallery','display','keywordReport',
		'bangladesh','report','search','division','district',
		'upazilla','getunion','requestNeworg','org_details',
		'reports','getdistricts','getreport','admin','edit','admindivision','admindistrict',
		'adminupazilla');
	
		//$this->Auth->allow('getorgtype','testAction','divreport','gallery','display','keywordReport','bangladesh','report','search','division','district','upazilla','getunion','requestNeworg','org_details','reports','getdistricts','getreport','admin','edit','admindivision','admindistrict','adminupazilla');
	}
	*/

	/*function isAuthorized()
  	{
		if( $this->Auth->User('group_id') != '1' && $this->Auth->User('group_id') != '2' && $this->Auth->User('group_id') != '3')
		{
			$this->Auth->deny($this->action);
		}
		else
		{
			return true;
		}
	}
	*/



}
?>