<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>SOS-PC</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
	    <!-- header start -->
    <!-- ================ --> 
    <header class="header2 fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- header-left start -->
            <!-- ================ -->
            <div class="header-left clearfix">
              <!-- logo -->
              <div class="logo smooth-scroll">
                <a href="#banner"><img id="logo" src="img/logo.png" alt="Worthy"></a>
              </div>
              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name"><a href="#banner">SOS-PC</a></div>
                <div class="site-slogan">Votre PC en bonnes mains...</div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="header-right clearfix">
              <div class="main-navigation animated">
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="accueilAdmin.php">Accueil</a></li>
            
                         <li><a href="accueilAdmin.php#portfolio">Vente</a></li>
                        <li class="active" >
                          <a  href="dashboard.php">Administration</a>
                    
                          
                          
                        </li>
                                                <li><a href="accueilAdmin.php#about">A propos</a></li>
                        <li><a href="accueilAdmin.php#contact">Contact</a></li>
                        <li class="dropdown"><li class="dropdown"> <a href="#" class="dropbtn">
          <span class="glyphicon glyphicon-user"></span> 
                        Mon compte 
                    </a>
                    <?php
          session_start();
          if($_SESSION['login']==true) { 
            ?>  
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div>
                                    <div class="col-lg-5">
                                         <div class="col-lg-5">
                                        <p class="text-center">
                                          
                                          <img class="round" src="<?php echo $_SESSION['picture'];?>">
   
                                            
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-left"><strong><?php  session_start();echo $_SESSION['login_user']; ?></strong></p>
                                        <p class="text-left small"><?php session_start();echo $_SESSION['mail']; ?></p>
                                        
                                    </div>

                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>

                                             <a href="./php/logout.php" class="btn button btn-block">Se déconnecter</a>
                                             <a href="profileAdmin.php" class="btn button btn-block">Mon profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php };
                         ?>
                </li>
            </li>
            
                      </ul>
                    </div>

                  </div>
                </nav>
                <!-- navbar end -->

              </div>
              <!-- main-navigation end -->

            </div>
            <!-- header-right end -->

          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
		<!-- banner start -->
		<!-- ================ -->
		
			<div class="banner-image"></div>
			<div>
			<div class="dashboard">

			  <div id="dash1"><div class="subcontainer"><i class="fa fa-wrench" style="color:white;font-size:50px;position:relative;top:32%;left:41%;"></i><br><p>Gestion des réparateurs</p><br><a href="gestionReparateurs.php">Détail</a></div></div>
			  <div id="dash2"><div class="subcontainer"><i class="fa fa-paper-plane" style="color:white;font-size:50px;position:relative;top:30%;left:41%;"></i><br><p>Gestion des demandes <br>de réparation</p><br><a href="gestionDemandesRep.php">Détail</a></div></div>
			  <div id="dash3"><div class="subcontainer"><i class="fa fa-users" style="color:white;font-size:50px;position:relative;top:30%;left:42%;"></i><br><p>Gestion des clients</p><br><a href="gestionClient.php">Détail</a></div></div>
			  
			  </div>
			</div>
		
		<!-- banner end -->

		

		
</footer>


		<!-- JavaScript files
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>
