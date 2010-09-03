<?php
    require_once("../includes/configuration/prepend.inc.php");
    if (!isset($_SESSION['User']))
        QApplication::Redirect('../includes/login.php');
    $objUser = unserialize($_SESSION['User']);
       // make sure no errors occured in translation and the session's User variable is a user object
       if (!($objUser instanceof Empleado)&&!($objUser instanceof Administrador))
        QApplication::Redirect('../includes/login.php');
?>
