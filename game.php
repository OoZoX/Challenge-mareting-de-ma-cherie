<?php
#include_once 'code/action/config.php';
$titlePage = 'Catch N Run';
$namePage = 'game';
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

    <div class="row mt2">
        <div class="col s12 l6 offset-l3">
            <div class="card">
                <div class="card-image">
                    <div class="video-container">
                        <iframe class="videoPadding" width="800px" height="600px" src="https://www.youtube.com/embed/uzr6XQ0h0Uw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    </div>

                </div>
                <div class="card-content">
                    <h5 class="center-align ">
                        Relive your childhood in an instant and become the child you once were.
                        <br/>
                        Discover our "Poule, Renard, Vipère" gamification game so you can still be a child while using today's technology.

                </div>
            </div>
        </div>
    </div>

    <div class="row mb2 mt2">
        <div class="col s12 l6 offset-l3">
            <div class="card">
                <div class="card-content">
                    <h2 class="center-align">Rules of Catch N' Run © playtime Games Studio</h2>
                    <p class="justify">There are 3 sides: orc, elf, and dwarf. each side can only hunt one other side and is only hunted by one other side

                        In each game, there is only 1 human joe per team (unless 2v2v2 or 3v3v3) and lots of neutral bots on the map. At the beginning the goal is to hit the neutral bots to convert them into your team.
                        Then there are 2 ways to win: either at the end of the time limit (10 min) the one who has the most people in his team (not captured) wins</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb2 mt2">
        <div class="col s12 l6 offset-l3">
            <div class="card">

                <div class="card-content">
                    <h2 class="center-align">Content in Catch N'Run</h2>

                </div>


                <div class="card-image">
                    <img  src="assets/img/content/dwarf.png"/>
                    <img  src="assets/img/content/elf.png"/>
                    <img  src="assets/img/content/orc.png"/>
                    <img  src="assets/img/content/pets.png"/>
                    <img  src="assets/img/content/map.jpeg"/>

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
