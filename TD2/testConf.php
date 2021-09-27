<?php
    //include Conf::getLogin();
//https://webinfo.iutmontp.univ-montp2.fr/~mohamedb/PHP/TD2/testConf.php

    // On inclut les fichiers de classe PHP avec require_once
    // pour éviter qu'ils soient inclus plusieurs fois
    require_once 'Conf.php';

    // On affiche le login de la base de donnees
    echo Conf::getLogin();
    echo Conf::getDatabase();
    echo Conf::getHostname();
    echo Conf::getpassword();


?>
