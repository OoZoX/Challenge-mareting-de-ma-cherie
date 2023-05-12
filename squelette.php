<?php
#include_once 'code/action/config.php';
$titlePage = '';
$namePage = '';
$valueH1 = "";
?>


<html lang="fr" dir="ltr">
<?php
include 'code/content/head.php';
?>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
    <?php include 'code/content/navbar.php'; ?>
</header>

<main>
    <?php include 'code/content/titrePage.php'; ?>

</main>


<?php
include 'code/content/footer.php';
include 'code/content/foot.php'
?>

<!--JavaScript at end of body for optimized loading-->
<!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
</body>
</html>
