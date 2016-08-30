<?php
session_start();
$_SESSION['pseudo']=null;
      session_write_close ();
      header('Location: /bacenpoche/index.php');
?>