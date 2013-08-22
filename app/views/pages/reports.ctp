<script>
function divReport(OrganizationDivision)
{
	if(OrganizationDivision)
		window.open('<?php echo $this->base; ?>/pages/divReport/'+escape(OrganizationDivision),'','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
		else {
		window.open('<?php echo $this->base; ?>/pages/divReport/','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
		}
	//else alert('No Division Selected');

}

function disReport(BbscodeDistrict)
{
	if(BbscodeDistrict)
		window.open('<?php echo $this->base; ?>/pages/disReport/'+escape(BbscodeDistrict),'','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
	else {
	window.open('<?php echo $this->base; ?>/pages/disReport/','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
		}
	}


function upaReport(BbscodeUpazilla)
{
	if(BbscodeUpazilla)
		window.open('<?php echo $this->base; ?>/pages/upazillaReport/'+escape(BbscodeUpazilla),'','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
		else{
window.open('<?php echo $this->base; ?>/pages/upazillaReport/','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
		}
	}

function uniReport(BbscodeUnion)
{
	if(BbscodeUnion)
		window.open('<?php echo $this->base; ?>/pages/unionReport/'+escape(BbscodeUnion),'','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
	else {
	window.open('<?php echo $this->base; ?>/pages/uniReport/','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
	}
}

function search(BbscodeKeyword)
{
	if(BbscodeKeyword)
		window.open('<?php echo $this->base;?>/pages/keywordReport/'+escape(BbscodeKeyword),'','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
	else {
	window.open('<?php echo $this->base; ?>/pages/keywordReport/','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
	}
}

    /*function showLoader(){
        $('.dist_loader').show();
    }
    
    function hideLoader(){
        $('.dist_loader').hide();
    }
    */
</script>


<div style="float:left;height:auto;width:310px;">
<?php
echo $this->Form->create('Organization', array('url' => array('controller' => 'pages', 'action' => 'reports')));
?>
<table border="0" width="300" align="center">
<tr>
<td height="35" align="right" width="100" colspan="2"><h2 class="title" align="center">Report Filter</h2>
</td>
</tr>
<tr>
<td height="35" align="left" width="100"><b>Division :</b>
</td>
<td><?php echo $this->Form->select('division', $divisions, array('label' => false), array('empty' => '--Select Division--'));?>
</td>
</tr>
<tr>
<td height="35" align="left" width="100"><b>District :</b>
</td>
<td><?php echo $this->Form->select('district', $districts, array('label' => false), array('empty' => '--Select District--'));?>
</td>
</tr>
<tr>
<td height="35" align="left" width="100"><b>Upazilla :</b>
</td>
<td><?php echo $this->Form->select('upazilla', $upazillas, array('label' => false), array('empty' => '--Select Upazilla--'));?>
</td>
</tr>
<tr>
<td height="35" align="right" width="100"><?php echo $this->Form->end('Search');?>
</td>
<td>
</td>
</tr>
</table>	
</div>
				
				
				
<div id="mainContentWrapper" style="float:left;width:500px;">

</div>


<?php
$this->Js->get('#OrganizationDivision')->event('change',
        $this->Js->request(array(
            'action' => 'getdistricts'), array(
                /*'before' => 'showLoader();',
                'success' => 'hideLoader();',*/
                'update' => '#OrganizationDistrict',
                'dataExpression'=>TRUE, 
                'method'=>'POST',
                'async'=>TRUE,
                'data' => $js->serializeForm(array('isForm' => FALSE, 'inline' => TRUE))  )));

$this->Js->get('#OrganizationDistrict')->event('change', 
        $this->Js->request(array(
            'action' => 'getupozila'), array(
                /*'before' => 'showLoader();',
                'success' => 'hideLoader();',*/
                'update' => '#OrganizationUpazilla',
                'dataExpression'=>TRUE, 
                'method'=>'POST',
                'data' => $js->serializeForm(array('isForm' => TRUE, 'inline' => TRUE))  )));

$this->Js->get('#OrganizationUpazilla')->event('change', 
        $this->Js->request(array(
            'action' => 'getunion'), array(
                /*'before' => 'showLoader();',
                'success' => 'hideLoader();',*/
                'update' => '#OrganizationName',
                'dataExpression'=>TRUE, 
                'method'=>'POST',
                'data' => $js->serializeForm(array('isForm' => TRUE, 'inline' => TRUE))  )));				
?>

<?php echo $this->Js->writeBuffer(); ?>