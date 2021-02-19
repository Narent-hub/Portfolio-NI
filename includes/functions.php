<?php 
    require_once("DB.php");
    function Redirect_to($newLocation){
        header("Location: ".$newLocation);
        exit();
    }
?>