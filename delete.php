<?php
    require_once 'includes/db/conn.php';
    if(!$_GET['id']){
        echo'error';
    }else{
        // Get ID values
        $id = $_GET['id'];

        // Call Delete function
        $result = $crud->deleteAttendee($id);
        // Redirect to list
        if($result)
        {
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
?>