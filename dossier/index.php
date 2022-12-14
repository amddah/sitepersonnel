<!doctype html>
<html lang="en">
  <head>
    <title>Contactez-moi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-$white">
    <div class="container-fluid   " >
      <span class="navbar-brand fw-bold ms-10px " >Abdelkbir <span style="color:rgb(239, 18, 210);"> Amddah</span></span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active  px-4" aria-current="page" href="../index.html">Accuiel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active  px-4" aria-current="page" href="../index.html#about">À propos de moi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active  px-4" aria-current="page" href="../index.html#mesprojet">Mes projet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active  px-4" aria-current="page" href="../index.html#Education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active  px-4" aria-current="page" href="../index.html#skill">Compétences</a>
          </li>
          <li class="nav-item">
           <a class="nav-link active px-4" href="contact.html">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!--***/nav-->
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-8 m-4">
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <div class="text-center">
                            <h1>Contactez-moi ! </h1>
                        </div>
                        <div class="d-flex">
                            <input type="text" name="surname" placeholder="votre Nom" id="nom"  class="form-control"/>
                            <input type="text" name="firstname" placeholder="votre Prénom"  id="prenom" class="form-control"/>
                        </div>
                        <br/>
                        <input type="email" name="email" placeholder=" votre Email" id="mail" class="form-control"/>
                        <br/>
                        <input type="tel" name="tel" placeholder="votre numero de tel"  class="form-control"/>
                        <br/>
                        <textarea rows="10" name="message" placeholder="Votre message" id="message" class="form-control"></textarea>
                        <br/>
                        <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    </div>
                </form>
                <div class="formerreur" id="formerreur"></div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
