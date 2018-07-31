<?php

function exibir($view, $data = array()) {
    $viewFilePath = 'visao/' . $view . '.view.php';

    if (!file_exists($viewFilePath)) {
        die("Nao encontrei sua view!");
    }

    extract($data);

    require("visao/template.php");
}

function redirect($path) {
    $finalPath = BASE_URL . $path;
    header("location: $finalPath");
}

function assinalarCampo($valorA, $valorB) {
    if ($valorA == $valorB) {
        return 'selected';
    }
}

?>