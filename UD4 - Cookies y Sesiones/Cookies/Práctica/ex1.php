<?php

    setcookie("idioma", "pp", time() + 5); 

if (isset($_COOKIE["idioma"])) {
    echo "Existe la cookie.<br>";
    $c = $_COOKIE["idioma"];
    if ($c == "es") {
        echo "Hola es";
    } else {
        echo "Hola otro";
    }

} else {
    echo "No existe la cookie.";
}
?>
