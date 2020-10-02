<?php
include('config.php');

if(isset($_GET['std_id'])){

$id = $_GET['std_id'];


mysqli_query($con,"DELETE FROM `crouse_tbl` WHERE $id");


header('Location: corview.php');


}






?>