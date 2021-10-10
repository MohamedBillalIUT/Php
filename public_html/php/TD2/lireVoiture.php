<?php
    require_once 'Model.php';
    require_once 'Voiture.php';

    $pdo=Model::getPDO();
    $req="SELECT * FROM voiture";
    $rep=$pdo->query($req);
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
    foreach($tab_obj as $value) {
        echo $value->immatriculation . "\n";
        echo $value->marque . "\n";
        echo $value->couleur . "\n";
    }

    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();



?>