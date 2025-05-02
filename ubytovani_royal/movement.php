<?php 
    if(isset($_POST["submitMove"])){
        $pokoj = $_POST["pokoj"];


        if($pokoj == 1){
            header("Location: standard-pokoj.php"); 
            exit();
        } else if($pokoj == 2){
            header("Location: deluxe-pokoj.php"); 
            exit();
        }
    }


?>