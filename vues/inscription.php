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