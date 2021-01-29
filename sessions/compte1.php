


<?php
require_once'db.php';
$bdd = new PDO('mysql:host=127.0.0.1;dbname=siteweblady', 'root', '');
if(isset($_POST['s'])) {
    $nom = htmlspecialchars($_POST['nom']);
   $mail = htmlspecialchars($_POST['email']);
 
   $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
   $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);

   //$insertmbr->execute(array($pseudo, $mail, $mdp));
   if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
     $strenNom = strlen($nom);
     if ($strenNom <= 255) {

         //if ($mail === $mail2) {

            $stmt = $bdd->prepare("SELECT * FROM compte WHERE email=?");
            
            //vérification de l'existance du mail dans la BDD
            $stmt = $bdd->prepare("SELECT * FROM compte WHERE email=?");
            $stmt->execute([$mail]); 
            $user = $stmt->fetch();
            if ($user) {
                // email existe
                echo " Ce mail existe déjà . ";
            } else {
                // email n'existe pas
                //vérification mot de passe
                if ($_POST['mdp'] === $_POST['mdp2']) {
                    //insertion dans la BDD
                    $insertmbr = $bdd->prepare("INSERT INTO compte(nom, email, mot_de_passe) VALUES(:nom, :email, :mot_de_passe)");
    $insertmbr->execute(array(
        'nom' => $nom,
        'email' => $mail,
        'mot_de_passe' => $mdp
        ));

     header('Location: connexion.php');
                } else {
                    echo "Les mots de passe renseignés ne sont pas identiques";
                }
            } 





        //  } else {
        //     echo "Les mails ne sont pas identiques";
        //  }

     } else {
        echo "La chaine dépasse 256";
     } 
    
   } else {
       header('Location: index.php');
   }
   
}
//
/*value="<?php  if(isset($pseudo)){echo $pseudo;} ?>" */

?>