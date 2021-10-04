<?php
    require_once 'Model.php';
    $pdo=Model::getPDO();
    $req="SELECT * FROM voiture";
    $rep=$pdo->query($req);
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
    foreach($tab_obj as $value) {
        echo $value->immatriculation;
    }

?>