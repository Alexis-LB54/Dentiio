<!DOCTYPE html>
<html lang="fr">

<head>


    <?php include './templates/head.php' ?>


</head>

<?php include './templates/header.php' ?>

<body>

    <style>
        body {
            margin-top: 20px;
        }

        h1 {
            color: #03B6F0;
            text-align: center;
        }

        #img1 {
            max-width: 100%;
            max-height: 90%;
            border-radius: 20px;
            height: 350px;
        }

        #img2 {
            height: 35px;
        }



        /* .offcanvas {
                    translate: 0px 120px;
                } */

        #taille2 {
            height: 350px;
        }
    </style>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <br>

    <br>
    <div class="container">
        <form>

            <input id="oCategorieValeur" name="oCategorieValeur" type="hidden" value="0" />
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <button id="oCategorie" class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Toutes les cat??gories</button> -->
                    <a class="btn btn-info dropdown-toggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Toutes les cat??gories
                    </a>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">RECHECHE PAR CATEGORIE</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            &nbsp;
                            <div>

                                <pre> Pathologie                      <a href="/assets/images/Dent smoke.png"><i style="color:#03B6F0" class="fa-solid fa-angle-right"></i></a></pre>
                                <pre> Traitement                      <a href="ton lien"><i style="color:#03B6F0" class="fa-solid fa-angle-right"></i></a></pre>
                                <pre> Sp??cialit??                      <a href="ton lien"><i style="color:#03B6F0" class="fa-solid fa-angle-right"></i></a></pre>
                                <pre> Anatomie                        <a href="ton lien"><i style="color:#03B6F0" class="fa-solid fa-angle-right"></i></a></pre>


                            </div>

                        </div>
                    </div>
                </div>
                <input id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots cl??s" placeholder="Mot(s) cl??(s)" required="required">
                <div class="input-group-append">
                    <button class="btn btn-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>

        </form>
    </div>
    <br>

    &nbsp;
    <br>
    <h1><img src="https://img.icons8.com/external-bearicons-blue-bearicons/64/000000/external-rating-reputation-bearicons-blue-bearicons-1.png" />&nbsp;</i> Sujets de discussion</h1>
    &nbsp;
    <br>
    &nbsp;
    <div class="container">
        <div class="row">

            <!-- Carousel -->
            <div class="d-flex justify-content-center">
                <div id="demo" class="carousel slide" style="width:350px" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                        <img id="img1" src="/assets/images/dent10.jpg" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>
                        <div class="carousel-item">
                        <img id="img1" src="/assets/images/dent8.png" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>
                        <div class="carousel-item">
                        <img id="img1" src="/assets/images/dent5.png" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>
                        <div class="carousel-item">
                        <img id="img1" src="/assets/images/Dent vise.png" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>
                        <div class="carousel-item">
                        <img id="img1" src="/assets/images/dent9.png" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>
                        <div class="carousel-item">
                        <img id="img1" src="/assets/images/dent7.png" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>
                        <div class="carousel-item">
                        <img id="img1" src="/assets/images/dent6.png" class="border border-info" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>
                        <div class="carousel-item">
                        <img id="img1" src="/assets/images/dent beurk.png" class="border border-info" title="dent coeur" alt="image dent coeur">
                        </div>

                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>


            </div>


        </div>
        &nbsp;


        <h1><img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-medical-report-dental-kiranshastry-lineal-kiranshastry.png" />&nbsp;</i> Cas cliniques</h1>

        &nbsp;

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 border border-info">
                    <img id="taille2" src="/assets/images/dent12.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <img id="img2" src="/assets/images/dent2.jpg" alt="..." class="rounded-circle">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <img id="img2" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-tooth-dental-kiranshastry-lineal-kiranshastry-2.png" />
                        <img id="img2" src="https://img.icons8.com/ios/50/4a90e2/speech-bubble--v1.png" />
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border border-info">
                    <img id="taille2" src="/assets/images/dent2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has gpporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <img id="img2" src="/assets/images/dent2.jpg" alt="..." class="rounded-circle">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <img id="img2" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-tooth-dental-kiranshastry-lineal-kiranshastry-2.png" />
                        <img id="img2" src="https://img.icons8.com/ios/50/4a90e2/speech-bubble--v1.png" />
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border border-info">
                    <img id="taille2" src="/assets/images/dent11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <img id="img2" src="/assets/images/dent2.jpg" alt="..." class="rounded-circle">
                        <small class="text-muted">Last 3 mins ago</small> &nbsp;
                        <img id="img2" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-tooth-dental-kiranshastry-lineal-kiranshastry-2.png" />
                        <img id="img2" src="https://img.icons8.com/ios/50/4a90e2/speech-bubble--v1.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    &nbsp;
    <?php include './templates/footer.php' ?>

    <script>
        //barre de recherche ne fonctionne pas
        $(document).ready(function(e) {
            // Boucler tous les hyperliens de la liste ?? oCategorieListe ??
            // Et capturer le l?????v??nement ?? click ??
            $('#oCategorieListe').find('a').click(function(e) {
                // Pr??venir une action
                e.preventDefault();
                // Changer l?????tiquette (label) de la liste pour le contenu du lien
                $('#oCategorie').html($(this).html());
                // Assigner la valeur de l???attribut ?? data-valeur ?? ?? l?????l??ment cach?? (hidden) du formulaire ?? oCategorieValeur ??
                $('#oCategorieValeur').val($(this).attr("data-valeur"));
            });
        });
    </script>
</body>
<!-- Bleu principal: #03B6F0
 Bleu secondaire: #BAE6FA -->

</html>