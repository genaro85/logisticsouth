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
        <div id="body1"><form action="" method="post" >
                <table width="514" border="0
                       ">
                    <tr>
                        <td width="237" rowspan="2"><label>Usuario Login:</label></td>
                        <td width="168"><input name="Your name" type="text" id="yourname" value="Your name" /></td>
                    </tr>
                    <tr>
                        <td width="168" valign="top"><input name="emailid" type="text" id="emailid" value="Email Id" /></td>
                        <td width="95" rowspan="2" valign="center"><input name="" type="submit" class="botton" value="GO" /></td>
                    </tr>
                </table>

            </form>

        </div>

        <div id="content">

