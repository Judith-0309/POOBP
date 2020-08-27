 <?php

//inclure la page de connexion à la bdd et la classe class_particulier
include '../dbConnect.php';
include '../../model/class_particulier.php';

//creer une classe
class Clientparticulier
{
//declaration des variables privées
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $genre;
    private $email;
    private $adresse;
    private $profession;
    private $salarie;
    private $salarie_actuel;
    private $nom_employeur;
    private $cni;

    // declarer une méthode dont le but est d'afficher les attributs
    public function __construct($nom,$prenom,$telephone,$genre,$email,$adresse,$profession,
    $salarie,$salarie_actuel,$nom_employeur,$cni)
    {
        //on envoie les donnees dans l'insistance
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->telephone=$telephone;
        $this->genre=$genre;
        $this->email=$email;
        $this->adresse=$adresse;
        $this->profession=$profession;
        $this->salarie=$salarie;
        $this->salaire_actuel=$salarie_actuel;
        $this->nom_employeur=$nom_employeur;
        $this->cni=$cni;
    
    }
   
//getters
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getNom()
    {
        return $this->nom;
    }
        public function getPrenom()
    {
            return $this->prenom;
    }
        public function getTelephone()
    {
            return $this->telephone;
    }
        public function getGenre()
    {
            return $this->genre;
    }
        public function getEmail()
    {
            return $this->email;
    }
        public function getAdresse()
    {
            return $this->adresse;
    }
        public function getProfession()
    {
            return $this->profession;
    }
        public function getSalarie()
    {
            return $this->salarie;
    }
        public function getSalaireActuel()
    {
            return $this->salarie_actuel;
    }
        public function getNomEmployeur()
    {
            return $this->nomEmployeur;
    }
        public function getCni()
    {
            return $this->cni;
    }
}