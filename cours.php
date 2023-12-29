<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>LearnEd</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="images/icon/logo.png" alt="logo"></div>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a class="active"  href="cours.php">Cours</a></li>
				<li><a href="#team_section">Team</a></li>
				
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick=slide()></div>
			<a class="get-started" href="#">Welcome</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/creator/roshan1.jpeg" alt="Username">
				<p>abdelhak</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Cours</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>
  <div class="container">
        <div class="row g-3">
          <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="arton1180.jpg" class="card-img-top ing-fit">
                <div class="card-body">
                    <h5 class="card--title">Faculte de Medecin</h5>
                    <p class="card-text">Welcome to Faculte de Medecin  </p>
                    <div class="text-end">
                        <a href="categorie_cour1.php" class="btn btn-outline-primary">Learn more</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="téléchargement_auto_x2.jpg" class="card-img-top ing-fit">
                <div class="card-body">
                    <h5 class="card--title">Faculte de Science</h5>
                    <p class="card-text">Welcome to Faculte de Science  </p>
                    <div class="text-end">
                        <a href="categorie_cour1.php" class="btn btn-outline-primary">Learn more</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card">
                <img src="fa.jpg" class="card-img-top ing-fit">
                <div class="card-body">
                    <h5 class="card--title">Faculte de Technologie</h5>
                    <p class="card-text">Welcome to Faculte de Techno</p>
                    <div class="text-end">
                        <a href="categorie_cour1.php" class="btn btn-outline-primary">Learn more</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
  </div>
     <footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="images/icon/logo - Copy.png" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2021 Created By Roshan Kumar, Abhishek Dulat All Rights Reserved.</p>
				<br><p><img src="images/icon/location.png"> Lovely Professional University<br>Phagwara, Punjab-144401</p><br>
				<p><img src="images/icon/phone.png"> +91-1234-567-890<br><img src="images/icon/mail.png">&nbsp; learnedonline9419@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
    </body>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
