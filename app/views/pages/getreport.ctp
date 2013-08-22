<script>
    function divReport(OrganizationDivision,OrganizationDistrict,OrganizationUpazilla,OrganizationOrganizationtype)
    {
        if(OrganizationDivision && OrganizationDistrict && OrganizationUpazilla && OrganizationOrganizationtype)
            window.open('<?php echo $this->base; ?>/pages/getreport/'+escape(OrganizationDivision)+'/'+escape(OrganizationDistrict)+'/'+escape(OrganizationUpazilla)+'/'+escape(OrganizationOrganizationtype),'','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
    }else if(OrganizationDivision && OrganizationDistrict) {
        window.open('<?php echo $this->base; ?>/pages/getreport/'+escape(OrganizationDivision)+'/'+escape(OrganizationDistrict)+'//','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
    }else if(OrganizationDistrict && OrganizationUpazilla){
        window.open('<?php echo $this->base; ?>/pages/getreport//'+escape(OrganizationDistrict)+'/'+escape(OrganizationUpazilla)+'/','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
    }else{
        window.open('<?php echo $this->base; ?>/pages/getreport////','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
    }
    }
    //else alert('No Division Selected');

    }

    /*function disReport(BbscodeDistrict)
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
}*/

    /*function showLoader(){
        $('.dist_loader').show();
    }

    function hideLoader(){
        $('.dist_loader').hide();
    }
    */
</script>


<div style="float:left;height:auto;width:330px;">
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
            <td height="35" align="left" width="100"><b>Org. Type :</b>
            </td>
            <td><?php echo $this->Form->select('organizationtype', $orgType, array('label' => false), array('empty' => '--Select Org. Type--'));?>
            </td>
        </tr>
        <tr>
            <td height="35" align="right" width="100"><input type="submit" name="report" value="Show" onClick="divReport(OrganizationDivision.value,OrganizationDistrict.value,OrganizationUpazilla.value,OrganizationOrganizationType.value);" style="display:inline;width:80px;">
            </td>
            <td>
            </td>
        </tr>
    </table>
</div>



<div id="mainContentWrapper" style="float:left;width:500px;">

    <table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" width="80%">
        <tr>
            <th width="50" align="center">SL</th>

            <th width="200" align="center"><?php echo 'Organization';?></th>
            <th width="200" align="center" nowrap><?php echo 'Org. Code';?></th>
            <th width="200" align="center"><?php echo 'Division';?></th>
            <th width="200" align="center" nowrap><?php echo 'District';?></th>
            <th width="200" align="center"><?php echo 'Upazilla';?></th>
            <th width="200" align="center" nowrap><?php echo 'Email';?></th>


        </tr>
        <?php
        echo"<pre>";
        $i = 0;
        foreach($getorgs as $getorg):
            //$class = null;
            if ($i++ % 2 == 0) {
                //$class = ' class="altrow"';
            }

            ?>
            <tr>
                <td width="20px;" align="center"><?php echo $i.'.'; ?></td>
                <td width="20px;" align="center"><?php echo $getorg['Organization']['title']; ?></td>
                <td width="20px;" align="center"><?php echo $getorg['Organization']['organization_code']; ?></td>
                <td width="20px;" align="center"><?php echo $getorg['Organization']['division_code']; ?></td>
                <td width="20px;" align="center"><?php echo $getorg['Organization']['district_code']; ?></td>
                <td width="20px;" align="center"><?php echo $getorg['Organization']['upazila_code']; ?></td>
                <td width="20px;" align="center"><?php echo $getorg['Organization']['email']; ?></td>




            </tr>
            <?php

        endforeach; ?>

    </table>


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
        'action' => 'getupazilla'), array(
        /*'before' => 'showLoader();',
        'success' => 'hideLoader();',*/
        'update' => '#OrganizationUpazilla',
        'dataExpression'=>TRUE,
        'method'=>'POST',
        'async'=>TRUE,
        'data' => $js->serializeForm(array('isForm' => TRUE, 'inline' => TRUE))  )));

$this->Js->get('#OrganizationUpazilla')->event('change',
    $this->Js->request(array(
        'action' => 'getorg'), array(
        /*'before' => 'showLoader();',
        'success' => 'hideLoader();',*/
        'update' => '#OrganizationOrganizationtype',
        'dataExpression'=>TRUE,
        'method'=>'POST',
        'data' => $js->serializeForm(array('isForm' => TRUE, 'inline' => TRUE))  )));
?>

<?php echo $this->Js->writeBuffer(); ?>