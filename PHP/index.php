<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <script src="https://kit.fontawesome.com/8923f438ee.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PortFolio - Dylan Weisse</title>
    <?php

    include '../Elements/NavBar.php'

    ?>
</head>

<body>

    <div class="aboutbox">
        <div class="boxL bgviolet white">
            <h1 class="titlebox">A Propos</h1>

        </div>
        <div class="boxR textpadding">

            <h1 class="titlepart violet">Qui suis-je ?</h1>

            <p class="justify"> Hey ! Moi c'est Dylan, et je suis Developpeur WEB Junior. <br><br>

                Si vous êtes ici, ce n'est pas pour rien ! Alors laissez moi vous raconter mon parcours.
                Avant d'en arriver là, le métier qui m'était destiné n'étais pas le WEB, mais plutôt les métiers du batiment. Mais le soucis était que l'épanouissement au travail n'était pas là, et c'est important !
                Je me suis donc remis en question et cherché quelque-chose qui me plaisait: L'informatique ! En général pour commencer, puis en me spécialisant. <br><br>
                J'ai été formé dans la bureautique, pour obtenir mon PCIE, et par la suite former des personnes comme moi, c'était très bien mais il manquait encore un petit quelque chose.
                Alors j'ai essayé le développement, et là j'ai pu m'y retrouver, et trouver par la même occasion ce qui me passionnais:
                "Le WEB"<br><br>

                Vous voulez en voir plus ?</p>

            <a href="../Document/CV_Dylan_Weisse.pdf" class=""><button class="cv">Télécharger mon CV</button></a>
            <a href="index.php #contact" class=""><button class="contactcv">Contact <i class="fas fa-reply"></i> </i></button></a>
        </div>

    </div>

    <div id="skills"></div>

    <div class="skillsbox">

        <div class="boxL">

            <h1 class="titlepart red">Languages</h1>

            <ul class="listskills">
                <li class="skill"><i class="fab fa-html5"></i> HTML</li>
                <li class="skill"><i class="fab fa-css3"></i> CSS (et BootStrap)</li>
                <li class="skill"><i class="fab fa-js"></i> JavaScript (JQuery)</li>
                <li class="skill"><i class="fas fa-database"></i> BDD (Merise, SQL)</li>
                <li class="skill"><i class="fab fa-php"></i> PHP (Symfony)</li>
            </ul>

        </div>

        <div class="boxR bgred white">
            <h1 class="titlebox">Soft Skills</h1>

        </div>

    </div>

    <div id="soft"></div>

    <div class="softwarebox">

        <div class="boxL bgblue white">
            <h1 class="titlebox">Software</h1>

        </div>

        <div class="boxR">

            <h1 class="titlepart red">Logiciels et Utilitaires</h1>

            <ul class="listsoft">
                <li class="soft"><i class="fab fa-windows"></i> Windows</li>
                <li class="soft"><i class="fas fa-server"></i> Wamp</li>
                <li class="soft"><i class="fas fa-code"></i> Visual Studio Code</li>
                <li class="soft"><i class="fab fa-github"></i> Github</li>
                <li class="soft"><i class="fas fa-project-diagram"></i> PowerAMC</li>
                <li class="soft"><i class="fas fa-eye-dropper"></i> Photoshop</li>
                <li class="soft"><i class="far fa-file-word"></i> MS Office</li>
            </ul>


        </div>

    </div>

    <div id="proj"></div>

    <div class="projectbox">

        <div class="boxL">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="PF-tab" data-toggle="tab" href="#PF" role="tab" aria-controls="PF" aria-selected="true">Porfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="VDT-tab" data-toggle="tab" href="#VDT" role="tab" aria-controls="VDT" aria-selected="false">VDT Formation</a>
                </li>
               
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="PF" role="tabpanel" aria-labelledby="PF-tab">...</div>
                <div class="tab-pane fade" id="VDT" role="tabpanel" aria-labelledby="VDT-tab">...</div>
            </div>

        </div>

        <div class="boxR bggreen white">
            <h1 class="titlebox">Project</h1>
        </div>

    </div>
    <div id="contact"></div>
    <div class="contactbox">

        <div class="boxL bgorange white">
            <h1 class="titlebox">Contact</h1>

        </div>

        <div class="boxR">


        </div>

    </div>

</body>

<footer class="bg-light">
    <p class="textfooter">Tous droits réservé © Dylan Weisse - 2020</p>
    <p class="reseaubloc"><a class="linkreseau" href="https://open.spotify.com/user/striipcoca?si=cfNeAOY5S7uXGjd_WrJilg"><i class="fab fa-spotify"></i></a>
        <a class="linkreseau" href="https://twitter.com/dylan_weisse"><i class="fab fa-twitter"></i></a>
        <a class="linkreseau" href="https://github.com/DlnWse/"><i class="fab fa-github"></i></a>
        <a class="linkreseau" href="https://www.linkedin.com/in/dlnwse/ "><i class="fab fa-linkedin"></i></a>

    </p>

</footer>

<script src="../JS/Elements/carrousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>