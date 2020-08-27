<?php



include '../dbConnect.php';

//creer une classe <<OuvertureCompte>>
//declaration des variables privées
class OuvertureCompte
{
 
        //creer une fonction enregistrer
        public function enregistrer(){
            try{
            $connect = new dbConnect();
            $db = $connect->getConnexion();


//prend le contenu du formulaire et essayer del'inserer dans la base de donnees et donne un feedback à l'utilisateur
        $req= $db->exec("INSERT INTO `compte`
        (`idCompte`, `typeCompte`, `Numero_Compte`, `Cle_Rib`, `Etat_Compte`, `Depot_Initial`, `Date_Ouverture`) 
                        VALUES (NULL,
                        '".$this->getTypeCompte()."',
                        ".$this->getNumeroCompte().",
                        ".$this->getCleRib().",
                        '".$this->getEtatCompte()."',
                        ".$this->getDepotInitia().",
                        '".$this->getDateOuverture()."'
                        )"
                );
                 
     
         return $req;
        }catch(PDOEXCEPTION $ex){
                echo 'erreur :'  .$ex ->getMessage();
        }

        }

}