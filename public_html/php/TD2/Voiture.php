<?php //{
//
class Voiture {

    private $marque;
    private $couleur;
    private $immatriculation;

    // un getter
    public function getMarque() {
        return $this->marque;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @return mixed
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @param mixed $immatriculation
     */
    public function setImmatriculation($immatriculation){
        if (strlen($immatriculation))
        $this->immatriculation = $immatriculation;
        else echo "trop de caractère";
    }

    // un setter
    public function setMarque($m) {
        $this->marque = $m;
    }

    // un constructeur
    public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    }

    // une methode d'affichage.
    public function afficher() {
      // À compléter dans le prochain exercice
        echo $this->getCouleur();
        echo $this->getImmatriculation();
        echo $this->getMarque();
    }
}
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//     class Voiture{
//        private VARCHAR $marque;
//        private VARCHAR $couleur;
//        private INT $immatriculation;
//        private VARCHAR $marque2;
////
//         public function VARCHAR afficher(){
//            echo Voiture(immatriculation::marque2);
//        }
//        private function VARCHAR setMarque($marque2){
//            $marque = marque2;
//        }
////
//////Un constructeur
//        public function VARCHAR constructMarque2($m, $c, $i){
//            return setMarque(m::couleur = $c::$this->immatriculation = $i);
//        }
//
////
//////ungetterplic
//        public function VARCHAR getMarque($m, $c, $i){
//            constructMarque2();
//            return marque2;
//        }
////
//}
//?>
<!---->
<!---->
