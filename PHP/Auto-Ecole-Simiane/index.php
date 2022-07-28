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

    <?php require 'layout/top.php'; ?>

    <div class="section-picture">
        <img src="images/aes-conduite-accompagnee-bande.png" alt="Pilon du Roy" width="100%">
        <div class="container container-fixed">
            <div class="col col-md-3 pilon">
                <p class="pilon-text d-flex align-items-center">
                    <img src="images/svg/camera.svg" alt="">
                    Pilon du Roi
                </p>
            </div>
            <div class="col col-md-3 ident-page">
                <!-- <h3 class="text-pilon">Accueil</h3> -->
            </div>
        </div>
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
                    <div class="carousel-item active" style="height:594px !important;" data-bs-interval="7000">
                        <img src="images/conduite-tradi.jpg" class="d-block w-100" alt="Passez votre permis !">
                        <div class="carousel-caption d-none d-md-block text-bg-black">
                            <h5 class="titre-bleu">Passer votre permis à Simiane-Collongue</h5>
                            <p>Avec une équipe à la fois professionnelle et sympathique, nous vous proposons une formation de qualité afin d’obtenir votre permis dans les meilleures conditions.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height:594px !important;" data-bs-interval="7000">
                        <img src="images/peugeot-208-bleu-2.jpg" class="d-block w-100" alt="Des véhicules modernes">
                        <div class="carousel-caption d-none d-md-block text-bg-black">
                            <h5 class="titre-red">Conduisez des voitures modernes</h5>
                            <!-- Revoir la fin de la phrase !  -->
                            <p>Nous vous proposons les derniers modèles de véhicules pour vos séances de conduites pour votre confort et pour que votre apprentissage se passe en toute sérénité.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height:594px !important;" data-bs-interval="9000">
                        <img src="images/heure-conduite.png" class="d-block w-100" alt="Auto Ecole Simiane">
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
                    <p class="card-text text-center">Tout d’abord par un suivi, pour la formation théorique, avec des cours et des tests de code. Ensuite par la pratique, en appliquant le Programme National de Formation: le <strong>REMC</strong> <em>(le Référentiel pour l’Éducation à la Mobilité Citoyenne)</em></p>
                    <p class="card-text text-center titre-bleu">Quatre compétences sont requises :</p>

                    <div class="head-card row justify-content-center">
                        <div class="card me-2" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">1- Maîtriser le maniement du véhicule dans un trafic faible ou nul.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                        <div class="card me-2" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">2- Appréhender la route et circuler dans des conditions normales.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                        <div class="card me-2" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">3- Circuler dans des conditions difficiles et partager la route avec les autres usagers.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                        <div class="card me-2" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">4- Pratiquer une conduite autonome, sûre et économique.</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>

                </div>
                <img src="images/Auto Ecole Simiane(Couverture Facebook).png" class="card-img-bottom" alt="...">
            </div>
        </div>
    </div>

    
    <?php require 'layout/bottom.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="script/funtions.js"></script>
</body>

</html>