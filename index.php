<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>LearnEd</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script1.js"></script>
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
		 /* Video Styling */
		 .video-container {
		display: flex;
		justify-content: space-between;
		margin-top: 20px;
	}

	video {
		width: 40%;
		border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	}
  #vid2{
	display: flex;
    margin-left:51%;
    margin-top: 73px;
	align-items: center;
    width: 48%;
  }
  #vid1{
	margin-bottom: 23px;

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
			<div class="srch">
             <input type="text" id="searchInput" class="search" placeholder="Search here..." >
             <img src="images/icon/search.png" alt="search" onclick="performSearch()">
          </div>
			<a class="get-started" href="Admin/login.php">LogIn/SingUp</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research!</h5>
				<div class="play">
					<img src="images/icon/play.png" alt="play"><span><a href="https://www.youtube.com/watch?v=KFyrgDO1WXk" target="_blank">Watch Now</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="images/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/creator/roshan.jpeg" alt="Username">
				<p>roshank9419</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>

        <!-- Video Section -->
		<div class="video-container">

			<video loop autoplay muted id="vid1">
				<source src="video_inside_a_library (2160p).mp4" type="video/mp4">
			</video>
		</div>
		
<!-- SERVICES -->
<div class="service-swipe" id="service">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Servises</p></center>
		</div>
		<a href="categorie_cour1.php"><div class="s-card"><img src="images/icon/computer-courses.png"><p>Faculté des Sciences (5)</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/brainbooster.png"><p>Events / News</p></div></a>
		<a href="categorie_cour2.php"><div class="s-card"><img src="images/icon/online-tutorials.png"><p>Faculté de Technologie (182)</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/papers.jpg"><p>Institut d'Architecture et Urbanisme (9)</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/p3.png"><p>Performance and Ranking Report</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/discussion.png"><p>Discussion with Our Tutors & Mentors</p></div></a>
		<a href="quiz.php"><div class="s-card"><img src="images/icon/q1.png"><p>Daily Quiz</p></div></a>
		<a href="#"><div class="s-card"><img src="images/icon/help.png"><p>24x7 Online Support</p></div></a>
	</div>
		<video loop autoplay muted class="vid2" id="vid2">
			<source src="video (2160p).mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		
		
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.<br> Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we can make learning more easier and in a interesting way.</p>
				</div>
		</div>
	</div>


<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Portfolio</p></center>
		<div class="content">
			<p>
				“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
			</p>
		</div>
	</div>
	<div class="extra">
		<p>We're increasing this data every year</p>
		<div class="smbox">
		<span><center><div class="data">154</div><div class="det">Enrolled Students</div></center></span>
		<span><center><div class="data">62</div><div class="det">Total Courses</div></center></span>
		<span><center><div class="data">56</div><div class="det">Placed Students</div></center></span>
		<span><center><div class="data">27</div><div class="det">Total Projects</div></center></span>
		</div>
	</div>







<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #FA4B37, #DF2771); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee>

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
   

	<script>
    function performSearch() {
        // Récupérer la valeur de la barre de recherche
        var searchQuery = document.getElementById('searchInput').value.toLowerCase();

        // Récupérer tous les éléments que vous souhaitez filtrer (dans ce cas, les éléments avec la classe .s-card)
        var cards = document.querySelectorAll('.s-card');

        // Parcourir chaque élément et vérifier s'il correspond à la requête de recherche
        cards.forEach(function (card) {
            var cardText = card.querySelector('p').innerText.toLowerCase();
            var isVisible = cardText.includes(searchQuery);

            // Basculer la visibilité en fonction de la correspondance avec la requête de recherche
            card.style.display = isVisible ? 'block' : 'none';
        });

        // Ajuster la position de défilement pour amener l'utilisateur à la section appropriée
        var servicesSection = document.getElementById('services_section');
        if (servicesSection) {
            servicesSection.scrollIntoView({ behavior: 'smooth' });
        }
		
    }
	
    

</script>






</body>
</html>






