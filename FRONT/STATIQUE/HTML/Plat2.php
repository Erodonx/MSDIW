<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid parallax">
        <div id="header"></div>
        <div class="row background" id="platbg">
        </div>
        <div class="row" id="saladestext">
            <div class="col-12">
                <p class="h2 text-center px-5 pt-2 text-light">Les Salades</p>
            </div>
        </div>
        <div class="row pt-2 mx-0" id="salades">
            <div class="row px-5">
                <div class="row row-cols-1 row-md-cols-2 pt-4">
                    <div class="col-12 col-lg-6 px-4 pb-4 justify-content-right">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/cesar_salad.jpg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                                        <p class="card-text text-light text-left">Une salade césar, avec oeufs,
                                            poulet et une bonne petite vinaigrette!</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/cesar_salad.jpg" />
                                            <input type="hidden" name="platdesc" value="Une salade césar, avec oeufs,
                                            poulet et une bonne petite vinaigrette!" />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 justify-content-left px-4 pb-4">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <row-cols-1 row-md-cols-2-->
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/salad1.png"
                                            alt="Card images Pinterest">

                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                                        <p class="card-text text-light text-left">Salades mystère, avec un
                                            ingrédient secret, pour ceux qui veulent découvrir une expérience.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/salad1.png" />
                                            <input type="hidden" name="platdesc" value="Salades mystère, avec un
                                            ingrédient secret, pour ceux qui veulent découvrir une expérience." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex  row-cols-1 row-md-cols-2">
                    <div class="col-12 col-lg-6 py-4 px-4 d-flex justify-content-right">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/Saladederiz.jpg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                                        <p class="card-text text-light text-left">Salade de riz, fraiche avec
                                            du thon, idéale lors d'une journée bien ensoleillée.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/Saladederiz.jpg" />
                                            <input type="hidden" name="platdesc" value="Salade de riz, fraiche avec
                                            du thon, idéale lors d'une journée bien ensoleillée." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 py-4 px-4 justify-content-left d-flex">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/saladepates.jpeg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pb-3 position-static">
                                        <p class="card-text text-light text-left">Une salade de pâtes fraiches,
                                            sans prétention avec quelques légumes frais du potager.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/saladepates.jpeg" />
                                            <input type="hidden" name="platdesc" value="Une salade de pâtes fraiches,
                                            sans prétention avec quelques légumes frais du potager." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="wrapstext">
            <div class="col-12">
                <p class="h2 text-center px-5 pt-2 text-light">Les wraps</p>
            </div>
        </div>
        <div class="row pt-2 mx-0" id="wraps">
            <div class="row px-5">
                <div class="row d-flex  row-cols-1 row-md-cols-2 pt-4">
                    <div class="col-12 col-lg-6 px-4 pb-4 d-flex justify-content-right">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/Saumonwrap.jpeg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pb-3 position-static">
                                        <p class="card-text text-light text-left">Wraps au saumon, avec du
                                            fromage frais, de la bonne feta grecque.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/Saumonwrap.jpeg" />
                                            <input type="hidden" name="platdesc" value="Wraps au saumon, avec du
                                            fromage frais, de la bonne feta grecque." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 justify-content-left px-4 pb-4 d-flex">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <row-cols-1 row-md-cols-2-->
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/Food-Name-3461.jpg"
                                            alt="Card images Pinterest">

                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pb-3 position-static">
                                        <p class="card-text text-light text-left">wraps poulet, avec le
                                            classique salades, tomates et oignons, et ouais on fait comme au kébab ici!
                                        </p>
                                        <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/Food-Name-3461.jpg" />
                                            <input type="hidden" name="platdesc" value="wraps poulet, avec le
                                            classique salades, tomates et oignons, et ouais on fait comme au kébab ici!" />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex  row-cols-1 row-md-cols-2">
                    <div class="col-12 col-lg-6 py-4 px-4 d-flex justify-content-right">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/wrapsmerguez.jpg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                                        <p class="card-text text-light text-left">Wraps merguez et oeuf,
                                            celui-ci est cuit, idéal pour ceux qui veulent tenter une expérience.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/wrapsmerguez.jpg" />
                                            <input type="hidden" name="platdesc" value="Wraps merguez et oeuf,
                                            celui-ci est cuit, idéal pour ceux qui veulent tenter une expérience." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 py-4 px-4 justify-content-left d-flex">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/wrapsthons.jpeg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pb-3 position-static">
                                        <p class="card-text text-light text-left">Wraps au thons avec de la
                                            crème faite maison, venez, decouvrez ce régal par vous-même!</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/wrapsthons.jpeg" />
                                            <input type="hidden" name="platdesc" value="Wraps au thons avec de la
                                            crème faite maison, venez, decouvrez ce régal par vous-même!" />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="pizzastext">
            <div class="col-12">
                <p class="h2 text-center px-5 pt-2 text-light">Les pizzas</p>
            </div>
        </div>
        <div class="row pt-2 mx-0" id="pizzas">
            <div class="row px-5">
                <div class="row row-cols-1 row-md-cols-2 pt-4">
                    <div class="col-12 col-lg-6 px-4 pb-4 justify-content-right">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/pizza-margherita.jpg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                                        <p class="card-text text-light text-left">Pizza margherita, un
                                            classique qui saura stimuler vos papilles gustatives et vous plonger dans
                                            une extase profonde.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/pizza-margherita.jpg" />
                                            <input type="hidden" name="platdesc" value="Pizza margherita, un
                                            classique qui saura stimuler vos papilles gustatives et vous plonger dans
                                            une extase profonde." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 justify-content-left px-4 pb-4">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <row-cols-1 row-md-cols-2-->
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/pizza-salmon.png"
                                            alt="Card images Pinterest">

                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                                        <p class="card-text text-light text-left">La Salmonellose, une pizza
                                            au saumon fraiche, qui saura vous combler et vous satisfaire.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/pizza-salmon.png" />
                                            <input type="hidden" name="platdesc" value="La Salmonellose, une pizza
                                            au saumon fraiche, qui saura vous combler et vous satisfaire." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex  row-cols-1 row-md-cols-2">
                    <div class="col-12 col-lg-6 py-4 px-4 d-flex justify-content-right">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/pizzakebab.png"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                                        <p class="card-text text-light text-left">Pizza kébab, un choc
                                            culturel ainsi que gustatif, un vrai régal avec une sauce kebab indémodable
                                        </p>
                                        <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/pizzakebab.png" />
                                            <input type="hidden" name="platdesc" value="Pizza kébab, un choc
                                            culturel ainsi que gustatif, un vrai régal avec une sauce kebab indémodable" />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 py-4 px-4 justify-content-left d-flex">
                        <div class="card bg-dark rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="card-img-bottom"
                                            src="../BOOTSTRAP/Assets/food/resized/pizzaorientale.jpg"
                                            alt="Card images Pinterest">
                                    </div>
                                    <div class="col-8 px-5 px-lg-0 pb-3 position-static">
                                        <p class="card-text text-light text-left">Pizza orientale, avec
                                            merguez et des bons légumes frais du potager ainsi que du fromage.</p>
                                            <form action="Commande.php" method="POST">
                                            <input type="hidden" name="platsrc" value="../BOOTSTRAP/Assets/food/resized/pizzaorientale.jpg" />
                                            <input type="hidden" name="platdesc" value="Pizza orientale, avec
                                            merguez et des bons légumes frais du potager ainsi que du fromage." />
                                        <input type="submit" class="btn btn-primary text-center position-absolute commands"
                                            value="Commander">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5" id="hamburgercarousel">
            <div class="col-4 justify-content-left d-flex">
                <a href="Plat.html">
                    <button type="button" class="btn btn-secondary btn-lg" role="button">Précédent</button></a>
            </div>
            <div class="col-4"></div>
            <div class="col-4 d-flex justify-content-end">
                <a href="#">
                <button type="button" class="btn btn-secondary btn-lg" role="button">Suivant</button>
            </a>
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->

       
        <div id="footer">
        </div>
    </div>
 
<?php
session_start();
?>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="../Javascript/Javascript_platphp.js" defer></script>
</body>

</html>