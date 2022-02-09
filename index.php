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

    <div class="Inscription">
        <div class="Formulaire" >
            <form method="POST">

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

                <div>
                    <input type="submit" value="S'inscrire" />
                </div>

            </form>
        </div>
    </div>



    <!-- 
    <div>
        <form class="Connexion" method="POST">

            <label for="email"> Email :</label>
            <input name="email" type="email" required />

            <label for="password">Mot de passe :</label>
            <input name="password" type="password" required />

            <input type="submit" value="Se connecter" />

        </form>
    </div> -->

</body>

</html>