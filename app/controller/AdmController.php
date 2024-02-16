<?php
    class AdmController{
        function index(){
            try{
                echo"AdmController";
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
?>
