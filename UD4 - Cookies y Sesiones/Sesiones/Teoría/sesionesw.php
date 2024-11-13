<?php

    session_start();
    $_SESSION['usuario'] = 'Juan';
    $_SESSION['email'] = 'juan@example.com';

    echo $_SESSION["usuario"];
?>