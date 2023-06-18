<?php

if (isset($_POST['thales'])){
    $thales = $_POST['thales'];
    echo $thales;
    header("Location: thales.php");
    exit();
}
elseif(isset($_POST['reseaux'])){
    $reseau = $_POST['reseaux'];
    header("Location: reseaux.php");
    exit();
}
elseif(isset($_POST['signaux'])){
    $signal = $_POST['signaux'];
    header("Location: signaux.php");
    exit();
}
?>