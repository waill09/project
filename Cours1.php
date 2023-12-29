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
    <style>


           .f1 {
          margin: 20px;
          margin-top: -500px;
          padding: 18px;
          font-weight: 900;
          font-size:20px;
          border: 2px solid #ccc;
          border-radius: 8px;
          animation: borderAnimation 2s infinite alternate;
    }
    .f2 {
          margin: 20px;
          margin-top:70px;
          padding: 18px;
          font-weight: 700;
          font-size:20px;
          border: 2px solid #ccc;
          border-radius: 8px;
          animation: borderAnimation 2s infinite alternate;
    }
    @keyframes borderAnimation {
0% {
border-color: #3498db;
}
100% {
border-color: green;
}
}
.enseignant1 {
        opacity: 0.7; 
        margin-left:-240px;
     }
.Tp{
    text-decoration: none;
    color: Red;
    font-size:20px;
}
.nom1{
    color: Red;
    font-size:20px;
    margin-left:110px;
}
.nom2{
    color: Red;
    font-size:20px;
    margin-left:120px;
}
.enseignant2 {
        opacity: 0.7; 
        margin-left:-400px;
     }
	 .logo img{
	margin-bottom: -20px;
	margin-top: -30px;
	width: 80px;
	
	cursor: pointer;
	transition: all 1s;
  }
</style>
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

			<a class="get-started" href="#">welcome</a>
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

    <fieldset class="f1" style="display: block;" >
        <p><a href="Semestre1.php" target="_blank" class="Tp">Ptéridophytes</a></p><br>
        <p><span class="enseignant1"> Enseignant :</span><a href="p.php"><span class="nom1"> Dr Roubai A</span></a></p>
    </fieldset>
        <fieldset class="f2" style="display: block;">
          <p><a href="Semestre2.php" target="_blank" class="Tp">Chimie générale copie 2</a></p><br>
          <p><span class="enseignant2">Enseignant : </span><a href="p.php"><span class="nom2">Annour Souleyman Zakaria</span></a></p>
        
        </fieldset>

    <!-- FOOTER -->
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

<script>
    function performSearch() {
        // Get the value from the search input
        var searchQuery = document.getElementById('searchInput').value.toLowerCase();

        // Get all the course elements
        var courses = document.querySelectorAll('.f1, .f2');

        // Loop through each course and check if it matches the search query
        courses.forEach(function (course) {
            var courseName = course.querySelector('.Tp').innerText.toLowerCase();
            var isVisible = courseName.includes(searchQuery);

            // Toggle visibility based on whether the course matches the search query
            course.style.display = isVisible ? 'block' : 'none';
        });
    }
</script>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 