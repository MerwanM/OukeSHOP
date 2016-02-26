<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/../css/style.css">
        <link rel="shortcut icon" href="/../img/icon.png">
        <link href="/../css/bootstrap.css" rel="stylesheet">
        <link href="/../css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
		<title>Ouk&eacute;SHOP</title>
	</head>
	<header>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="/../img/logomenu.png" width="150">
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/../index.php">ACCEUIL</a></li>
                        <li class="active"><a href="connexion.php">CONNEXION</a></li>
                        <li><a href="mailto:oukeshop@gmail.com">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>


        </br></br></br>
        <div class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <li>
                                <a href="homme.php">HOMME</a>
                            </li>
                            <li>
                                <a href="femme.php">FEMME</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
	<body>

</br></br></br></br></br>

    <div class="container">
      <div class="wall">


        <div class="row">
          <div class="col-md-offset-2 col-md-10">
              <h1>D&eacute;j&agrave; inscrit ?</br><small>Identifiez-vous </small></h1>
          </div>
        </div>

          <form name="form" action="connexion.php" method="POST">
          <div class="row">
              <div class="col-md-offset-2 col-md-3">
                  <div class="form-group">
                      <label for="Email">Votre email :</label>
                      <input type="text" class="form-control" id="email" placeholder="Email">
                  </div>
              </div>
              <div class="col-md-offset-1 col-md-3">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
          </div>


          <div class="row">
              <div class="col-md-offset-2 col-md-3">
                  <button type="submit" class="btn btn-primary">Connexion</button>
              </div>
          </div>
      </div>
    </div>

</br>
</br>
<hr>
</br>


<div class="container">
    <div class="wall">

        <div class="row">
            <div class="col-md-offset-2 col-md-10">
                <h1>Page d'inscription</br><small>Merci de renseigner vos informations</small></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Nom">
                </div>
            </div>
            <div class="col-md-offset-1 col-md-3">
                <div class="form-group">
                    <label for="Prenom">Pr&eacute;nom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Prenom">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-7">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-7">
                <div class="form-group">
                    <label for="VEmail">V&eacute;rification Email</label>
                    <input type="text" class="form-control" id="Vemail" placeholder="V&eacute;rification Email">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="col-md-offset-1 col-md-3">
                <label for="VPassword">V&eacute;rification Password</label>
                <input type="password" class="form-control" id="Vpassword" placeholder="V&eacute;rification Password">
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-7">
                <div class="form-group">
                    <label for="Adresse">Adresse</label>
                    <input type="text" class="form-control" id="Adresse" placeholder="Adresse">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-7">
                <div class="form-group">
                    <label for="CPAdresse">Cp. d'Adresse</label>
                    <input type="text" class="form-control" id="CPAdresse" placeholder="Compl&eacute;ment d'Adresse">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <div class="form-group">
                    <label for="CP">Code Postal</label>
                    <input type="text" class="form-control" id="CP" placeholder="Code Postal" pattern="[0-9]{5}">
                </div>
            </div>
            <div class="col-md-offset-1 col-md-3">
                <div class="form-group">
                    <label for="Ville">Ville</label>
                    <input type="text" class="form-control" id="Ville" placeholder="Ville">
                </div>
            </div>
        </div>


        </br>

        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-phone"> </span>
                    <input type="text" class="form-control" id="tel" placeholder="Numéro de mobile">
                </div>
            </div>

            <div class="col-md-offset-1 col-md-3">
                <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-globe"> </span>
                    <input type="text" class="form-control" id="adresse" placeholder="Adresse">
                </div>
            </div>
        </div>

        </br>
        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <button type="submit" class="btn btn-primary">Inscription</button>
            </div>
        </div>

        </form>

      </div>
    </div>
  </body>
  <footer>
    
    <?php include 'footer.php';?>

  </footer>
  </html>