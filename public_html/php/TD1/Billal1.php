<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> je teste le php</title>
</head>
<body>
<h1> I can do it</h1>
<?php
require_once "TD1/echo.php";
    //Essaye d'afficher une phrase pour commencer
    /*et tqt
    on fera plus dur la prochaine fois */

    $texte="hi, my name is billal";
    echo $texte;

    /*attention au petite rêgle de syntaxe exemple:""
    peut contenir des sauts de lignes, des variable (qui seront remplacé par leur valeur,
    des caractères spéciaux (tabulation, \t, saut de ligne \n)
    les caractères protégés sont ",$ et \ qui doivent être échappés avec un anti-slash \ comme ceci: \", \$ et \\;
    */

    $prenom="Helmut";
    echo "Bonjour $prenom,\n bien ou quoi ?";
    //simple quote parcontre affiche le message tel quel, les seul exception sont ' et / qui seront apl en mode // ou /'
    echo 'Bonjour $prenom, \n trkl ou bien?';

    //heredoc = remplissage de variable avec plusieurs lignes texte
    echo <<<Paragraphe
    je te ments pas je sais que je suis en retard,
    en retard dans tout ce que j'entreprend parce que je n'arrete pas d'entreprendre mais en vrai
    ça me dérange pas car je sais que je finirais d'entreprendre un jour pas d'soucie.
    Paragraphe;


// On met la chaine de caractères "hello" dans la variable 'texte'
$texte2 = "hello world !";// Les noms de variable commencent par $ en PHP

// On écrit le contenu de la variable 'texte' dans la page Web
echo $texte2;

//Parcourir un tablezu d'entier
for ($i=0; $i<count($mon_tableau); $i++){
    echo $mon_tableau[$i];
}

/*en gros foreach en mode
foreach ($mon_tableau as $cle => $valeur){
//commandes
}

c'est équivalent à ça
for ($i = 0; $i < count(array_keys($mon_tableau)); $i++) {
$cle = array_keys($mon_tableau)[$i];
$valeur = $mon_tableau[$cle];
//commandes }*/

//LES TABLEAUX (Trés important)
// Tableau vide
$coeur = array();

//création de tableau case par case
// Association entre => prenom='clé/index'; French='valeur';
$mon_tableau['prenom']='French';
$mon_tableau['nom']='what';

//Autre association possible
$help=array(
    'prenom'=>'moi',
    'nom'=>'solidarité',
    'Pour'=> 'Rosa Parks');

//rajouter un éléments à la fin du tableau
$mon_tableau[]= "new Valeur";

//<p> Voiture 256AB34 de marque Renault (couleur bleu) </p>
$marque=null; //initialisation de variable directement en null pour être sur que la variable soit bien initialisé
$couleur=null; //same
$immatriculation='';//pas null car clé primaire

$immatriculation='256AB34'; //initialisation des variable avec des valeur
$marque='Renault';
$couleur='bleu';
$texte="Voiture $immatriculation de marque $marque (couleur $couleur)";
echo $texte;

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

//Parcourir un tableau de caractère
foreach ($mon_tableau as $cle => $valeur){
    /*foreach vas parcourir toutes les association en en mettant chaque cle d'asso dans la variable $cle
    et les valeur dans $valeur*/
    echo "$cle : $valeur\n";
    // ":" veut dire affiche un apres l'autre
}
for ($j=0; $j<count($voiture2);$j++){//Faire un tableau d'entier
    $voiture2[$j]=$voiture||$voiture;
    echo $voiture2[$j];
}
var_dump($voiture2);



?>
</body>
</html>











