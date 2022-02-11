<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './templates/head.php' ?>


</head>

<body>

    <?php include './templates/header.php' ?>

    <div class="profilcorps">

        <div class="container" id="headerprofil">
            <div class="profilphoto">
                <img src="/assets/images/pp1.png" width="150" height="150">
            </div>

            <div class="profilIS">
                <div class="profilinfo">
                    <div class="profilname">
                        Sam
                    </div>

                    <div class="job">
                        Totally Spies chez le WHOOP
                    </div>
                </div>

                <div class="setting">
                    <div class="modification">
                        <a href="./profil.php">Modifier vos informations</a>

                    </div>
                    <div class="déconnexion">
                        <a href="/index.php">Se déconnecter</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="container" id="fonctionprofile">
            <div class="publication">
                Publication
            </div>
            <div class="discussion">
                Discusion
            </div>
        </div>

        <div class="container" id="imagepublication">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="image1">
                    <div class="col">
                        <div class="card h-100" id="divprofil1">
                            <img id="imageprofil1" src="/assets/images/dent12.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text" id="textprofil1"  >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="image2">
                    <div class="col">
                        <div class="card h-100" id="divprofil2">
                            <img id="imageprofil2" src="/assets/images/dent11.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text" id="textprofil2" >This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

<footer>
    <?php include './templates/footer.php' ?>

</footer>

</html>