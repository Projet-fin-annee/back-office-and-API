<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/css/bo-form.css" />

  <title>Ajouter un pays</title>
</head>

<body>
  <div class="header">
    <a href="index.php?url=countries">
      <img src="assets/img/back.svg" alt="" />
    </a>
  </div>
  <div class="container">
    <h1 class="title">
      À toi d'ajouter les données grâce à ce formulaire :
    </h1>
    <form class="form">
      <div class="form-group">
        <label for="countrie">Pays</label>
        <input type="text" class="form-control" id="countrie" />
      </div>
      <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" />
      </div>
      <div class="form-group">
        <label for="text">Texte</label>
        <textarea class="form-control" id="text"></textarea>
      </div>

      <div class="form-group">
        <label for="text">Image :</label>
        <input type="file" accept=".png,.jpeg" aria-describedby="image" />

        <small id="image" class="form-text text-muted">Formats acceptés : .png .jpeg
        </small>
      </div>

      <div class="form-group">
        <label for="text">Video :</label>
        <input type="file" accept=".mp4,.mp3" aria-describedby="video" />
        <small id="image" class="form-text text-muted">Formats acceptés : .mp3 .mp4
        </small>
      </div>

      <button type="submit" class="btn btn-primary">
        Envoyer dans l'API
      </button>
    </form>
  </div>
</body>

</html>