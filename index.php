<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './vues/templates/head.php' ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link rel="stylesheet" href="./assets/style/main.css" />


</head>

<body>
    <style>
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
                    <a href="./vues/profil.php" class="bouttonbleu">S'inscrire</a>
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
    </div>

</body>


<script>

function run(string $param) {
    $.ajax({
        url: '"./vues/'.$param.'.php" ' ;
    })
}


</script>

</html>

