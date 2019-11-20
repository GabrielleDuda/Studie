<?php
    $GLOBALS['listaHORAS'] = [];
    $GLOBALS['listaDISC'] = [];
    foreach ($_POST as $key => $value) {
        array_push($GLOBALS['listaHORAS'],$value);
    }
    include './cadastro/cadastroD.php';
?>