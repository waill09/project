<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $registrationKey = $_POST['registrationKey'];
    if ($registrationKey === '2021') {
        $_SESSION['registration_key_validated'] = true;
        header('Location: Cours2.php');
        exit();
    } else {
        $errorMessage = "Invalid registration key. Please try again.";
    }
}
?>





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
        body{
            height:100vh;
        }
   
        .f1 {
          margin: 20px;
          margin-top: 30px;
          padding: 18px;
          font-weight: 700;
          font-size:20px;
          border: 2px solid #ccc;
          border-radius: 8px;
          animation: borderAnimation 2s infinite alternate;
    }
     .enseignant {
        opacity: 0.7; 
     }
    
     .enseignant1 {
        opacity: 0.7; 
        margin-left:-40px;
     }


@keyframes borderAnimation {
0% {
border-color: #3498db;
}
100% {
border-color: green;
}
}
.Tp{
    text-decoration: none;
    color: Red;
    font-size:20px;
    font-weight:700;
}
.nom1{
    color: Red;
    font-size:20px;
    margin-left:110px
}
.h1 {
        margin-top: 120px; /* Ajustez la marge top pour déplacer vers le bas */
        padding:15px;
        color:red;
        font-weight:700;
    }
    .h2 {
        margin-top: -30px; /* Ajustez la marge top pour déplacer vers le bas */
        padding:15px;
        color:red;
    }
    .cle{
      margin:21px;
      margin-top: 30px; /* Ajustez la marge top pour déplacer vers le bas */
      position: absolute;
      padding:10px;
      font-size: 24px;
      opacity:0.7;
    }
    form{
      margin-left: 30px
    }
  
   .all{
    margin-left:660px;
    height:40px;
    width:80px;
    border: raduis 10px;
    background-color:aqua;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    margin-top:-10px;
}
/*color: red;
            margin-top: -50px;
            font-size:20px*/
.all:hover {
  transform: scale(1.1);
}
input:focus {
  border-color: #3498db; /* Change the border color on focus */
  box-shadow: 0 0 5px rgba(52, 152, 219, 0.7); /* Add a subtle box shadow on focus */
}
   #error-message{
    margin-left:530px;
   }
   .error-message {
            color: red;
            font-size: 20px;
            position: absolute;
            bottom: 80px; /* Adjust the position as needed */
            left: 4;
        }
        .input-group {
 position: relative;
}
.bbv{
    width:150px;
    height:60px;
    margin:25px;
    margin-left: 600px;
    font-size:25px;
   }
.input {
 border: solid 1.5px #9e9e9e;
 border-radius: 1rem;
 background: none;
 padding: 1rem;
 font-size: 1rem;
 color: #000000;
 transition: border 150ms cubic-bezier(0.4,0,0.2,1);
}

.user-label {
 position: absolute;
 left: 15px;
 color: #000000;
 pointer-events: none;
 transform: translateY(1rem);
 transition: 150ms cubic-bezier(0.4,0,0.2,1);
}

.input:focus, input:valid {
 outline: none;
 border: 1.5px solid #1a73e8;
}

.input:focus ~ label, input:valid ~ label {
 transform: translateY(-50%) scale(0.8);
 background-color: #212121;
 padding: 0 .2em;
 color: #2196f3;
}
.a{
    margin-top:-500px;
}
footer{
    margin-top:40px;
}
.enseignant1 {
        opacity: 0.7; 
        margin-left:-240px;
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
 <div class="a">
    <h1 class="h1">Chimie générale copie 2</h1><br>
    <h2 class="h2">Options d'inscription :</h2>
    <fieldset class="f1">
        <p><a href="Semestre1.php" target="_blank" class="Tp">Chimie générale copie 2</a></p><br>
        <p><span class="enseignant1"> Enseignant :</span><a href="p.php"><span class="nom1"> Dr Roubai A</span></a></p>
    </fieldset>
    
     <form onsubmit="event.preventDefault(); checkRegistrationKey();">
         <label class="cle">Clef d'inscription:</label>
          <div class="bbv">
            <input type="text" name="text" autocomplete="off"class="input" class="user-label" id="registrationKey">
            <div id="error-message" class="error-message"></div>
         </div>
         <hr>
        <input class="all" type="submit" value="Submit">
    
     </form>
   
</div>
</body>

<script>
    function checkRegistrationKey() {
        var registrationKeyInput = document.getElementById('registrationKey');
        var registrationKey = registrationKeyInput.value;
        var errorMessageElement = document.getElementById('error-message');

        if (registrationKey === "2021") {
            window.location.href = "Cours2.php";
        } else {
            errorMessageElement.textContent = "Invalid registration key. Please try again.";
            registrationKeyInput.focus(); 

        }
    }
</script>
    

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
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 



