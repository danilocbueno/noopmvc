<?php

function conn() {
    $cnx = mysqli_connect("localhost", "mysql", "qwe123", "tinymvc");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}