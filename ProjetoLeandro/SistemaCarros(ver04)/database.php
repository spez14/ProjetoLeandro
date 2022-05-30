<?php

    
    //declarando uma constante para acesso ao banco de dados
    define("SERVER_LOCAL","localhost"); //si_ads_2period.mysql.dbaas.com.br
    define("SERVER_USER","root"); //usuario = si_ads_2period
    define("SERVER_PASSWORD",""); //SiAdsCMC2022!
    define("DATABASE_NAME","si_ads_2period"); //si_ads_2period

    $conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);

?>