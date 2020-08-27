<?php
//code by judith
include '../dbConnect.php';
//creer une classe <<Clientparticulier>>
class Clientparticulier{
        //creer une fonction enregistrer
        public function enregistrer(){
            $connect = new dbConnect();
            $db = $connect->getConnexion();


//formater la requete et essayerde lier les donnees declarees et les donnees de la base de donnee
        $req= $db->prepare("INSERT INTO `clientphysique`
        (`idClientPhysique`, `nom`, `prenom`, `telephone`,`genre`, `email`, `adresse`, `profession`, `salarie`, `salaire_actuel`, `nom_employeur`, `cni`)
         VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?)");
         $resultat=$req->execute(array(
            $this->getNom(),
             $this->getPrenom(),
             $this->getTelephone(),
             $this->getGenre(),
             $this->getEmail(),
             $this->getAdresse(),
             $this->getProfession(),
             $this->getSalarie(),
             $this->getSalaireActuel(),
             $this->getNom(),
             $this->getCni(),


         ));
         return $resultat;
         
        }
}
?>