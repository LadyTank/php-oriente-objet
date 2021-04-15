<?php require('class/Autoloader.php'); // va appeler toutes class du dossier class
// require('class/Debug.php');
Autoloader::register();
use Outils\Debug;

require_once('inc/functions.php'); ?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="../css/style.css"> -->

    <title>Cours PHP 7 - </title>

</head>

<body class="bg-light">
    <div class="container-fluid p-0 m-0">
        <!-- ========================================= -->
        <!-- Navbar -->
        <!-- ========================================= -->

    </div><!-- fin du container fluid -->

    <!-- ========================================= -->
    <!-- Contenu principal -->
    <!-- ========================================= -->

    <div class="container bg-white p-5">
        <div class="row jumbotron bg-light">
            <div class="col-sm-12">
                <h1 class="text-center">Cours PHP 7 - L'héritage en POO</h1>
                <p class="lead text-center mt-4"></p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>I. Créer un nouvel objet article</span></h2>
                <div>
                    <?php
                    $article1 = new Article('PHP trop cool', 'J\'apprend le PHP avec Régis', '13/04/2021');

                    $article1->info();
                    // via set je modifie la date de publication qui est propriétée (variable dans class) privée
                    $article1->setDatePublication("23-05-1998");

                    jevar_dump($article1);
                    //  le namespace Outils sert à classer de manière plus précise les class. dans le cas de travail avec des collaborateurs, si des class ont le meme nom, les names spaces aideront à les différencier
                    Debug::afficherTableau($article1);

                    ?>

                </div>

            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>II. Un deuxieme objet article</span></h2>

                <?php
                $article2 = new Article('Coucou', 'Mais non tu vas y arriver', '12-04-2021');

                $article2->info();

                jevar_dump($article2);

                ?>
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>III. Créer un héritier Page de la class Article</span></h2>

                <?php

                $page1 = new Page('Bienvenue', 'Voici le contenu', '12-03-2021', 'www.debrouilles_toi.com');

                $page1->info();

                jevar_dump($page1);

                ?>

            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">

                <?php
                $article = new Article()
                ?>

            </div><!-- fin col -->

        </div><!-- fin row -->


    </div> <!-- fin du container -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>