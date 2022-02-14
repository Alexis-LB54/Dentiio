
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    #img2 {
        height: 50px;

    }
    footer {
    position: relative;
   
    width: 100%;
   
    height:100px;
   
}
</style>
<footer >

<div class="p-1 bg text-center text-white" style="background-color:#00D1ED;">

        &nbsp;

        <ul class="list-inline">

            <li class="list-inline-item"><a href="/vues/accueil.php" title="Accueil"><i class="fas fa-home fa-2x" style="color:white"></i></a></li> &nbsp; &nbsp;
            <li class="list-inline-item"><a href="/index.php"title="Connexion"><i class="fa-solid fa-right-from-bracket fa-2x" style="color:white"></i></a></li> &nbsp; &nbsp;
            <li class="list-inline-item"><a href="/index.php"title="Inscription"><i class="fa-solid fa-clipboard-list fa-2x" style="color:white"></i></a></li> &nbsp; &nbsp;  
            <li class="list-inline-item"><a href="/vues/profil.php"title="Profil"><i class="fa-solid fa-user-doctor fa-2x" style="color:white"></i></a></li> &nbsp; &nbsp;
            <li class="list-inline-item"><a href="/vues/favori.php"title="Favori"><i class="fa-solid fa-star fa-2x" style="color:white"></i></a></li> &nbsp; &nbsp;
            <li class="list-inline-item"><a href="/index.php"title="Déconnexion" ><i class="fas fa-sign-in-alt fa-2x" style="color:white"></i></a></li>
        </ul>

        <img id="img2" src="/assets/images/dent2.jpg" alt="..." class="rounded-circle" &nbsp;> Dentiio © 2022</p>
    </div>
</footer>




























<script>
    function run_connexion() {
        //window.alert("success !"); => s'affiche je rentre dans ma fonction au clic

        $.ajax({
            url: "./vues/connexion.php",
            dataType: "html",

            success: function(response) {
                //alert("success !");
                document.getElementById("Inscription").innerHTML = response;
            },

            error: function(error) {
                console.log(error);
            }
        });
    }

    function run_inscription() {
        //window.alert("success !"); => s'affiche je rentre dans ma fonction au clic

        $.ajax({
            url: "./vues/inscription.php",
            dataType: "html",

            success: function(response) {
                //alert("success !");
                document.getElementById("Inscription").innerHTML = response;
            },

            error: function(error) {
                console.log(error);
            }
        });
    }

    run_connexion()
    run_inscription();
</script>