<?php
//error_reporting(E_ALL);
//ini_set('display_errors','On');
print_r($upazillas);
exit;
    foreach ($upazillas as $upazilla) {
        echo '<option value="'.$upazilla['Upazilla']['upazilla_id'].'">'.$upazilla['Upazilla']['name'].'</option>';
    }
?> 