<?php

//inclure la page de connexion à la bdd et la classe class_particulier
include '../dbConnect.php';
include '../../model/class_compte.php';



class OuvertureCompte
{
    private $id;
    private $typeCompte;
    private $idEntreprise;
    private $idClientPhysique;
    private $NumeroCompte;
    private $CleRib;
    private $EtatCompte;
    private $DepotInitial;
    private $DateOuverture;
    

    // declarer une méthode dont le but est d'afficher les attributs
    public function __construct($typeCompte, $idEntreprise, $idClientPhysique, 
    $NumeroCompte, $CleRib, $EtatCompte, $DepotInitial, $DateOuverture)
    {
        //on envoie les donnees dans l'insistance
        $this->typeCompte=$typeCompte;
        $this->idEntreprise=$idEntreprise;
        $this->idClientPhysique=$idClientPhysique;
        $this->NumeroCompte=$NumeroCompte;
        $this->CleRib=$CleRib;
        $this->EtatCompte=$EtatCompte;
        $this->DepotInitial=$DepotInitial;
        $this->DateOuverture=$DateOuverture;
       
    }
   
//getters
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getTypeCompte()
    {
        return $this->typeCompte;
    }
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
    public function getIdClientPhysique()
    {
        return $this->idClientPhysique;
    }

        public function getNumeroCompte()
    {
            return $this->NumeroCompte;
    }
        public function getCleRib()
    {
            return $this->CleRib;
    }
        public function getEtatCompte()
    {
            return $this->EtatCompte;
    }
        public function getDepotInitia()
    {
            return $this->DepotInitial;
    }
        public function getDateOuverture()
    {
            return $this->DateOuverture;
    }
}