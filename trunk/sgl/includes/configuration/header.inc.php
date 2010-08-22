<?php
// This example header.inc.php is intended to be modfied for your application.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
        <?php if (isset($strPageTitle)) { ?>
        <title><?php _p($strPageTitle); ?></title>
            <?php } ?>
        <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
    </head>
    <body>
        <div id="header_container">
            <div id="header">
                <ul>
                    <li><a href="index.html" >Home</a> </li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Licencias</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Soluciones</a></li>
                    <li class="contact"><a href="#">Contactos</a></li>
                </ul>
                <h1>&nbsp;</h1>
            </div>
        </div>

        <div id="content">

