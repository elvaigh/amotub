<?php
session_start();
$_SESSION['pseudo']='';
session_destroy();
header('Location: index.php');
?>