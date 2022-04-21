<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etablissement</title>
    <link rel="stylesheet" href="style.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
  <!--Logo  -->

  <Nav class="navbar navbar-dark bg-dark navbar-expand-lg">
         <a class="navbar-brand" href="index.php">HYPNOS</a>

<!--Icône responsive--> 

         <button

         class="navbar-toggler" 
         type="button" 
         data-bs-toggle="collapse" 
         data-bs-target="#navbarNavDropdown" 
         aria-controls="navbarNavDropdown" 
         aria-expanded="false" 
         aria-label="Toggle navigation"
         >

        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            width="16" 
            height="16" 
            fill="currentColor" 
            class="bi bi-hdd-stack-fill" 
            viewBox="0 0 16 16">

            <path d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z"/>
        </svg>

        </button>

<!--Bouton menu-->

<div class="collapse navbar-collapse" id= navbarNavDropdown>
  <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="connexion.php">connection</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="inscription.php">inscription</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="reservation.php">reservation</a>
      </li>
  </ul>
</div>
</div>
</nav>
<h5>CONNECTION</h5>
        <div id="connect">
            
            <form action="">
                <label for="floatingInput">Adresse email</label>
                <input type="email" class="form-control" id="floatingInput" placeholder="Adresse mail">
                <label for="floatingInput">Mot de passe</label>
                <input type="password" class="form-control" id="floatingInput" placeholder="Mot de passe">
            </form>
        <button type="submit" class="btn btn-primary" style="margin-top: 30px">connection</button>
        </div>
</body>
</html>
