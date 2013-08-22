<?php 
class PagesController extends AppController{
	
	public $name = 'Pages';
	public $helpers = array('Paginator');
	

        public function bangladeshnew(){
	    set_time_limit(4000);
        $this->layout = "admin_layout";
        $this->loadModel('Organization');

        $this->loadModel('Division');
        $this->loadModel('District');
        $this->paginate['limit'] = 200;
        $AllCode=$this->paginate('Organization');
        $this->set('AllCode',$AllCode);
	
	}
	
	
	function divisionnew($id = null){
		
		$this->layout = 'admin_layout';
		$this->loadModel('Organization');
		$this->loadModel('District');
		$this->loadModel('Division');


        $this->paginate['limit'] = 200;
        $DivOrg=$this->paginate('Organization', array("Organization.division_code LIKE" =>  $id));
        $this->set('DivOrg',$DivOrg);

        $div = $this->Organization->query("SELECT * FROM divisions WHERE division_id='$id'");
        $this->set('div',$div);

					
	}
	
	
	
	public function addorg(){
		
	$this->layout = "admin_layout";
	$this->loadModel('OrganizationType');
	$this->loadModel('Organization');
	$this->loadModel('District');
	$this->loadModel('Division');
	$this->loadModel('Upazilla');
	
	//fetching organization types
	$orgtype = $this->OrganizationType->find('list');
	$this->set('orgtype',$orgtype);
	
	//fetching divisions
	$div = $this->Division->find('list');
	$this->set('div',$div);
	
	//fetching districts
	$dist = $this->District->find('list');
	$this->set('dist',$dist);
	
	//fetching upazilla
	$upa = $this->Upazilla->find('list');
	$this->set('upa',$upa);
	
	$orgcode = $this->Organization->query("SELECT organization_code FROM organizations ORDER BY organization_id DESC LIMIT 0,1");
	$this->set('orgcode',$orgcode);
	
	if (!empty($this->data)) {
                    //if($this->data['User']['password'] == $this->data['User']['password_retype']){
                        $this->Organization->create();
                        if ($this->Organization->save($this->data)) {
                                $this->Session->setFlash(__('The Organization has been saved', true), 'default' ,array('class' => 'success'));
                                $this->redirect(array('action' => 'add'));
                        } else {
                                $this->Session->setFlash(__('The Organization could not be saved. Please, try again.', true));
                                //$this->data['User']['password'] = NULL;
                        }
					}	
		
	}
	
	
	
	
	public function display() {
	//set_time_limit(20000);
	$this->layout = "admin_layout";
	$this->loadModel('Organization');
	$AllCode=$this->Organization->query('select * from organizations,divisions,districts,upazillas,organization_type where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and upazillas.upazilla_id=organizations.upazila_code and organization_type.type_id=organizations.org_type_id');
	
    $this->set('AllCode',$AllCode);
	}
	
	
	public function officevehicle($id=null)
	{
	$this->layout = 'admin_layout';
	$this->loadModel('Organization');
	$this->loadModel('District');
	$this->loadModel('Division');
	$this->loadModel('Upazilla');
	$this->set('id',$id);
	}
	
	public function officevehicleprint($id=null)
	{
	$this->layout = '';
	$this->loadModel('Organization');
	$this->loadModel('District');
	$this->loadModel('Division');
	$this->loadModel('Upazilla');
	$this->set('id',$id);
	}
	
	
	public function org_details($id=null)
	{
	$this->layout = 'admin_layout';
	$this->loadModel('Organization');
	$this->loadModel('District');
	$this->loadModel('Division');
	$this->loadModel('Upazilla');
	
	//$AllCode=$this->Organization->query("select * from organizations,divisions,districts,upazillas,organization_type where 
	//organizations.organization_id='$organization_id' and
	//divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and //upazillas.upazilla_id=organizations.upazila_code and organization_type.type_id=organizations.org_type_id");
	$AllCode=$this->Organization->query("SELECT organizations.organization_id, organizations.organization_code, organizations.title,organizations.org_type_id,org_types.type_name,agency_code.id,agency_code.agency,organizations.org_level_id,org_level.level,organizational_function.id,organizational_function.org_function,divisions.division_code, divisions.name, districts.district_code,districts.name,upazillas.upazila_code, upazillas.name,organizations.email,organizations.log,organizations.lat, organizations.fax
 FROM organizations
 LEFT JOIN org_types ON organizations.org_type_id=org_types.type_id
 LEFT JOIN agency_code ON organizations.agencie_code=agency_code.id 
 LEFT JOIN org_level ON organizations.org_level_id=org_level.id 
 LEFT JOIN organizational_function ON organizations.org_func_id=organizational_function.id 
 LEFT JOIN divisions ON organizations.division_code=divisions.division_id
 LEFT JOIN districts ON organizations.district_code=districts.district_id
 LEFT JOIN upazillas ON organizations.upazila_code=upazillas.upazilla_id
 where organizations.organization_id='$id'
");


	$this->set('id',$id);
    $this->set('AllCode',$AllCode);
	

	
	}
	
	
	
	
	public function import() {
	$this->layout = "admin_layout";
	$this->loadModel('Bbscode');
	$messages = $this->Bbscode->import('bbs.csv');
    $this->set('messages', $messages);
	
	}
	
	
	
     public function admin_dashboard() {
	 $this->layout = "admin_layout";
	 //$this->redirect('showdist.php?div=$div');
	
	}
	
	
	public function requestNeworg() {
	 $this->layout = "admin_layout";
	}
	
	
	
	
	public function reports() {
	 set_time_limit(4000);
	 
	 $this->layout = "admin_layout";
	 
	 $this->loadModel('Organization');
     $this->loadModel('OrganizationType');
	 $this->loadModel('District');
	 $this->loadModel('Division');
	 $this->loadModel('Upazilla');
	 
	 $divisions = $this->Division->find('list');
	 $this->set('divisions',$divisions);
	 
	 $districts = $this->District->find('list');
	 $this->set('districts',$districts);
	 
	 $upazillas = $this->Upazilla->find('list');
	 $this->set('upazillas',$upazillas);

     $orgtypes = $this->OrganizationType->find('list');
     $this->set('orgtypes',$orgtypes);
	}
	
	
	
	function getdistricts(){
		$this->layout = false;            
        $this->loadModel('Organization');
	    $this->loadModel('District');
	    $this->loadModel('Division');
	    $this->loadModel('Upazilla');
		
		if($this->data) {
        //$districts[NULL] = 'Select District';
	    $districts = $this->District->find('all', array('conditions'=>array('District.division_id'=>$this->data['Organization']['division']),'fields'=>array('District.district_id','District.name'),'order'=>'District.name asc'));
		$this->set('districts',$districts);
		
		}else{
		$districts[NULL] = '--Select District--';
		$this->set('districts',$districts);
		$this->Session->setFlash(__("No Division Found"));

		}
	    	
     }
	 
	 
	 function getorgtype(){

        $this->layout = false;
	    $this->loadModel('Organization');
	    $this->loadModel('District');
	    $this->loadModel('Division');
	    $this->loadModel('Upazilla');
        $this->loadModel('OrganizationType');

        if($this->data) {
        //$orgtypes[NULL] = '--Select--';
		$orgtypes = $this->Organization->find('all',array('conditions'=>array('Organization.district_code'=>$this->data['Organization']['district']),'fields'=>array('OrganizationType.type_id','OrganizationType.name'),'order' => 'OrganizationType.name'));
		$this->set('orgtypes',$orgtypes);
        /* print_r($orgtypes);
         exit;*/
        }
     }

    function getreport($OrganizationDivision=null,$OrganizationDistrict=null,$OrganizationUpazilla=null,$OrganizationOrganizationType=null){

        $this->layout = false;
        $this->loadModel('Organization');
        $this->loadModel('District');
        $this->loadModel('Division');
        $this->loadModel('Upazilla');

        if(!empty($OrganizationDivision) && !empty($$OrganizationDistrict)) {
            //$upazillas[NULL] = '--Select--';
            $getorgs = $this->Organization->query("SELECT * FROM organizations WHERE division_code='$OrganizationDivision' AND district_code='$OrganizationDistrict'");
            $this->set('getorgs',$getorgs);
            /*print_r($upazillas);
            exit;*/
        }
        else
        {
            $getorgs = $this->Organization->query("SELECT * FROM organizations");
            $this->set('getorgs',$getorgs);
        }
    }
	
	
	
     public function showdis($div) {
	 $this->layout = "admin_layout";
	 $this->redirect('showdist.php?div=$div');
	
	}
	
	
	
	
	public function geohierarchy() {
	$this->layout = "admin_layout";
	
	}
	
    function importupload() {
		$messages = $this->Post->import('posts.csv');
        $this->set('messages', $messages);
	}
	
	function division($id = null){
		
		$this->layout = 'admin_layout';
		$this->loadModel('Organization');
		$this->loadModel('District');
		$this->loadModel('Division');


        $this->paginate['limit'] = 200;
        $DivOrg=$this->paginate('Organization', array("Organization.division_code LIKE" =>  $id));
        $this->set('DivOrg',$DivOrg);

        $div = $this->Organization->query("SELECT * FROM divisions WHERE division_id='$id'");
        $this->set('div',$div);
	
         $this->set('divID',$div[0]['divisions']['division_id']);

		/*if(!$id){
			$this->Session->setFlash(__("Incorrect Division Selected"));
			$this->redirect(array('action' => 'index'));
		}else{

			
			
			$DivOrg = $this->Organization->query("select * from organizations,divisions,districts,organization_type,upazillas where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organization_type.type_id=organizations.org_type_id and organizations.division_code='$id' and upazillas.upazilla_id=organizations.upazila_code");
			
			$this->set('DivOrg',$DivOrg);
		}*/
					
	}
	
	
	
	function district($id = null,$divid = null){
		
		$this->layout = 'admin_layout';
		$this->loadModel('Organization');
		$this->loadModel('District');
		$this->loadModel('Division');

        $dist = $this->Organization->query("SELECT * FROM districts WHERE district_id='$id'");
        //$this->set('dist',$dist);
        $this->set('distname',$dist[0]['districts']['name']);
        $this->set('disid',$dist[0]['districts']['district_id']);

        $div = $this->Organization->query("SELECT * FROM divisions WHERE division_id='$divid'");
        $this->set('divname',$div[0]['divisions']['name']);
        $this->set('divsid',$div[0]['divisions']['division_id']);


        $this->paginate['limit'] = 200;
        $DistOrg=$this->paginate('Organization', array("Organization.division_code LIKE" =>  $divid, array("Organization.district_code LIKE" =>  $id)));
        $this->set('DistOrg',$DistOrg);

        $div = $this->Organization->query("SELECT * FROM divisions WHERE division_id='$id'");
        $this->set('div',$div);


		/*if(!$id && !$divid){
			$this->Session->setFlash(__("Incorrect Devision Selected"));
			$this->redirect(array('action' => 'index'));
		}else{
			

			
			$DistOrg = $this->Organization->query("select * from organizations,divisions,districts,organization_type,upazillas where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organization_type.type_id=organizations.org_type_id and organizations.district_code='$id' and upazillas.upazilla_id=organizations.upazila_code");
			
			$this->set('DistOrg',$DistOrg);
		}*/
		
		
				
	}
	
	
	
	
	function upazilla($id = null,$disid = null,$divid = null){
		
		$this->layout = 'admin_layout';
		$this->loadModel('Organization');
		$this->loadModel('District');
		$this->loadModel('Division');
		$this->loadModel('Upazilla');
		
		if(!$id && !$divid){
			$this->Session->setFlash(__("Incorrect Devision Selected"));
			$this->redirect(array('action' => 'index'));
		}else{
			
			//fetching district
			$dist = $this->Organization->query("SELECT * FROM districts WHERE district_id='$disid'");
			//$this->set('dist',$dist);
			$this->set('distname',$dist[0]['districts']['name']);
			$this->set('disid',$dist[0]['districts']['district_id']);
	
			$div = $this->Organization->query("SELECT * FROM divisions WHERE division_id='$divid'");
			$this->set('divname',$div[0]['divisions']['name']);
			$this->set('divsid',$div[0]['divisions']['division_id']);
			
			$upa = $this->Organization->query("SELECT * FROM upazillas WHERE upazilla_id='$id'");
			$this->set('upaname',$upa[0]['upazillas']['name']);
			$this->set('upaid',$upa[0]['upazillas']['upazilla_id']);
			
			
			//$UpaOrg = $this->Organization->query("select * from organizations,divisions,districts,organization_types,upazillas where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organization_types.type_id=organizations.org_type_id and organizations.upazila_code='$id' and upazillas.upazilla_id=organizations.upazila_code");
			
			//$this->set('UpaOrg',$UpaOrg);
			
			
		$this->paginate['limit'] = 200;
        $UpaOrg=$this->paginate('Organization', array("Organization.division_code LIKE" =>  $divid, array("Organization.district_code LIKE" =>  $disid, array("Organization.upazila_code LIKE" =>  $id))));
        $this->set('UpaOrg',$UpaOrg);
		}
	}
	
	


    public function bangladesh(){
        set_time_limit(4000);
        $this->layout = "admin_layout";
        $this->loadModel('Organization');

        /*
        $AllCode=$this->Organization->query('select * from organizations,divisions,districts,organization_type where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organization_type.type_id=organizations.org_type_id');
        */

        $this->loadModel('Division');
        $this->loadModel('District');
        $this->paginate['limit'] = 200;
        $AllCode=$this->paginate('Organization');
        $this->set('AllCode',$AllCode);

    }


	
	public function org_img(){
        set_time_limit(4000);
        $this->layout = "admin_layout";
        $this->loadModel('Organization');

        /*
        $AllCode=$this->Organization->query('select * from organizations,divisions,districts,organization_type where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organization_type.type_id=organizations.org_type_id');
        */

        $this->loadModel('Division');
        $this->loadModel('District');
        $this->paginate['limit'] = 200;
        $AllCode=$this->paginate('Organization');
        $this->set('AllCode',$AllCode);

    }


	
	public function search() {

        $this->layout = "admin_layout";

	}

    public function gallery(){

        $this->layout = 'admin_layout';
        set_time_limit(4000);
        $this->loadModel('Organization');

        $AllCode=$this->Organization->query('select email,title from organizations');

        $this->set('AllCode',$AllCode);

    }
	
      /*function getdistricts(){            
        $this->loadModel('Bbscode');
		
		$districts[NULL] = '--Select--';
		/*$districts += $this->Bbscode->find('all',array('conditions'=>array('Bbscode.division'=>  $this->data['Bbscode']['division']),'fields'=>array('Bbscode.district','Bbscode.district'),'order' => array('Bbscode.district ASC')));*/
		
	    /*if($this->data) {
	    $districts = $this->Bbscode->find('all', array('conditions'=>array('Bbscode.division'=>$this->data['Bbscode']['division']),'fields'=>array('DISTINCT(Bbscode.district) AS TDistrict'),'order'=>'Bbscode.district asc'));
			foreach($districts as $district)

		$distinct_district[$district['Bbscode']['TDistrict']] = $district['Bbscode']['TDistrict'];

	
	
		$this->set('districts', $distinct_district );
		}else
		{$districts[NULL] = '--Select--';
		$districts = $this->Bbscode->find('all', array('fields'=>array('DISTINCT(Bbscode.district) AS TDistrict'),'order'=>'Bbscode.district asc'));
		}
	    	foreach($districts as $district)

		$distinct_district[$district['Bbscode']['TDistrict']] = $district['Bbscode']['TDistrict'];

	
	
		$this->set('districts', $distinct_district );
	*/
		 // $this->render(false);
	
        /*}
        */
        
        
        
	    function getunion(){     

		 $this->loadModel('Bbscode');
         $unions[NULL] = '--Select--';
		$unions += $this->Bbscode->find('list',array('conditions'=>array('Bbscode.upazilla'=>  $this->data['Bbscode']['upazilla']),'fields'=>array('Bbscode.name','Bbscode.name'),'order' => array('Bbscode.name ASC')));
		$this->set(compact('unions'));
        }
	
	
	/*public function addorg() {
		$this->layout = "admin_layout";*/
		//$this->loadModel('Bbscode');
		/*if (!empty($this->data)) {*/
			/*$this->Bbscode->create();
			if ($this->Bbscode->save($this->data)) {
				$this->Session->setFlash(__('The sanctioned post data has been saved', true));
				$this->redirect(array('action'=>'display'));
			} else {
				$this->Session->setFlash(__('The sanctioned post could not be saved.', true));
			}
			*/
		/*}
	}*/
	
	
   function delete($id) {
		$this->layout = "admin_layout";
		$this->loadModel('Bbscode');
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Bbscode', true));
			$this->redirect(array('controller'=>'pages','action'=>'display'));
		}
		if ($this->Bbscode->delete($id)) {
			$this->Session->setFlash(__('Bbscode has been deleted', true));
			$this->redirect(array('controller'=>'pages','action'=>'display'));
		}
	 }

   function edit($id){
   
		$this->layout = "admin_layout";
		$this->loadModel('Bbscode');
		
		if($id){
		$this->data=$this->Bbscode->find('all',array('conditions'=>array('Bbscode.id'=>$id)));
		//print_r($this->data);
		}
		
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Bbscode', true));
			$this->redirect(array('controller'=>'pages','action'=>'display'));
		}
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Bbscode', true));
			$this->redirect(array('action' => 'index'));
		}
	    
		if (!empty($this->data)) {
		
			if ($this->Bbscode->save($this->data)) {
			    $this->Session->setFlash(__('The Bbscode has been saved', true));
				$this->redirect(array('action' => 'index'));
			  
			} else {
				$this->Session->setFlash(__('Bbscode could not be saved.Please, Fill up the highlighted fields properly.', true));
			}
			}
			
		
		if (empty($this->data)) {
			$this->data = $this->Bbscode->read(null,$id);
		}
		
		
	 }






	function divreport(){
        /*print_r($this->data);
        exit;*/

        $this->layout = "admin_layout";
	    set_time_limit(4000);

        $this->loadModel('Organization');
        $this->loadModel('District');
        $this->loadModel('Division');
        $this->paginate['limit'] = 200;




		
		if(!empty($this->data))
        {

            if(empty($this->data['Organization']['district']) && empty($this->data['Organization']['organizationtype']) && !empty($this->data['Organization']['division']))
            {
                $AllCode=$this->paginate('Organization', array("Organization.division_code LIKE" =>  $this->data['Organization']['division']));
                $this->set('AllCode',$AllCode);


                 /* $AllCode=$this->Bbscode->query("SELECT * FROM bbscode
                                         WHERE division='$div'
                                         ORDER BY division asc");

                 $this->set('AllCode',$AllCode);*/
		 
            }
            elseif(empty($this->data['Organization']['organizationtype']) && !empty($this->data['Organization']['district']) && !empty($this->data['Organization']['division']))
            {
                $AllCode=$this->paginate('Organization', array("Organization.division_code LIKE" =>  $this->data['Organization']['division'], "Organization.district_code LIKE" =>  $this->data['Organization']['district']));
                $this->set('AllCode',$AllCode);
            }else
            {
                $AllCode=$this->paginate('Organization', array("Organization.division_code LIKE" =>  $this->data['Organization']['division'], "Organization.district_code LIKE" =>  $this->data['Organization']['district'], "Organization.org_type_id LIKE" =>  $this->data['Organization']['organizationtype']));
                $this->set('AllCode',$AllCode);
            }
        }
        else
        {

        $AllCode=$this->paginate('Organization');
        $this->set('AllCode',$AllCode);

	   }
	 }





	 function disReport($BbscodeDistrict=null)
	{
	    set_time_limit(4000);

		$this->layout="report_layout";
	    $this->loadModel('Bbscode');
		$this->set('AllCode','');
		
		if(!empty($BbscodeDistrict)){

		 $AllCode=$this->Bbscode->query("SELECT * FROM bbscode 
							     WHERE district='$BbscodeDistrict' ORDER BY district asc
							     ");	
								 
		 $this->set('AllCode',$AllCode);
		 
       }else
	   {
	     $AllCode=$this->Bbscode->query("SELECT * FROM bbscode 
							     ORDER BY division asc
							     ");	
								 
		 $this->set('AllCode',$AllCode);
	   }
	}

	 function upazillaReport($BbscodeUpazilla=null)
	 {
	    set_time_limit(4000);

		$this->layout="report_layout";
	    $this->loadModel('Bbscode');
		$this->set('AllCode','');
		
		if(!empty($BbscodeUpazilla)){

		 $AllCode=$this->Bbscode->query("SELECT * FROM bbscode 
							     WHERE upazilla='$BbscodeUpazilla' ORDER BY upazilla asc
							     ");	
								 
		 $this->set('AllCode',$AllCode);
		 
       }else{
	     $AllCode=$this->Bbscode->query("SELECT * FROM bbscode 
							     ORDER BY division asc
							     ");	
								 
		 $this->set('AllCode',$AllCode);
	   
	   }
	}
	
	function unionReport($BbscodeUnion=null)
	 {
	    set_time_limit(4000);

		$this->layout="report_layout";
	    $this->loadModel('Bbscode');
		$this->set('AllCode','');
		
		if(!empty($BbscodeUnion)){

		 $AllCode=$this->Bbscode->query("SELECT * FROM bbscode WHERE name='$BbscodeUnion'");	
								 
		 $this->set('AllCode',$AllCode);
		
		 
       }
	}
	
	public function keywordReport($BbscodeKeyword) {
	$this->layout="report_layout";
	set_time_limit(4000);
	$this->loadModel('Organization');
	$this->loadModel('OrganizationType');
	$this->loadModel('Division');
	$this->loadModel('District');
	$this->loadModel('Upazilla');
	
	if(!empty($BbscodeKeyword)){
	
	 $AllCode=$this->Organization->query("
		SELECT organizations.organization_id, organizations.organization_code,organizations.email, organizations.title,org_types.type_name, divisions.name, districts.name, upazillas.name, organizations.fax
		FROM organizations
		LEFT JOIN org_types ON organizations.org_type_id=org_types.type_id
		LEFT JOIN divisions ON organizations.division_code=divisions.division_id
		LEFT JOIN districts ON organizations.district_code=districts.district_id
		LEFT JOIN upazillas ON organizations.upazila_code=upazillas.upazilla_id
		WHERE organizations.title LIKE '%$BbscodeKeyword%' OR organizations.organization_code LIKE '%$BbscodeKeyword%' OR org_types.type_name LIKE '%$BbscodeKeyword%' OR divisions.name LIKE '%$BbscodeKeyword%' OR districts.name LIKE '%$BbscodeKeyword%' OR upazillas.name LIKE '%$BbscodeKeyword%'
		");

        //$AllCode=$this->Organization->query("SELECT * FROM organizations WHERE division LIKE '$BbscodeKeyword%' OR district LIKE '%$BbscodeKeyword%' OR upazilla LIKE '$BbscodeKeyword%' OR name LIKE '$BbscodeKeyword%'");
	    // echo "<pre>";
		//print_r($AllCode);//exit;
		 $this->set('AllCode',$AllCode);
       }
	
	   }
	
	}
	
	


?>