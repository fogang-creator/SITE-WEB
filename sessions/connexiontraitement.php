

<?php
require_once'db.php';
//instance de la base de données
$bdd = new PDO('mysql:host=127.0.0.1;dbname=siteweblady', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Récupérer l'email rempli par l'utilisateur

$email = $_POST["email"];
//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id_compte, nom, mot_de_passe FROM compte WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();
//le var_dump ci_dessous permet d'afficher toutes les infos sur la variable $resultat
//var_dump($resultat);
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mot_de_passe']);

if (!$resultat)
{
    echo 'Mauvais identifiant !';
} else {
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id_compte'];
        $_SESSION['nom'] = $resultat['nom'];
        
        header('Location: index.html');
        //echo 'Vous êtes connecté ! ' . $_SESSION['nom'];
    }
    else {
        echo 'Mauvais mot de passe !';
    }
}






?>