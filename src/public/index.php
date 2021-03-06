<?php session_start();
if (isset($_SESSION['nom'])&&!empty($_SESSION['nom'])){
	$nameValue='value="'.$_SESSION['nom'].'"';
}
else {
	$nameValue='value=""';
}
if (isset($_SESSION['email'])&&!empty($_SESSION['email'])){
	$emailValue='value="'.$_SESSION['email'].'"';
}
else {
	$emailValue='value=""';
}
if (isset($_SESSION['sujet'])&&!empty($_SESSION['sujet'])){
	$subjectValue='value="'.$_SESSION['sujet'].'"';
}
else {
	$subjectValue='value=""';
}
if (isset($_SESSION['status'])&&!empty($_SESSION['status'])){
	$statusValue=$_SESSION['status'];
}
else {
	$statusValue='';
}


if (isset($_SESSION['message'])&&!empty($_SESSION['message'])){
	$messageValue=$_SESSION['message'];
}
else {
	$messageValue='';
}
session_destroy();
?>


<!DOCTYPE html>
<html lang="FR" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Riche d’une expérience professionnelle variée, je souhaite poursuivre ma formation de développeur Web.
Passionné d’informatique et actuellement inscrit au centre IP Formation de Lyon, je dispose de bonnes bases en matière de langages web et désire intégrer une structure afin de parfaire et valider mes connaissances via un contrat en alternance.
Aussi, je mets à disposition mes capacités d’écoute et d’analyse au service d’une équipe créative et pédagogue afin de confirmer et développer mes acquis.">
    <meta name="author" content="">
    <meta property="og:image" content="http://anothercastle.fr/image/minico.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="524">
    <meta property="og:image:height" content="250">
    <title>Guillaume P. Développeur Web</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/socicon.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/remodal.css" rel="stylesheet">
    <link href="css/remodal-default-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/timeline.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="image/favicon.png" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="background">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!--<div class="container">-->
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">Guillaume P.</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden">
                <a class="page-scroll" href="#page-top"></a>
            </li>
            <li>
                <a class="page-scroll" href="#about">A propos</a>
            </li>
            <li>
                <a class="page-scroll" href="#parcours">Parcours</a>
            </li>
            <li>
                <a class="page-scroll" href="#competence">Compétences</a>
            </li>
            <li>
                <a class="page-scroll" href="#realisation">Réalisations</a>
            </li>
            <li>
                <a class="page-scroll" href="#interet">Centres d'intérêts</a>
            </li>
            <li>
                <a class="page-scroll" href="#contact">Contact</a>
            </li>
            <li>
                <a class="page-scroll" href="#info">Infos</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
    <!--</div>-->
    <!-- /.container -->
</nav>

<section id="slider" class="row">
<div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 title">
<h1>Guillaume P.</h1>
<h2>Développeur WEB en alternance</h2>

</div>


</section>
<div class="container">
    <section id="about" class="row orange_box_up">
        <div id="about_text" class="col-lg-9 col-sm-12 col-xs-12 col-md-9">
            <h2 class="text-center">A propos de moi... </h2>

            <p> A l’issu de ma formation intensive de Développeur Web PHP et étant inscrit en
                cursus de niveau II (Bac+4) au sein de l’école IPSSI , je suis actuellement à la
                recherche d’un contrat d’apprentissage pour la rentrée 2016, à partir du mois de
                janvier, pour une durée de 24 mois.<br>
                Fort d’une expérience professionnelle variée et d’un bon esprit d’analyse, je suis
                déterminé à me former rapidement et efficacement.<br>
                Dans ce but, je suis prêt à m’investir totalement de façon à mener à bien et de façon
                autonome les tâches qui me seront confiées.</p>
        </div>
        <div id="about_civil" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <img class="img-circle center-block img-responsive" width="250" src="image/photo_cv.png"
                 alt="une photo de moi">
        </div>
    </section>
    <section id="parcours" class="row">
        <h2 class="text-center">Parcours</h2>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="fa fa-laptop"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a target="_blank" href="http://www.ecole-ipssi.com/">
                            <img class="timeline-image-right img-responsive" src="image/logoipformation.png"
                                 width="150" alt="logo Ipssi">
                        </a>
                        <h4 class="timeline-title">Formation Intensive Développeur Web PHP</h4>

                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2015</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <ul>
                            <li>Développement PHP Objet et Frameworks</li>
                            <li>Développement et administration MySQL</li>
                            <li>Administration, sécurité et performances LAMP (Linux Apache MySQL PHP)</li>
                            <li>Stage en entreprise</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"><i class="fa fa-laptop"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a target="_blank"
                           href="http://www.emweb.fr/formation-distance/integration-developpement/integrateur-developpeur-web.htm">
                            <img class="timeline-image-right img-responsive" src="image/logo_emweb.png" width="150"
                                 alt="logo Emweb">
                        </a>
                        <h4 class="timeline-title">Auto-formation Développeur Web</h4>

                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2013-2015</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <ul>
                            <li>Exercices HTML/CSS: menu déroulant multi niveau, formulaires, media queries...</li>
                            <li>Exercices PHP/MySQL (procédural): création d’un chatroom, gestion BDD client via
                                formulaire, création d’un panier d’achat.
                            </li>
                            <li>Modules généralistes sur les langages du Web et sur la mise en production d’un site.
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><i class="fa fa-gamepad"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a target="_blank" href="https://fr.wikipedia.org/wiki/Game_(entreprise)">
                            <img class="timeline-image-right img-responsive" src="image/game-logo.gif" width="100"
                                 alt="logo Game">
                        </a>
                        <h4 class="timeline-title">Vendeur Spécialisé puis Assistant Manager GAME</h4>

                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2004-2013</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <ul>
                            <li>Techniques de vente, accueil et prise en charge client dans un contexte de vente
                                accompagnée.
                            </li>
                            <li>Support multimédia (Réseau, hardware...).</li>
                            <li>Optimisation de l’espace, merchandising.</li>
                            <li>Gestion Backoffice (stock, ressources humaines, objectifs et indicateurs).</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"><i class="fa fa-industry"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a target="_blank"
                           href="http://www.areva.com/FR/activites-1010/areva-romans-assemblages-combustibles-pour-les-racteurs-nuclaires.html">
                            <img class="timeline-image-right img-responsive" src="image/logo_areva.png" width="100"
                                 alt="logo areva">
                        </a>
                        <h4 class="timeline-title">Technicien sur le site FBFC</h4>

                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2003</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <ul>
           					<li>Service environnement</li>
                            <li>Création d’un document Excel automatisant les calculs de teneurs en isotopes et
                                permettant la publication des résultats.
                            </li>
                            <li>Rédaction de la procédure et des fiches de poste liées au relevé des résultats dans le
                                cadre de l’ISO 14001.
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="timeline">
                <div class="timeline-badge"><i class="fa fa-graduation-cap"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a target="_blank" href="https://www.cesi-alternance.fr/centre/lyon/">
                            <img class="timeline-image-right img-responsive" src="image/logo_cesi.png" width="150"
                                 alt="logo CESI">
                        </a>
                        <h4 class="timeline-title">C.Q.P Technicien Supérieur HSE</h4>

                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2002</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <ul>
                            <li>Certificat de Qualification professionnelle</li>
                            <li>Hygiène,Sécurité et Environnement</li>
                            <li>Niveau BAC+2</li>
                        </ul>
                    </div>

                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"><i class="fa fa-industry"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a target="_blank"
                           href="http://www.areva.com/FR/activites-1010/areva-romans-assemblages-combustibles-pour-les-racteurs-nuclaires.html">
                            <img class="timeline-image-right img-responsive" src="image/logo_areva.png" width="100"
                                 alt="logo areva">
                        </a>
                        <h4 class="timeline-title">Assistant Méthode HSE sur le site
                            FBFC</h4>

                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2000-2002 (En alternance)
                            </small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <ul>
                        	<li>HSE: Hygiène Sécurité Environnement</li>
                            <li>Traitement et gestion des déclaration d'Accident du Travail</li>
                            <li>Création et mise à jour des fiches d'interventions bâtiments</li>
                            <li>Mise en place d’un plan de circulation sur site et du protocole de chargement et de
                                déchargement.
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="timeline">
                <div class="timeline-badge"><i class="fa fa-graduation-cap"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a target="_blank"
                           href="http://www.educagri.fr/index.php?id=1814&num=1231">
                            <img class="timeline-image-right img-responsive" src="image/logo_lycee.png" width="100"
                                 alt="logo lycée">
                        </a>
                        <h4 class="timeline-title">BAC STAE</h4>

                        <p>
                            <small class="text-muted"><i class="glyphicon glyphicon-time"></i>2000</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <ul>
                            <li>Sciences et Techniques de l'Agronomie et de l'Environnement</li>
                        </ul>
                    </div>

                </div>
            </li>
        </ul>
    </section>

    <section id="competence" class="row orange_box_up">
        <h2 class="text-center">Compétences</h2>

        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_html.png" width="100" alt="HTML5">

            <p class="center-block text-center">HTML5</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_css.png" width="100" alt="CSS3">

            <p class="center-block text-center">CSS3</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_php.png" width="100" alt="PHP">

            <p class="center-block text-center">PHP (Objet)</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_sql.png" width="100" alt="MySQL">

            <p class="center-block text-center">MySQL</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_bootstrap.png" width="100" alt="BOOSTRAP">

            <p class="center-block text-center">Bootstrap</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_dreamwaver.png" width="100" alt="Dreamwaver">

            <p class="center-block text-center">Dreamweaver</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_photoshop.png" width="100" alt="Photoshop">

            <p class="center-block text-center">Photoshop</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_ubuntu.png" width="100" alt="Ubuntu">

            <p class="center-block text-center">Environnement Ubuntu</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_wordpress.png" width="100" alt="Wordpress">

            <p class="center-block text-center">Wordpress</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_eclipse.png" width="100" alt="Eclipse">

            <p class="center-block text-center">Eclipse</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_phpstorm.png" width="100" alt="PHPstorm">

            <p class="center-block text-center">PHPStorm</p>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img class="img-rounded center-block" src="image/logo_jquery.png" width="100" alt="Jquery">

            <p class="center-block text-center">Jquery</p>
        </div>
    </section>
    <section id="realisation" class="row orange_box_up">

        <h2 class="text-center">Réalisations</h2>

        <!-- Début MODAL -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="item">
                <a href="#modal1"><img alt="capture d'écran du site handiworld.org" class="center-block img-responsive img-thumbnail"
                                       src="./image/screen_handiworld.png"  width="450"></a>
                <h4 class="text-center">Association HandiwOrld</h4>
            </div>
        </div>
        <div class="remodal" data-remodal-id="modal1">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>Refonte du site de l'association HandiwOrld</h1>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <img alt="capture d'écran du site handiworld.org" class="img-responsive center-block" src="./image/screen_handiworld.png" width="450">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <p class="text-justify">
                    HandiwOrld est une association d'aide et de partage à destination des personnes en situation de
                    handicap.
                    Le projet était de moderniser le site existant tout en conservant son contenu rédactionnel ainsi que
                    sa charte graphique.
                    La proposition choisie fut celle de l'intégration d'un nouveau thème correspondant plus aux
                    standards actuels (responsive,
                    navigation par association de tag). Le site reste sous Wordpress mais sa dynamique de publication
                    est changée et simplifiée
                    afin que les membres de l'association puisse facilement ajouter de nouveaux articles. De plus,
                    HandiwOrld.org intégre
                    de nombreux greffons permettant d'automatiser les sauvegardes, proposer une traduction automatique
                    des articles, et étendre
                    les publications et commentaires sur les réseaux sociaux. Afin la plateforme dispose d'une
                    cinquantaine d'articles "pré-rédigés"
                    de type "publications soft" afin pour stimuler l'intérêt et les réactions via les réseaux sociaux.
                </p>
                <ul class="text-left ">
                    <li>CMS Wordpress 4.3</li>
                    <li>Photoshop CS6</li>
                    <li>Rédaction et intégration de nouveaux contenus</li>
                    <li>Documentation technique</li>
                </ul>
                <!-- TODO vire les boutons des balises <a> -->
                <a target="_blank" href="http://www.handiworld.org/">
                    <button type="button" class="btn btn-default"><i class="fa fa-link"></i> Voir le site</button>
                </a>
            </div>
        </div>
        <!-- FIN MODAL -->
        <!-- Début MODAL -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="item">
                <a href="#modal2"><img alt="capture d'écran de l'exercice dreamwaver" class="center-block img-responsive img-thumbnail" src="./image/screen_ex_dream.png"
                                       width="450"></a>
                <h4 class="text-center">Devoir d'intégration</h4>
            </div>
        </div>
        <div class="remodal" data-remodal-id="modal2">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>Devoir d'intégration via Adobe dreamwaver CS6</h1>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <img alt="capture d'écran de l'exercice dreamwaver" class="img-responsive center-block" src="./image/screen_ex_dream.png" width="450">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <p class="text-justify">
                    Dans le cadre de ma formation à domicile, le but de l'exercice est multiple. Dans un premier temps,
                    il est question de "déduire" une architecture à partir d'un modèle imposé de page d'accueil.
                     Ensuite, le site doit être codé en utilisant les outils de factorisation du code propre à Adobe Dreamwaver.
                    Le logiciel permet d'établir "à la volée" des zones répétables afin de
                    générer une sorte de "framework" spécifique au site développé.
                    Très souvent décrié, pour ne pas dire démoli par les développeurs, Adobe Dreamwaver CS6 propose une
                    série
                    d'outils intéressants, mais malheureusement totalement désuets face aux frameworks tels que
                    Bootstrap...
                    Pire il se révéle totalement inadapté à l'utilisation de ces derniers.
                </p>
                <ul class="text-left ">
                    <li>Utilisation de Adobe Dreamwaver imposée</li>
                    <li>Intégration d'une maquette très laide mais imposée</li>
                    <li>Utilisation de la librairie SPRY (équivalent Jquery sauce Adobe) imposée</li>
                    <li>Création d'une architecture au choix</li>

                </ul>
                <!-- TODO vire les boutons des balises <a> -->
                <a target="_blank" href="project\dreamweaver\index.php">
                    <button type="button" class="btn btn-default"><i class="fa fa-link"></i> Voir le site</button>
                </a>
                <a target="_blank" href="https://github.com/undogit/Devoir-d-integration-via-Adobe-dreamwaver">
                    <button type="button" class="btn btn-default"><i class="fa fa-github"></i> Voir sur GitHub</button>
                </a>
            </div>
        </div>
        <!-- FIN MODAL -->
        <!-- Début MODAL -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="item">
                <a href="#modal3"><img alt="capture d'écran de l'exercice bootstrap" class="center-block img-responsive img-thumbnail" src="./image/integration_boostrap.png"
                                       width="450"></a>
                <h4 class="text-center">Intégration Bootsrap</h4>
            </div>
        </div>
        <div class="remodal" data-remodal-id="modal3">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>TP d'intégration avec Twitter Boostrap 3</h1>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <img alt="capture d'écran de l'exercice bootstrap" class="img-responsive center-block" src="./image/integration_boostrap.png" width="450">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <p class="text-justify">
                    A partir de screenshots issus d'un template wordpress, l'exercice consiste à reproduire les pages fournies
                    à l'aide du framework Twitter Boostrap version 3.L'intégralité des pages fournies doivent être responsives
                    et, bien évidement, le plus proche possible des maquettes proposées. Dans le cadre de cet exercice, les éléments
                    Jquery sont remplacés par des placeholder.
                </p>
                <ul class="text-left ">
                    <li>Twitter Boostrap 3</li>
                    <li>PhpStorm</li>
                    <li>Découpe et interprétation du comportement possible des éléments sur un écran moins large</li>
                </ul>
                <!-- TODO vire les boutons des balises <a> -->
                <a target="_blank" href="project\integration\index.html">
                    <button type="button" class="btn btn-default"><i class="fa fa-link"></i> Voir le site</button>
                </a>
                <a target="_blank" href="https://github.com/undogit/integration_boostrap">
                    <button type="button" class="btn btn-default"><i class="fa fa-github"></i> Voir sur GitHub</button>
                </a>

            </div>
        </div>
        <!-- FIN MODAL -->
        <!-- Début MODAL -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="item">         
                <a href="#modal4"><img class="center-block img-responsive img-thumbnail" src="./image/UnivacA.jpg"
                                       width="450"></a>
                <h4 class="text-center">Mon portfolio</h4>
            </div>
        </div>
        <div class="remodal" data-remodal-id="modal4">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>Mon portfolio</h1>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <img class="img-responsive center-block" src="./image/UnivacA.jpg" width="450">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <p class="text-justify">
                    Mon portfolio est développé à l'aide du framework Bootsrap 3. Les éléments dynamiques sont en Javascript
                    et la partie formulaire est géré par du PHP procédural.
                    Le choix des couleurs et du design ont pour "point de départ" l'image principale.
                </p>
                <ul class="text-left ">
                    <li>Framework Bootstrap 3</li>
                    <li>Photoshop</li>
                    <li>Webdesign</li>
                    <li>PHP procédural</li>
                </ul>
                <!-- TODO vire les boutons des balises <a> -->
                <a target="_blank" href="https://github.com/undogit/PortfolioGP">
                    <button type="button" class="btn btn-default"><i class="fa fa-github"></i> Voir sur GitHub</button>
                </a>
            </div>
        </div>
        <!-- FIN MODAL -->

    </section>
    <section id="interet" class="row">
        <h2 class="text-center">Centres d'intérêts</h2>

        <div class="col-lg-4 col-xs-12 col-sm-6 col-md-4">
            <div class="hobbies">
                <img alt="moi en bassiste" src="image/basse.png" width="350" class="center-block  img-responsive">
                <h4>Bassiste</h4>

                <div class="clearfix"></div>
                <ul>
                    <li>Rock expérimental</li>
                    <li>2 albums sortis</li>
                    <li>Concerts</li>
                    <li>Résidences</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-6 col-md-4">
            <div class="hobbies">
                <img alt="une salle de cinema" src="image/cinema.png" width="350" class="center-block  img-responsive">
                <h4>Cinéma</h4>

                <div class="clearfix"></div>
                <ul>
                    <li>Science-fiction</li>
                    <li>Horreur</li>
                    <li>Wes Anderson</li>
                    <li>Takeshi Kitano</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-6 col-md-4">
        <div class="hobbies">
           <img alt="Mac Gyver le roi des bricoleurs" src="image/bricolage.png" width="350" class="center-block  img-responsive">
            <h4>Bricolage</h4>

            <div class="clearfix"></div>
            <ul>
                <li>Personnalisation de meuble</li>
                <li>Décoration industrielle</li>
                <li>Entretien et réparation</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-sm-6 col-md-4">
        <div class="hobbies">
            <img alt="Louis la Brocante" src="image/brocante.png" width="350" class="center-block  img-responsive">
            <h4>Brocante</h4>

            <div class="clearfix"></div>
            <ul>
                <li>Meubles anciens</li>
                <li>Disques vinyls</li>
                <li>Jeux de collections</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-sm-6 col-md-4">
        <div class="hobbies">
            <img alt="Laika le chien de l'espace" src="image/science.png" width="350" class="center-block  img-responsive">
            <h4>Science & technologie</h4>

            <div class="clearfix"></div>
            <ul>
                <li>Astronomie</li>
                <li>Histoire de la conquête spatiale</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-sm-6 col-md-4">
        <div class="hobbies">
           <img alt="une famille très 80's devant sa console de jeux"src="image/videogame.png" width="350" class="center-block  img-responsive">
            <h4>Jeux vidéo</h4>

            <div class="clearfix"></div>
            <ul>
                <li>Rétrogaming</li>
                <li>Jeux indépendants de type sandbox</li>
                <li>PlaneteSide2 : technicien / support</li>
            </ul>
        </div>
    </div>
    </section>
    <section id="contact" class="text-center row orange_box_up">
        <h2>Contact</h2>


        <form class="form-horizontal" role="form" method="post" action="validForm.php">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" required="required" class="form-control" id="name" name="nom" placeholder="Nom / Société" <?=$nameValue?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" required="required" class="form-control" id="email" name="email" placeholder="Email" <?=$emailValue?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" required="required" class="form-control" id="subject" name="sujet" placeholder="Sujet" <?=$subjectValue?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <textarea class="form-control" required="required" rows="4" name="message" placeholder="Votre message..."><?=$messageValue?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php echo $statusValue?>
                </div>
            </div>
        </form>

    </section>
</div>
<section id="info" class="row orange_box_up">
    <div class="container">
        <h2>Infos</h2>

        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
            <ul class="list-unstyled">
                <li><i class="fa fa-user"></i><span>35 ans</span></li>
                <li><i class="fa fa-mobile"></i><span id="phone">06 60 51 18 23</span></li>
                <li><i class="fa fa-envelope"></i><span id="mail"><a href="mailto:g.perrier80@gmail.com">g.perrier80@gmail.com</a></span>
                <li><i class="fa fa-home"></i><span>Croix Rousse (Lyon 4ème)</span></li>
                <li><i class="fa fa-comment"></i><span>Anglais lu, écrit, parlé</span></li>
                <li><i class="fa fa-comment"></i><span>Notions d'espagnol</span></li>
                <li><i class="cv_color fa fa-file-pdf-o"></i>
                <a target="_blank" href="cv/P_guillaume.pdf">Télécharger mon CV</a></li>
            </ul>


        </div>

        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
            <div id="map-canvas"></div>
        </div>
    </div>
</section>
<footer class="row">
    <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6 pull-left">
        <span> Site en construction</span>
    </div>
    <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6 pull-right">
        <div class="social pull-right">
            <a target="_blank" href="https://www.viadeo.com/fr/profile/guillaume.perrier11"><span class="socicon socicon-viadeo"></span></a>
            <a target="_blank" href="https://www.facebook.com/GuillaumeERRIPER"><span class="socicon socicon-facebook"></span></a>
            <a target="_blank" href="https://fr.linkedin.com/pub/perrier-guillaume/108/192/a04"><span class="socicon socicon-linkedin"></span></a>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<!--Remodal Javacript-->
<script src="js/remodal.js"></script>
<!--Gmap perso API-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCStlHZghPry0YyY952Q2NI31aJGjopC00&;sensor=FALSE"></script>
<script src="js/jsonmap.js"></script>
</body>

</html>
