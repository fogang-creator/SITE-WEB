









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="compte.css">
    <title>Parfums</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark auto-hiding-navbar">
      <div class="container">
        <a href="../index/index.html" class="navbar-brand">SMART LADY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li><a href="../index/index.html" class="nav-link px-4"> Acceuil</a></li>
            <li class="nav-item dropdown px-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                Produits
              </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../VISAGES/visage.html">Soins de visage</a></li>
                    <li><a class="dropdown-item" href="../CHEVEUX/cheveux.html">Soins de cheveux</a></li>
                    <li><a class="dropdown-item" href="../MAQUILLAGE/maquillage.html">Maquillage</a></li>
                    <li><a class="dropdown-item" href="../MANICURE/manicure.html">Manicure</a></li>
                    <li><a class="dropdown-item" href="../PARFUMS/parfums.html">Parfums</a></li>
                </ul>
              <li><a href="../sessions/contact.php" class="nav-link px-4"> Contacts</a></li>
              <!-- <li><a href="" class="nav-link px-4"> Recherche</a></li> -->
              <li><a href="../sessions/connexion.php" class="nav-link px-4"> Connexion</a></li>
              <li><a href="../sessions/inscrivezvous.php" class="nav-link px-4"> Inscrivez-vous</a></li>
          </ul>
        </div>
        <form action="">
          <input type="text" placeholder="Recherche" class="form-control">
        </form>
    </nav>
      </div>
      </nav><!--Navbarend-->





	<div class="container-default " >

		<div id="forme" class="form-vertical">
			<div class="text-center"> 
  
  <label for="nom" class="text-center"> Créer un compte </label></br>

<form style="margin:70px;" method="post" action="compte1.php">

  <label for="nom" class="text-center"> <h1>Réinitialiser mon mot de passe</h1></label></br>
  
          <div class="row text-center">
            <div class="col-md-12">
          <div class="form-group" > 
            <label for="email" class="text-center"> Entrer votre adresse mail  </label></br>
        <input type="text"  id="login"  name="email" >
         <br><br>
        </div>
            </div>
              </div>

              <div class="row text-center">
    <div class="col-md-12">

	<div class="form-group" > 

    <label for="nom" class="text-center"> Entrer votre nouveau mot de passe  </label></br>
<input type="password"  id="nom"  name="mdp" required >
<br><br>

</div>
    </div>
      </div>

<!-- <div class="row text-center">
    <div class="col-md-12">
	<div class="form-group" > 
    <label for="pwd" class="text-center"> Mot de passe </label></br>
<input type="password" required  id="mot_de_passe"  name="mdp" placeholder="Mot de passe">
<br><br>
</div>
    </div>
      </div> -->


      <div class="row text-center">
        <div class="col-md-12">
      <div class="form-group" > 
        <label for="pwd" class="text-center"> Confirmer votre mot de passe </label></br>
    <input type="password"  id="mot_de_passe"  name="mdp2" required >
    <br><br>
    
    </div>
        </div>
          </div>

<input type="submit" name="s" value ="valider" required class="boutton"><br><br>

</div>
 </form>
	</div>

	</div>






  <!--endsectionfooter
       

    <!--Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

</body>
</html>