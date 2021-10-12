﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>page.admin</title>
    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="./plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="./plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="./plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Sweetalert Css -->
    <link href="./plugins/sweetalert/sweetalert.css" rel="stylesheet" />     

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="./css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/normalize.css">
    <script src="./build/jquery.steps.js"></script>
    <link rel="stylesheet" href="./css/jquery.steps.css">
    <link rel="stylesheet" href="./css/main.css">

<!--
    
        
        <script src="./lib/modernizr-2.6.2.min.js"></script>
        <script src="./lib/jquery-1.9.1.min.js"></script>
        <script src="./lib/jquery.cookie-1.3.1.js"></script>
        <script src="./build/jquery.steps.js"></script>

        <link rel="stylesheet" href="./styles.css"/>
        <link href="./css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="./bootstrap.css"/>
-->

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
                
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Memu haut-->
    <?php include("menuUser.html"); ?>
    <!-- Memu user-->
    <?php include("menuUser2.html"); ?>


        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <div class="content">
            <h1>Inscrivez-vous!</h1>

            <script>
                $(function ()
                {
                    $("#wizard").steps({
                        headerTag: "h2",
                        bodyTag: "section",
                        transitionEffect: "slideLeft",
                        stepsOrientation: "vertical"
                    });
                });
            </script>

            <div id="wizard">

                <h2>Première Etape</h2>
                <section>
                    <p>
                        <h2>AVERTISSEMENT !!!</h2><br><br><br>
                        Pour ouvrir votre compte, vous devez fournir les informations suivantes: <br><br>
                        1-Une pièce d'identité en cours de validité (CNI, passeport ou attestion d'identité)<br><br>
                        2-Addresse physique <br><br>
                        3-Addresse électronique <br><br>
                        4-Une photo d'identité Numerique <br><br>
                        5-Signature numérique <br><br>
                    </p>  

                </section>

                <h2>Deuxième Etape  </h2>

                <section>
                    <label for="nom">Pseudo (*)</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="Entrez votre pseudo" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>
                         
                    <label for="nom">Mot de passe (*)</label>
                    <input type="password" name="nom" required="required" pattern="\d" placeholder="Tappez votre mot de passe" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>
                    <input type="password" name="nom" required="required" pattern="\d" placeholder="confirmez le mot de passe" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>                                                                               
                </section>

                <h2>Troisième Etape </h2>

                <section>
                    <label for="nom">Nature de la pièce (*)</label><br>
                    <select  name="piece"  id="piece">
                       <option value="Cni">Carte d'identité</option>
                       <option value="attestationp">Attestation d'identité</option>
                       <option value="passport">Passport</option>
                       <option value="Autre">Autre</option>
                    </select><br><br>

                    <label for="nom">N° de la pièce (*)</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="Entrez le numero de votre pièce" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Etablie le (*)</label>
                    <input type="Date" name="nom" required="required" pattern="\d" placeholder=" " class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Valide jusqu'au (*)</label>
                    <input type="Date" name="nom" required="required" pattern="\d" placeholder=" " class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Lieu d'établissement</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="Etablie à" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                </section>

                <h2>Quatrième Etape</h2>
                <section>
                    <label for="nom">Nom (*)</label>
                    <input type="nom" name="mdp" required="required" pattern="\d" placeholder="entrez votre nom" class="form-control"><br>
                    

                    <label for="prenom">Prenom(s) (*)</label>
                    <input type="text" name="mdp" required="required" pattern="\d" placeholder="entrez votre prenom" class="form-control"><br>

                    <label for="dateNaissance">Date de Nissance (*)</label>
                    <input type="date" name="mdp" required="required" pattern="\d" placeholder="Né(e) le" class="form-control"><br>

                    <label for="lieuNaiss">Lieu de Naissance (*)</label>
                    <input type="mdp" name="mdp" required="required" pattern="\d" placeholder="à" class="form-control"><br>

                    <label for="contact">Contact(s) (*)</label>
                    <input type="integer" name="mdp" required="required" pattern="\d" placeholder="Telephone" class="form-control"><br>
                     <input type="mail" name="mdp" required="required" pattern="\d" placeholder="Entrez votre adresse mail" class="form-control"><br>    
  
                    <label for="taille">Taille</label>
                    <input type="text" name="mdp" required="required" pattern="\d" placeholder="votre taille" class="form-control"><br>

                    <label for="sexe">Sexe (*)</label><br>
                    <select name="sexee">
                    <option value=" ">Choisir</option>
                    <option value="H">Masculin</option>
                    <option value="F">Féminin</option>
                    </select><br><br>     

                </section>

                <h2>Cinquième Etape</h2>
                <section>
                    <label for="nom">Adresse (*)</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="votre adresse" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Profession</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="entrez votre profession" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>     
                        
                    <label for="photo">Signature (*)</label><br>
                    <input type="file" id="photo" name="photo"><br><br>   

                </section>

                <h2>Septième Etape</h2>
                <section>
                    <p>
                        Félicitations, vous venez d'ouvrir votre compte, vous passerrez dans l'agence afin de finaliser l'ouverture de votre compte muni des pièces suivantes:<br><br>
                        1-Votre pièce d'identité utilisée pour l'ouverture <br>
                        2-Attestation de lieu de residence <br>
                        3-Votre bulletin de salaire <br>
                        4-02 photos d'identité de meme tirage <br>
                    </p>  

                </section>

            </div>
        </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>


<?php include("footerUser.html"); ?>

</html>