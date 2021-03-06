<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="src/styles/css/form.css" />
  <title>Ajouter une définition</title>
</head>

<body>
  <div class="header">
    <a href="index.php?url=definition">
      <img src="assets/img/back.svg" alt="" />
    </a>
  </div>
  <div class="container">
    <h1 class="title">
      À toi d'ajouter les données grâce à ce formulaire :
    </h1>
    <form class="form" action="index.php?url=newdefinition" method="post">
      <div class="form-group">
        <label for="title">Mot à définir</label>
        <input type="text" class="form-control" id="title" name="word" />
      </div>
      <div class="form-group">
        <label for="text">Texte</label>
        <textarea class="form-control" id="text" name="text"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">
        Envoyer dans l'API
      </button>
    </form>
  </div>
</body>

</html>