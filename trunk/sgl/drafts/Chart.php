<html>
    <head>
        <title> Torta 1  </title>
        <script language="javascript" src="http://www.google.com/jsapi"></script>
    </head>
    <body>

        <?php

        file_put_contents('chart.png',
                file_get_contents('http://chart.apis.google.com/chart?'.
                    'chs=500x300&cht=p3&chd=t0:800.013,49.65,40.19,50.723,63.151'.
                    '&chl=800%C2%B0|40%C2%B0|50%C2%B0|60%C2%B0|70%C2%B0&chtt=Prueba'));

        ?>

        <div><img src="chart.png" width="500" height="300" alt="Prueba" /></div>




    </body>
</html>
