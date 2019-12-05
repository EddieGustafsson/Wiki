<?php

$stylesArr = array('main', 'darkmode', 'zebra', 'color-blind', 'polka');

if(isset($_POST['theme']) && in_array($_POST['theme'], $stylesArr)) {
    $style = $_POST['theme'];
    setcookie("theme", $style, time()+(60*60*24*30), '/');
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

?>