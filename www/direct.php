<?php 
    require_once('session_start.php');
    
    $lwRole = strtolower($role);

    if($lwRole == 'chief' )
        header('Location: chief_update-info.php');
    
?>