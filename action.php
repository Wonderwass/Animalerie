<!--
CONSIGNES
// inclure le fichier utilisateur.php
// recuperer les information du formulaire
// creer un instance de la classe Utilisateur
// appeler la methode inscription pour enregistrer les donnees dans bd

-->

<?php
session_start();
require_once("functions.php");
require_once("utilisateur.php");
require_once("database.php");

if (isset($_POST['inscription'])) {
    // récupération des données saisies par l'utilisateur
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $password = password_hash($password, PASSWORD_DEFAULT);

    // on appel le constructeur
    $utilisateur = new Utilisateur($nom, $prenom, $email, $password);
    $utilisateur->inscription();
}

require_once("AnimalRepository.php");

if (isset($_POST['submit'])) {
    // debugDie($_POST);
    // récupération des données saisies par l'utilisateur
    $nom = htmlspecialchars($_POST['nom']);
    $type = htmlspecialchars($_POST['type']);
    $race = htmlspecialchars($_POST['race']);

    // on appel le constructeur
    $utilisateur = new AnimalRepository($nom, $type, $race);
    $utilisateur->insert();
}

if (isset($_POST['connexion'])) {
    // récupération des données saisies par l'utilisateur
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // appel de la methode statique connexion
    Utilisateur::connexion($email, $password);
}

