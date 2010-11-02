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
                <h1>&nbsp;</h1>
            </div>
        </div>
        <ul class="menu">
            <li class="top"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_CLIENTE__) ?>/index.php" target="_self" class="top_link"><span>Inicio</span></a>
            <li class="top"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_CLIENTE__) ?>/index.php" target="_self" class="top_link"><span>Resumen Ejecutivo</span></a>
                <ul class="sub">
                    <li><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_CLIENTE__) ?>/seg_licencia_list.php" target="_self">Seguimiento Licencias</a></li>
                </ul>
            </li>
            <li class="top"><a href="<?php _p(__SUBDIRECTORY__) ?>/includes/logout.php" target="_self" class="top_link"><span>Desconectar</span></a></li>
        </ul>
        <div id="content">