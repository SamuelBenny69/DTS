<?php  
require '../app/controllers/HomeController.php';
require '../app/model/User.php';



$controller = new HomeController();
$controller->index();
?>