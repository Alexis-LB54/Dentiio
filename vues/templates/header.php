<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">


</head>

<style>
    #img3 {
        height: 50px;
        float: right;
    }
</style>

<body>


    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#00D1ED; height:115px;">
        <div class="container-fluid">

            <div class="flex-avatar">

                <a href="/vues/profil.php" title="Profil"><img src="../../assets/images/avatar.png" style="height:70px;margin-right:40px;margin-left:20px;"></a>
                <a href="/vues/accueil.php" title="Accueil"><img src="../../assets/images/home.png" style="height:60px; margin:20px;"></a>
                <a href="/vues/favori.php" title="Favori"><img src="../../assets/images/star.png" style="height:60px;margin:20px;"></a>
                <a class="btn mt-1" data-toggle="modal" data-target="#modal" href="ton lien"title="Notification" ><img src="../../assets/images/bell.ico" style="height:60px;margin:20px;"></a>

                <!-- Le modal -->

                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal">

                            </div>
                            <div class="modal-body">
                                <img  src="/assets/images/dent2.jpg" style="height:40px;" alt="..." class="rounded-circle"> &nbsp; Amélie
                                <pre>      a laissé un commentaire  <img id="img3" src="/assets/images/dent10.jpg" class="border border-info" title="dent coeur" alt="image dent"></pre>
                                <hr>
                                <img  src='/assets/images/dent2.jpg' alt='...' class='rounded-circle image'> &nbsp; Alexis 
                                <pre>      a commenté votre cas  <img id='img3' src='/assets/images/dent10.jpg' class='border border-info' title='dent coeur' alt='image dent'></pre>
                                <hr>
                                <img  src='/assets/images/dent2.jpg' alt='...' class='rounded-circle image'> &nbsp; Adeline
                                <pre>      à participé à votre discussion <img id='img3' src='/assets/images/dent10.jpg' class='border border-info' title='dent coeur' alt='image dent'></pre>
                                <hr>">

                    <div class="bell-body"><img src="../../assets/images/bell.ico" style="height:60px;margin:20px;"></div>
                </button>

            </div>

            <div class="flex-logo">
                <img src="../../assets/images/logoBlancComplet.png" style="height:100px;">
            </div>

            <div class="flex-add">
                <a href="ton lien"> <img src="../../assets/images/boutonadd.png" style="height:60px; margin:20px"></a>
            </div>

        </div>
    </nav>



    <script>

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl, {
                html: true
            })
        });

        $(function () {
        $('[data-toggle="popover"]').popover()
      })

    </script>


</body>

</html>