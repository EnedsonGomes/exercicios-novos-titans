<html>
    <body>
          <?php
                //Funçao usada para definir fuso horário padrão
                date_default_timezone_set('America/Los_Angeles');

                //Manipulando HTML e PHP
                $data_hoje = date ("d/m/Y", time());

            ?>

            <p align="center"> Hoje é dia <?php echo $data_Hoje; ?> </p>
    </body>
</html>
