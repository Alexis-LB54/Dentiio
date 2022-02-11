<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page favoris</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
<?php include './templates/header.php' ?>

<body>

  <style>
    body {
      margin-top: auto;
    }

    h1 {
      color: #03B6F0;
      text-align: center;
    }


    #img2 {
      height: 35px;
    }

    #taille {
      height: 335px;
    }
  </style>



  <br>
  <br>
  <br>
  <h1><img src="https://img.icons8.com/ios/50/4a90e2/likes-folder--v1.png" /></i> VOS FAVORIS</h1>

  &nbsp;
  <br>
  &nbsp;
  <br>
  <br>
  <br>
  <div class="d-flex justify-content-evenly d-flex justify-content-around ">

    <div class="card border border-info" style="width: 20rem;">
      <img id="taille" src="/assets/images/dent beurk.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer d-flex justify-content-around">
        <img id="img2" src="/assets/images/dent2.jpg" alt="..." class="rounded-circle">
        <small class="text-muted">Last 3 mins ago</small> &nbsp;
        <img id="img2" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-tooth-dental-kiranshastry-lineal-kiranshastry-2.png" />
        <img id="img2" src="https://img.icons8.com/ios/50/4a90e2/speech-bubble--v1.png" />
      </div>
    </div> &nbsp;

    <div class="card border border-info" style="width: 20rem;">
      <img id="taille" src="/assets/images/dent selfie.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer d-flex justify-content-around">
        <img id="img2" src="/assets/images/dent2.jpg" alt="..." class="rounded-circle">
        <small class="text-muted">Last 3 mins ago</small> &nbsp;
        <img id="img2" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-tooth-dental-kiranshastry-lineal-kiranshastry-2.png" />
        <img id="img2" src="https://img.icons8.com/ios/50/4a90e2/speech-bubble--v1.png" />
      </div>
    </div>
  </div>


  &nbsp;



</body>
<?php include './templates/footer.php' ?>
</html>