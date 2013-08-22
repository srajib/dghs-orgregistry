<?php
//print_r($orgtypes);
//exit;
foreach ($orgtypes as $orgtype) {
    echo '<option value="'.$orgtype['OrganizationType']['type_id'].'">'.$orgtype['OrganizationType']['name'].'</option>';
}
?>