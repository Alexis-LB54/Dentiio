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
                    <button class="modif_et_deco" href="./profil.php" type="button">Modifier vos informations</button>
                </div>

                <div>
                    <button onclick="window.location.href='../index.php'" class="modif_et_deco" href="../index.php" type="button">Se déconnecter</button>

                </div>

            </div>

        </div>


        <div id="fonctionprofile">

            <div>
                <!-- Button trigger modal -->
                <input class="function_button" type="button" value="Publication" data-bs-toggle="modal" data-bs-target="#Publication">
                <!-- Modal -->
                <div class="modal fade" id="Publication" tabindex="-1" aria-labelledby="PublicationLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="PublicationLabel">Vidéo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>Compte rendu de la mission des Totally Spies contre le Dr Max Molaire, Dentiste Criminel :</div>
                                <iframe width="1120" height="630" src="https://www.youtube.com/embed/FagaoAvlvQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <!-- Button trigger modal -->
                <input class="function_button" type="button" value="Discussion" data-bs-toggle="modal" data-bs-target="#Discussion">
                <!-- Modal -->
                <div class="modal fade" id="Discussion" tabindex="-1" aria-labelledby="DiscussionLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DiscussionLabel">Messagerie</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php include './discussion.php' ?>
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