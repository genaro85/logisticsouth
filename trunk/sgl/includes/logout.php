<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require('../qcubed.inc.php');
unset($_SESSION['user']);
QApplication::Redirect(__SUBDIRECTORY__. '/includes/login.php');

?>
