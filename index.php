<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './vues/templates/head.php' ?>

</head>

<body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
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

    </form> 

