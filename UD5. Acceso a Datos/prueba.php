<?php

include_once "paisCRUD.php";

foreach (listarPaises() as $pais) {
    echo $pais->getNombre(). "<br>";
}

?>