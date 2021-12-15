<?php session_start();?>
<?php
unset($_SESSION['product'][$_GET['id']]);


echo'<hr>';
require 'cart.php';
?>



