<?php require 'include/init.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/all.css">
    <title>Accueil - Auto École Simiane</title>
    <link rel="shortcut icon" href="images/icone-auto-ecole-simiane-blanc.jpg">

</head>

<body>

    <!-- <?php require 'layout/top.php'; ?> -->

    <div class="section-picture mt-60">
        <img src="images/aes-acceuil-bande-2.png" alt="Pilon du Roy" width="100%">
    </div>

    <div class="page d-flex">
        <?php require 'layout/side-bar.php'; ?>
        <div class="center">


            <!-- ------------ Caroussel ------------ -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height:594px !important;" data-bs-interval="9000">
                        <img src="images/conduite-tradi.jpg" class="d-block w-100" alt="Passez votre permis !" style="height:594px !important;">
                        <div class="carousel-caption d-none d-md-block text-bg-black">
                            <h5 class="titre-bleu">Passer votre permis à Simiane-Collongue</h5>
                            <p>Avec une équipe à la fois professionnelle et sympathique, nous vous proposons une formation de qualité afin d’obtenir votre permis dans les meilleures conditions.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height:594px !important;" data-bs-interval="9000">
                        <img src="images/peugeot-208-bleu-2.jpg" class="d-block w-100" alt="Des véhicules modernes" style="height:594px !important;">
                        <div class="carousel-caption d-none d-md-block text-bg-black">
                            <h5 class="titre-red">Conduisez des voitures modernes</h5>
                            <!-- Revoir la fin de la phrase !  -->
                            <p>Nous vous proposons les derniers modèles de véhicules pour vos séances de conduites pour votre confort et pour que votre apprentissage se passe en toute sérénité.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height:594px !important;" data-bs-interval="9000">
                        <img src="images/heure-conduite.png" class="d-block w-100" alt="Auto Ecole Simiane" style="height:594px !important;">
                        <div class="carousel-caption d-none d-md-block text-bg-black">
                            <h5 class="titre-bleu">AUJOURD’HUI, LE PERMIS DE CONDUIRE EST LA CLÉ DE LA LIBÉRTÉ, INDISPENSABLE À L’INTÉGRATION SOCIALE ET PROFESSIONNELLE.</h5>
                            <p>Obtenir son permis signifie avant tout d’avoir une bonne formation initiale. Cette formation est primordiale pour appréhender sereinement sa future vie d’automobiliste.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon text-bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon text-bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- ------------ Fin du Caroussel ------------ -->
            <br>
            <!-- ------------ Texte ------------ -->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title titre-red text-center">Notre établissement vous propose de vous former dans les meilleures conditions.</h5>
                    <br>
                    <p class="card-text text-center">Tout d’abord par un suivi, pour la formation théorique, avec des cours et des tests de code. Ensuite par la pratique, en appliquant le <strong>REMC</strong> <em>(le Référentiel pour l’Éducation à la Mobilité Citoyenne)</em></p>
                    <p class="card-text text-center titre-bleu">Quatre compétences sont requises :</p>

                    <div class="head-card row justify-content-center">
                        <div class="card me-2 bg-grey" style="width: 18rem; ">
                            <div class="card-body">
                                <p class="card-text text-black">1- Maîtriser le maniement du véhicule dans un trafic faible ou nul.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                        <div class="card me-2 bg-grey" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text text-black">2- Appréhender la route et circuler dans des conditions normales.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                        <div class="card me-2 bg-grey" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text text-black">3- Circuler dans des conditions difficiles et partager la route avec les autres usagers.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                        <div class="card me-2 bg-grey" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text text-black">4- Pratiquer une conduite autonome, sûre et économique.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                    </div>

                </div>
                <!-- <img src="images/Auto Ecole Simiane(Couverture Facebook).png" class="card-img-bottom" alt="..."> -->
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Documents à fournir pour l'inscription
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Documents à fournir pour l'inscription</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            (x1) Photo à réaliser dans un photomaton avec signature numérique (e-photo)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <img src="images/e-photo.jpg" alt="E-Photo" width="300px">
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                (x1) Photocopie de la CNI Recto/Verso ou passeport en cours de validité (élève + représentant légal si mineur)
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <img src="images/carte-identite.jpg" alt="E-Photo" width="300px">

                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                    (x1) Attestation de recensement en Mairie pour les élèves de 16 à 17 ans
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                    (x1) Attestation de participation à la journée d'appel pour les élèves de 17 à 25 ans
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                                    (x1) Justificatif de domicile de moins de 3 mois
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Si le justificatif de domicile n'est pas au nom de l'élève, une attestation d'hébergement sur l'honneur ainsi que la photocopie de la CNI de l'hébergeur seront demandées en complément.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingSix">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                                    <img src="images/svg/alert-octagon.svg" class="me-2">
                                                    Si déjà inscrit en préfecture fournir le justificatif d’inscription (CERFA 02) </button>
                                            </h2>
                                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingSeven">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                                    <img src="images/svg/alert-octagon.svg" class="me-2">
                                                    Si déjà permis autre catégorie fournir une copie du permis.
                                                </button>
                                            </h2>
                                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'layout/bottom.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="script/funtions.js"></script>
</body>

</html>