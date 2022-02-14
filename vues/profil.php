<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './templates/head.php' ?>


</head>

<body>

    <?php include './templates/header.php' ?>

    <div class="profilcorps">

        <div class="contenant">

            <!-- <div id="headerprofil"> -->

            <!-- <div class="header2"> -->

            <div>
                <img class="image_profil" src="/assets/images/pp1.png" width="150" height="150">
            </div>

            <div>
                <div>
                    <h1>Sam</hi>
                </div>

                <div>
                    <p class="job">Totally Spies chez le WHOOP</p>
                </div>
            </div>

            <div class="setting">

                <div>
                    <input href="./profil.php" class="modif_et_deco" type="button" value="Modifier vos informations">
                </div>

                <div>
                    <input href="./index.php" class="modif_et_deco" type="button" value="Se deconnecter">
                </div>

            </div>

        </div>

        <div id="fonctionprofile">

            <div>
                <input href="./profil.php" class="function_button" type="button" value="Publication">
            </div>

            <div>
                <!-- Button trigger modal -->
                <input class="function_button" type="button" value="Discussion" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Messagerie</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- <img src="/assets/images/discussion.png" alt="" width="1100" height="700"> -->
                                <?php include './favori.php' ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <div id="imagepublication">

        <div class="imagepublication">

            <div class="">
                <div class="">
                    <div class="card-body">

                        <img id="imageprofil1" src="/assets/images/dent12.png" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" id="textprofil1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>

                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>

                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <div class="card-body">

                        <img id="imageprofil1" src="/assets/images/dent12.png" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text" id="textprofil1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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




    </div>

    </div>


</body>

<footer>
    <?php include './templates/footer.php' ?>

</footer>

</html>