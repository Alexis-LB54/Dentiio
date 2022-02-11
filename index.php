<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './vues/templates/head.php' ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link rel="stylesheet" href="./assets/style/main.css" />


</head>

<body>

    <img style="height:100px;text-align:right; text-align:center;" src="assets/images/logoblue.png"> <br>


    <div class="flex-body" style="display:flex; flex-direction:row; justify-content:center;">

        <div class="flexx" style="display:flex; flex-direction:row; justify-content:flex-start; width: 50%;">
            <div>
                <img style="height:800px;" src="assets/images/illus.png">
            </div>
        </div>


         <div>
            <div class="Accueil">
                <div class="Formulaire" id="Inscription">

                    <form method="POST">

                        <h1>Inscription</h1>

                        <div>
                            <label for="title">Pseudo :</label>
                        </div>

                        <div>
                            <input name="title" type="text" required />
                        </div>

                        <div>
                            <label for="email"> Email :</label>
                        </div>

                        <div>
                            <input name="email" type="email" required />
                        </div>

                        <div>
                            <label for="password">Mot de passe :</label>
                        </div>

                        <div>
                            <input name="password" type="password" required />
                        </div>

                        <div>
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

                        <div>
                            <a href="#" type="submit" class="bouttonbleu">S'inscrire</a>
                        </div>

                        <div>
                         <input class="mybouton" type="button" value=" Déjà un compte? par ici !" onclick="run_connexion()" />
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="Accueil">
         <div class="Formulaire" id="connexion">

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

<?php include './vues/templates/footer.php' ?>

</html>

