<?php
    //include Conf::getLogin();
//https://webinfo.iutmontp.univ-montp2.fr/~mohamedb/Php/TD2/testModel.php
    // On inclut les fichiers de classe PHP avec require_once
    // pour éviter qu'ils soient inclus plusieurs fois
    require_once 'Conf.php';

    // On affiche le login de la base de donnees
    echo Conf::getLogin() . "\n";
    echo Conf::getDatabase(). "\n";
    echo Conf::getHostname(). "\n";
    echo Conf::getpassword(). "\n";


?>
