<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "webloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}