<?php
session_start();  
session_unset();
session_destroy();
header('Location: 408fondoSesion1.php');
exit();

?>