<?php
class dbConnect
{
    //$db;
   

    public function getConnexion()
    {
       
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'activite_bancaire';

    $dsn = "mysql:host=$host;dbname=$dbname";
    try {
        $db = new PDO($dsn,$user,$password);
        //emettre une alerte à chaque fois que lq requete echoue
        //$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    }
    catch(PDOException $ex){
        die('Error :'.$ex->getMessage());
      }
    return $db;
}

       
    }

?>