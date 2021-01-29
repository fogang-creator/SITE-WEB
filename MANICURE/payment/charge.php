<?php

//Afficher les erreurs (au cas où il y en a)

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__) . '/log.txt');
error_reporting(E_ALL);

require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_SdMYIK5DvgfupYiXN8sF32A0004PPibnNW');  //Clé secret (mode test)

//FILTRER LES DONNEES ENTREES PAR LE CLIENT.

$POST=filter_var_array($_POST, FILTER_SANITIZE_STRING);

$prenom=$POST['prenom'];
$nom=$POST['nom'];
$email=$POST['email'];
$token=$POST['stripeToken'];  //Variable le plus important pour verifier que le système accepte les cartes de crédit

  //Debiter le client CART DE CREDIT DE TEST: 5500 0055 5555 5559 (MASTER CARD)
$stripe = new \Stripe\StripeClient(
    'sk_test_SdMYIK5DvgfupYiXN8sF32A0004PPibnNW'
  );

  $stripe->charges->create([
    'amount' => 1299,
    'currency' => 'eur',
    'source' => 'tok_amex',
    'description' => 'Paiement pour votre article',
    
    // 'customer' =>$customer
  ]);

  echo "<h1 class>Merci pour votre commande!Votre paiement a été accepté. A bientôt sur SMART LADY!</h1>";
?>