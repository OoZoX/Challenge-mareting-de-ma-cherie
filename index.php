<?php
#include_once 'code/action/config.php';
$titlePage = 'Playtime Games';
$namePage = 'index';
$valueH1 = "";
?>


<html lang="fr" dir="ltr">
<?php
include 'code/content/head.php';
?>

<body>
    <header>
        <?php include 'code/content/navbar.php'; ?>
    </header>

    <main>

        <div class="row mb2 mt2">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-image">
                        <img  src="img/banner/game.png">
                        <span class="card-title">The design of our mobile game
                        <br> during a marketing challenge</span>
                    </div>
                    <div class="card-content">
                        <p>Our team is made up of students
                            from the Gaming campus school. During a
                            challenge given by our school we have to bring
                            together students from the 2 gaming campus
                            schools, in order to assemble our skills and
                            knowledge for a two day marketing project.
                            The project consists in creating a mobile game
                            related to a game from our childhood. Our
                            mission is to do all the marketing and
                            communication aspects of this game.

                            To start this challenge we first had to find the
                            game. We were inspired by our childhood game
                            "Hen, Fox, Viper".
                            We all played this game when we were little so
                            we were inspired by this game.

                            Then we decided to change the game and make it
                            our own. So we changed the fox and viper hens to
                            elves, dwarves and orcs.</p>
                    </div>
                </div>
            </div>
        </div>

            <div class="row bg-black text-blanc opacity mb2">


                <div class="col s10 offset-s1 xl5 offset-xl1 text-white">
                    <h2 class="home__careers--title">Return to the past</h2>
                    <h5 class="">Let's redefine the
                        Mobile game landscape and join us for a new
                        adventure !</h5>
                    <a href="" title="see more" class="btn
                            btn-dark justify-content-center">See more</a>
                </div>
                <div class="col s10 offset-s1 xl5">
                    <img class="responsive-img" src="assets/img/banner/mobile_game.png" alt="Marketing Challenge Gaming Business school ">

                </div>

            </div>






        <div class="row mb2">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-image">
                        <div class="carousel">
                            <a class="carousel-item" href="#one!"><img src="assets/img/dwarf/dwarf 1.png"></a>
                            <a class="carousel-item" href="#two!"><img src="assets/img/elf/elf 1.png"></a>
                            <a class="carousel-item" href="#three!"><img src="assets/img/orc/orc 1.png"></a>
                            <a class="carousel-item" href="#four!"><img src="assets/img/familier/familier 1.png"></a>
                        </div>
                        <span class="card-title">The design of our mobile game
                        <br> during a marketing challenge</span>
                    </div>
                    <div class="card-content">
                        <p class="card-text center-align">News. Patch notes v-0.1.
                            <br> Catch N' Run. <br> Playtime Game Studio</p>
                        <p class="card-text center-align"><small
                                class="text-body-secondary">On the
                                05-11-2023</small></p>
                    </div>
                    <div class="card-action center-align">
                        <a href="#">PATCH NOTES</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s10 offset-s1">


                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img  src="assets/img/Profil/Louis.png">
                        </div>
                        <div class="card-content">
                            <h4 class="center-align">Bourcier Louis</h4>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img  src="assets/img/Profil/Angie.png">
                        </div>
                        <div class="card-content">
                            <h4 class="center-align">Hribar Angèle</h4>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img  src="assets/img/Profil/matheo.png">
                        </div>
                        <div class="card-content">
                            <h4 class="center-align">Mathéo Renoncet</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s10 offset-s1">


                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img  src="assets/img/Profil/neo.png">
                        </div>
                        <div class="card-content">
                            <h4 class="center-align">Garnier Néo</h4>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img  src="assets/img/Profil/Chloe.png">
                        </div>
                        <div class="card-content">
                            <h4 class="center-align">Lor-Foui Chloé</h4>
                        </div>
                    </div>
                </div>

                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img  src="assets/img/Profil/Seny.png">
                        </div>
                        <div class="card-content">
                            <h4 class="center-align">Benstiti Seny</h4>
                        </div>
                    </div>
                </div>
            </div>



        </div>


    </main>


    <?php
        include 'code/content/footer.php';
        include 'code/content/foot.php'
    ?>

<!--JavaScript at end of body for optimized loading-->
<!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
</body>
</html>
