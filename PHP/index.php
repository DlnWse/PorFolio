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
            <a href="index.php #contact" class=""><button class="contactcv">Contact <i class="fas fa-reply"></i></button></a>
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

            <h1 class="titlepart blue">Logiciels et Utilitaires</h1>

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

            <h1 class="titlepart green">Mes Projets</h1>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../Image/captureSite/DW.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mon porfolio</h5>
                            <p class="language">
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3"></i>
                                <i class="fab fa-js"></i>
                                <i class="fab fa-php"></i>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../Image/captureSite/VDT.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Site Vitrine VDT Formation</h5>
                            <p class="language">
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3"></i>
                                <i class="fab fa-js"></i>
                                <i class="fab fa-php"></i>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../Image/Fond.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>A Venir...</h5>
                            <p>De futurs projets sont a venir...</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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
            <h1 class="titlepart orange">Me contacter</h1>

            <?php
            if (isset($_POST['mailform'])) {
                if (!empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['message'])) {
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= 'From:"dylan-weisse.com"<contact@dylan-weisse.com>' . "\n";
                    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
                    $header .= 'Content-Transfer-Encoding: 8bit';

                    $message = '
		<html>
			<body>
				<div align="center">
					<img src="http://www.primfx.com/mailing/banniere.png"/>
					<br />
					<u>Nom de l\'expéditeur :</u>' . $_POST['nom'] . '<br />
					<u>Mail de l\'expéditeur :</u>' . $_POST['mail'] . '<br />
					<br />
					' . nl2br($_POST['message']) . '
					<br />
					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
			</body>
		</html>
		';

                    mail("contact@dylan-weisse.com", "CONTACT - dylan-weisse.com", $message, $header);
                    $msg = "Votre message a bien été envoyé !";
                } else {
                    $msg = "Tous les champs doivent être complétés !";
                }
            }
            ?>

            <form action="">

                <label for="">Nom - Prénom :</label><br>
                <input class="inputcontact" type="text" name="nom" placeholder="Tapez votre nom et votre prénom" value="<?php if (isset($_POST['nom'])) {
                                                                                                                            echo $_POST['nom'];
                                                                                                                        } ?>" /><br>

                <label for="">E-mail :</label><br>
                <input class="inputcontact" type="email" name="mail" placeholder="Tapez votre E-mail" value="<?php if (isset($_POST['mail'])) {
                                                                                                                    echo $_POST['mail'];
                                                                                                                } ?>" /> <br>

                <label for="">Message :</label><br>
                <textarea class="areacontact" name="message" placeholder="Votre message"><?php if (isset($_POST['message'])) {
                                                                                                echo $_POST['message'];
                                                                                            } ?></textarea><br>

                <button class="buttoncontact" name="mailform" type="submit">Envoyer <i class="fas fa-reply"></i></button>
            </form>
            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>
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