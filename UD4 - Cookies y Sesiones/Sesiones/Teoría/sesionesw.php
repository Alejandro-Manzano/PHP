<?php

    //session_start();  // Iniciar la sesión
    //session_unset();  // Eliminar todas las variables de sesión
    //session_destroy();  // Destruir la sesión

    session_start();
    $_SESSION['usuario'] = 'Juan';
    $_SESSION['email'] = 'juan@example.com';
    
    echo $_SESSION["usuario"];
?>