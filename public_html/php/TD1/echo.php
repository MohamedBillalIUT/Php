<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
        //<p> Voiture 256AB34 de marque Renault (couleur bleu) </p>


        $marque=null;
        $couleur=null;
        $immatriculation='';

        $immatriculation='256AB34';
        $marque='Renault';
        $couleur='bleu';
        $texte="Voiture $immatriculation de marque $marque (couleur $couleur)";
        echo $texte;
           
        // On met la chaine de caractères "hello" dans la variable 'texte'
        $texte2 = "hello world !";// Les noms de variable commencent par $ en PHP

        // On écrit le contenu de la variable 'texte' dans la page Web
        echo $texte2;

        $voiture=array(
            $marque,
            $couleur,
            $immatriculation);

        $voiture['marque']='Renaut';
        $voiture['immatriculation']='256AB34';
        $voiture['couleur']='bleu';

        foreach ($voiture as $cle => $valeur){

            $voiture[0]='Renault'||'Ford'||'Lamborgini';//change une variable local
            $voiture[1]='256AB34'||'216458A'||'215A985';//change une variable local
            $voiture[2]='bleu'||'noir'||'blanc';
        }
        $voiture2[]=$voiture;

        for ($j=0; $j<count($voiture2);$j++){//Faire un tableau d'entier
            $voiture2[$j]=$voiture||$voiture;
            echo $voiture2[$j];
        }
        var_dump($voiture2);

        ?>


    </body>
</html> 