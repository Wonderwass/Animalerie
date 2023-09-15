<?php
require_once "database.php";
require_once "functions.php";
class AnimalRepository
{
    private $id_animal;
    private $nom;
    private $type;
    private $race;

    public function __construct($nom, $type, $race){ //__construct methode magique 
        $this->nom = $nom;
        $this->type = $type;
        $this->race = $race;

    }
   
        public function insert()
    {
        // Créer une instance DbConnect
        $db = new dbConnect();
        debugDie($db);

        // se connecter à la bd
        $connexionDb = $db->dbConnexion(); // methode 1
        // $db = $dbConnect->connexioDataBase; // methode 2

        //préparation de la requête
        $request = $connexionDb->prepare("INSERT INTO animal (nom, type, race) VALUES (?, ?, ?) ");

        //exécution de la requete
        try { // essayer d'enregister les infos dans la table animal
            $request->execute(array($this->nom, $this->type, $this->race));
        } catch (PDOException $e) {
            echo $e->getMessage(); // afficher l'erreur sql généré
        }
    }
    public function findAll()
    {
        $db = new dbConnect();
        $connexionDb = $db->dbConnexion();
        $connexionReqiest = $connexionDb->prepare("SELECT * FROM animal");

        // éxécuter la requette
        $connexionReqiest->execute();

        // récuperer le resultat de la requette
        $animaux = $connexionReqiest->fetchAll(PDO::FETCH_ASSOC);
    }
}

