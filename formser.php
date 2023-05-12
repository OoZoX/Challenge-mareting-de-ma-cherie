<?php
#include_once 'code/action/config.php';
$titlePage = 'forms';
$namePage = 'formser';
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
        <form class="col s12 l8 offset-l2">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Eric Dupond" id="Name" type="text" class="validate">
                    <label for="Name">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="exemple@catch.fr" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="input-field col s12">
                <select>
                    <option value="" disabled selected>Choose the subject of your message</option>
                    <option value="1">Bugs</option>
                    <option value="2">Advices</option>
                    <option value="3">Opinion</option>
                    <option value="4">Other...</option>
                </select>
                <label>what is your message ?</label>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea placeholder="Hello, I am contacting you beaause..." id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Type your message</label>
                </div>
            </div>

            <a class="waves-effect waves-light btn">Submit</a>

        </form>
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
