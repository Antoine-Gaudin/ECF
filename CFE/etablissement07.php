<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etablissement</title>
    <link rel="stylesheet" href="stylehotel.php">
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
          <a class="nav-link active" href="connexion.php">connexion</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="inscription.php">inscription</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="reservation.php">reservation</a>
      </li>
  </ul>
</div>
</nav>
  <div class=air></div>
<!--présentation image-->
    <img src="logo.jpeg" alt="" id= "logo">
    <img src="https://www.parisinfo.com/var/otcp/sites/images/media/1.-photos/03.-hebergement-630-x-405/hotel-ritz-facade-nuit-630x405-c-otcp-dr/148554-1-fre-FR/Hotel-Ritz-facade-nuit-630x405-C-OTCP-DR.jpg" alt="" id= imghero>

<!--présentation rapide-->
<div class="presentation">
    <h1>présentation de l'hôtel</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, c
    onsequuntur illo? Numquam, iusto minus, aut ducimus veritatis nemo nam quo mollitia 
    repellendus eum in dignissimos? Asperiores pariatur hic quos minima.</p>
</div>

<!--suite-->

    <h2>nos suites</h2>
    <div class="card mb-3" style="max-width: 1250px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.parisselectbook.com/wp-content/uploads/2018/10/paris-suite-mandarin-royale-suite2.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">suite n°1</h5>
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nihil, voluptatibus doloremque adipisci unde nulla, optio numquam placeat eveniet beatae sequi. Alias aut quas ipsum. Officiis inventore minima sint laudantium!</p>
        <p>PRIX:400€/part nuit</p>
        <a  href="reservation.php" class="btn btn-primary" style="margin-top: 20px">Réserver</a>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 1250px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.parisselectbook.com/wp-content/uploads/2018/10/paris-suite-mandarin-royale-suite2.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">suite n°2</h5>
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nihil, voluptatibus doloremque adipisci unde nulla, optio numquam placeat eveniet beatae sequi. Alias aut quas ipsum. Officiis inventore minima sint laudantium!</p>
        <p>PRIX:400€/part nuit</p>
        <a  href="reservation.php" class="btn btn-primary" style="margin-top: 20px">Réserver</a>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 1250px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.parisselectbook.com/wp-content/uploads/2018/10/paris-suite-mandarin-royale-suite2.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">suite n°3</h5>
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nihil, voluptatibus doloremque adipisci unde nulla, optio numquam placeat eveniet beatae sequi. Alias aut quas ipsum. Officiis inventore minima sint laudantium!</p>
        <p>PRIX:400€/part nuit</p>
        <a  href="reservation.php" class="btn btn-primary" style="margin-top: 20px">Réserver</a>
    </div>
    </div>
  </div>
</div>


<h1>nous contacter</h1>

<form action="">
<div class="margform">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="nom" aria-label="nom">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="prénom" aria-label="prénom">
    </div>
    </div>
    <div class="form-floating mb-3" style="margin-top:20px">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Adresse email</label>
    </div>
    <div class="col-auto" style="margin-top: 20px">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
            <select class="form-select" id="autoSizingSelect">
                <option selected>Aucun sujet</option>
                <option value="1">Je souhaite poser une réclamation</option>
                <option value="2">Je souhaite commander un service supplémentaire</option>
                <option value="3">Je souhaite en savoir plus sur une suite</option>
                <option value="3">J’ai un souci avec cette application</option>
            </select>
    </div>
        <div class="form-floating" style="margin-top:20px;">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Votre message</label>
        </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 20px">envoie du formulaire</button>
</div>
</form>
</body>
</html>