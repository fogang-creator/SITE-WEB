
<?php
require_once 'db.php';

//Pouvoir garder les valeurs précédentes dans l'input e cas d'erreur
$errors = []; //lister les erreurs



function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }

    return $str;
}



//Vérifier si la méthode utilisée est GET ou POST avec la superglobale $_SERVER

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//On recupère les données du formulaire via la variable super globale $_POST

//$image = $_POST['image'];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$email = $_POST["email"];
$message = $_POST["message"]; 

//DATE AVEC LE FORMAT MYSQL


if(!$nom) {
    $errors[] = 'Le nom est obligatoire';
}
if(!$prenom) {
    $errors[] = 'Le prenom est obligatoire';
}

if(!$adresse) {
    $errors[] = 'adresse est obligatoire';
}

if(!$email) {
    $errors[] = 'email est obligatoire';
}

if(!$message) {
    $errors[] = 'Le message est obligatoire';
}

//Insérer dans la base de donnée que si y'a aucune erreur
if (!is_dir('images')) {
    mkdir('images');
}

if(empty($errors)) {
$imagePath = '';
$image = $_FILES['image'] ?? null; //Si on a pas submit de file on fixe à null
if($image && $image['tmp_name']) {
    $imagePath = 'images/' . randomString(8) . '/' . $image['name'];//créer un path unique
    mkdir(dirname($imagePath)); //création du dossier avec le nom généré
    move_uploaded_file($image['tmp_name'], $imagePath);//Une fois submit le fichier est placé dans un chein spécifié à la variable $image['tmp_name'] et on utilise cette fonction pour déplacer le fichier dans un endroit dédié
}
// //insértion dans la base de donnée. On utilise des named parameters (future de PDO)
$statement = $pdo->prepare("INSERT INTO clients(nom, prenom, adresse, email, message) VALUES(:nom, :prenom, :adresse, :email,:message)");

//associée les named parameters aux valeurs récupérées de la superglobale $_POST
$statement->bindValue(':nom', $nom);
$statement->bindValue(':prenom', $prenom);
$statement->bindValue(':adresse', $adresse);
$statement->bindValue(':email', $email);
$statement->bindValue(':message', $message);
//echo$_SESSION['nom de attribue'];

//Exécuter la requête
$statement->execute();

//redirection à la page d'accueil une fois la création finie
header('Location: confirmation_envoie.html');
//header('Location: index.html');
}

}

?>




