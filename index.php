<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './vues/templates/head.php' ?>

</head>

<body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- 
    <style>
        body {
            background-repeat: no-repeat;
            background-image: url(assets/images/illus.png);
        }
    </style>

    <form class="Inscription" method="POST">
        <label for="title">Pseudo :</label>
        <input name="title" type="text" required />

        <label for="email"> Email :</label>
        <input name="email" type="email" required />

        <label for="password">Mot de passe :</label>
        <input name="password" type="password" required />

        <label for="editor">Vous êtes :</label>
        <select class="job-select">
            <option value="Chirurgien-dentiste">Chirurgien-dentiste</option>
            <option value="Assistant dentaire">Assistant dentaire</option>
            <option value="Orthodontiste">Orthodontiste</option>
            <option value="Prothésiste dentaire">Prothésiste dentaire</option>
            <option value="Secrétaire">Secrétaire</option>
        </select>

        <input type="submit" value="S'inscrire" />

    </form>


    <form class="Connexion" method="POST">

        <label for="email"> Email :</label>
        <input name="email" type="email" required />

        <label for="password">Mot de passe :</label>
        <input name="password" type="password" required />

        <input type="submit" value="Se connecter" />

    </form> -->


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
            height: 150px;
        }

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
            <fieldset>
                <input id="oCategorieValeur" name="oCategorieValeur" type="hidden" value="0" />
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button id="oCategorie" class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Toutes les catégories</button>
                        <div id="oCategorieListe" class="dropdown-menu">
                            <a class="dropdown-item" data-valeur="0" href="#">Toutes les catégories</a>
                            <a class="dropdown-item" data-valeur="0" href="#">Carries</a>
                            <a class="dropdown-item" data-valeur="1" href="#">Abcés</a>
                            <a class="dropdown-item" data-valeur="2" href="#">... </a>
                        </div>
                    </div>
                    <input id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" placeholder="Mot(s) clé(s)" required="required">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    &nbsp;
    <img src="https://img.icons8.com/external-bearicons-blue-bearicons/64/000000/external-rating-reputation-bearicons-blue-bearicons-1.png"/>
    <img src="https://img.icons8.com/carbon-copy/100/4a90e2/speech-bubble.png"/>
    <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/64/4a90e2/external-chat-user-interface-wanicon-lineal-wanicon.png"/>
    <img src="https://img.icons8.com/external-glyph-vinzence-studio/64/4a90e2/external-communication-social-communication-glyph-vinzence-studio-16.png"/>
    <h1><img src="https://img.icons8.com/external-xnimrodx-blue-xnimrodx/64/000000/external-chat-communication-xnimrodx-blue-xnimrodx.png"/><i class="fa-solid fa-comment" style="font-size:40px;color:lightblue;"></i> Sujets de discussion</h1> 
    &nbsp;
    &nbsp;
    <div class="container">
        <div class="row">
            <div class="col" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.08.03.png" title="dent coeur" alt="image dent coeur"></div>
            <div class="col" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.28.12.png" title="dent coeur" alt="image dent coeur"></div>
            <div class="col" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.15.58.png" title="dent coeur" alt="image dent coeur"></div>
            <div class="col" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.26.38.png" title="dent coeur" alt="image dent coeur"></div>
            <div class="col" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.23.55.png" title="dent coeur" alt="image dent coeur"></div>
            <div class="col" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.19.33.png" title="dent coeur" alt="image dent coeur"></div>
            <div class="col" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.18.34.png" title="dent coeur" alt="image dent coeur"></div>
            <div class="col" id="taille" href="insérer l'URL de destination ici"><img id="img1" src="/assets/images/Capture d’écran 2022-02-09 à 19.07.28.png" title="dent coeur" alt="image dent coeur"></div>

        </div>
        &nbsp;

        <h1><i class="fa-solid fa-file-medical" style="font-size:40px;color:lightblue;"></i> Cas cliniques</h1>
        <img src="https://img.icons8.com/external-konkapp-detailed-outline-konkapp/64/4a90e2/external-medical-report-medical-konkapp-detailed-outline-konkapp.png"/>
        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-medical-report-dental-kiranshastry-lineal-kiranshastry.png"/>
        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-tooth-dental-kiranshastry-lineal-kiranshastry-2.png"/>
        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/000000/external-tooth-dental-kiranshastry-lineal-kiranshastry.png"/>
        <img src="https://img.icons8.com/ios/50/4a90e2/speech-bubble--v1.png"/>
        &nbsp;

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img id="taille2" src="/assets/images/Capture d’écran 2022-02-09 à 19.03.48.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img id="taille2" src="/assets/images/dent2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img id="taille2" src="/assets/images/Capture d’écran 2022-02-09 à 19.14.18.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <img src="https://img.icons8.com/ios/50/4a90e2/speech-bubble--v1.png"/>
                        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/4a90e2/external-tooth-dental-kiranshastry-lineal-kiranshastry-2.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    &nbsp;
    <script>
        $(document).ready(function(e) {
            // Boucler tous les hyperliens de la liste « oCategorieListe »
            // Et capturer le l’événement « click »
            $('#oCategorieListe').find('a').click(function(e) {
                // Prévenir une action
                e.preventDefault();
                // Changer l’étiquette (label) de la liste pour le contenu du lien
                $('#oCategorie').html($(this).html());
                // Assigner la valeur de l’attribut « data-valeur » à l’élément caché (hidden) du formulaire « oCategorieValeur »
                $('#oCategorieValeur').val($(this).attr("data-valeur"));
            });
        });
    </script>
</body>
<!-- Bleu principal: #03B6F0
Bleu secondaire: #BAE6FA -->

</html>