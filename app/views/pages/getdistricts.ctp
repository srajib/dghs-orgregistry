<?php
    foreach ($districts as $district) {
        echo '<option value="'.$district['District']['district_id'].'">'.$district['District']['name'].'</option>';
    }
?>