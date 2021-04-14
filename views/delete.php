<?php 
if(isset($_POST['id'])){
$exist = new produitController();
$exist->deleteProduct();
}


?>