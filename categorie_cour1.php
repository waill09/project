<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>LearnEd</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <style>
		.card{
			height:290px;
			width:300px;
			margin:100px 150px 150px 150px;
			margin-left:400px;
			
		}
		.card-img-top{
			width:300px;
		}
		#c2{
			margin-top:-440px;
			margin-left:900px;
		}
		#c1{
			margin-top:-570px;
		}
		#bb{
			height:200px;
		}
		span{
			margin:10px ;
			margin-top:0px;
			padding:10px;
			align-items:center;
		}
		.btn-outline-primary{
			margin-left:80px;
			margin-top:20px;
			display: flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
		}
		.text-center {
            text-align: center !important; /* Use !important to override Bootstrap styles */
			margin-top:10px;
        }
		.logo img{
	margin-bottom: -20px;
	margin-top: -30px;
	width: 80px;
	
	cursor: pointer;
	transition: all 1s;
  }
	</style>
</head>
<body>
<!-- Navigation Bar -->
<header id="header">
		<nav>
			<div class="logo"><img src="logo1.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#facultie">Facultés</a></li>
				<li><a href="#services_section">Service</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
			</ul>
			<div class="srch"><input type="text"id="searchInput" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick="performSearch()"></div>

			<a class="get-started" href="Admin/login.php">LogIn/SingUp</a>
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
	<div class="row row-cols-1 row-cols-md-2 g-4">
       <div class="col">
         <div class="card"id="c1">
      <img src="images/courses/math.jpg" class="card-img-top" alt="...">
      <div class="text-end">
        <a href="Cours1.php" class="btn btn-outline-primary text-center "><span>Learn more</span></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" id="c2">
      <img src="images/courses/physical.jpg" id="bb" class="card-img-top" alt="...">
      <div class="text-end">
         <a href="Cours1.php" class="btn btn-outline-primary text-center"><span>Learn more</span></a>
        </div>
    
  </div>
  <footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="logo2.png" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2019 -Univérsité Saad Dahlab Blida 1

					.</p>
				<br><p><img src="images/icon/location.png"> Université SAAD DAHLAB de BLIDA <br>route de SOUMAA BP 270 BLIDA(09100) ALGERIE</p><br>
				<p><img src="images/icon/phone.png">  025.43.38.25-30<br><img src="images/icon/mail.png">&nbsp;  elearning@univ-blida.dz</p>
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
 
