<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './vues/templates/head.php' ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link rel="stylesheet" href="./assets/style/main.css" />


</head>

<body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <style>
        body {
            background-repeat: no-repeat;
            background-image: url(assets/images/illus.png);
        }
    </style>

    <div class="Accueil">
        <div class="Formulaire" id="inscription">
            <form method="POST">
                
                <h1>Inscription</h1>


                <div >
                    <label for="title">Pseudo :</label>
                </div>


                <div>
                    <input name="title" type="text" required />
                </div>

                <div >
                    <label for="email"> Email :</label>
                </div>

                <div>
                    <input name="email" type="email" required />
                </div>

                <div >
                    <label for="password">Mot de passe :</label>
                </div>

                <div >
                    <input name="password" type="password" required />
                </div>

                <div >
                    <div>
                        <label for="editor">Vous êtes :</label>
                    </div>
                    <div>
                        <select class="job-select">
                            <option value="Chirurgien-dentiste">Chirurgien-dentiste</option>
                            <option value="Assistant dentaire">Assistant dentaire</option>
                            <option value="Orthodontiste">Orthodontiste</option>
                            <option value="Prothésiste dentaire">Prothésiste dentaire</option>
                            <option value="Secrétaire">Secrétaire</option>
                        </select>
                    </div>
                </div>

                    <div >
                    <a href="#" class="bouttonbleu">S'inscrire</a>
                    </div>

                <div>
                    Déjà un compte?
                    <input class="mybouton" type="submit" value="Connectez-vous !" />
                </div>

            </form>
        </div>
    </div>




    <div class="Accueil">
        <!-- <div class="Formulaire" id="connexion">
            <form method="POST">
                
                <h1>Connexion</h1>
                
                <div >
                    <label for="email"> Email :</label>
                </div>

                <div >
                    <input name="email" type="email" required />
                </div>

                <div >
                    <label for="password">Mot de passe :</label>
                </div>

                <div >
                    <input name="password" type="password" required />
                </div>

                <div>
                <a href="#" class="bouttonbleu">Connexion</a>
                </div>

                <div>
                    Pas de compte ?
                    <input class="mybouton" type="submit" value="Inscrivez-vous !" />
                </div>

            </form>
        </div> -->
    <!-- </div>

</body> -->


    <!-- <script>

function run(string $param) {
    $.ajax({
        url: '"./vues/'.$param.'.php" ' ;
    })
}


</script> -->

    <!-- </form>  -->


    <!-- noublie pas de enlever les commentaire avec de faire un truc sur githut!! -->



    <!DOCTYPE html>
    <html lang="en">

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

    <body>



        <body>

            <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#00D1ED; height:115px;">
                <div class="container-fluid">

                    <div class="flex-avatar">

                        <a href="google.fr"><img src="../../assets/images/avatar.png" style="height:70px;margin-right:40px;margin-left:20px;"></a>
                        <a href="google.fr"><img src="../../assets/images/home.png" style="height:60px; margin:20px;"></a>
                        <a href="google.fr"><img src="../../assets/images/star.png" style="height:60px;margin:20px;"></a>
                        <a href="google.fr"><img src="../../assets/images/bell.ico" style="height:60px;margin:20px;"></a>

                    </div>

                    <div class="flex-logo">

                        <img src="../../assets/images/logoBlancComplet.png" style="height:100px;">

                    </div>

                    <div class="flex-add">

                        <a href="google.fr"> <img src="../../assets/images/boutonadd.png" style="height:60px; margin:20px"></a>

                    </div>


                </div>

            </nav>



           