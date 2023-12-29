// Changing the style of scroll bar
// window.onscroll = function() {myFunction()};
		
// function myFunction() {
// 	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
// 	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
// 	var scrolled = (winScroll / height) * 100;
// 	document.getElementById("myBar").style.width = scrolled + "%"; 
// }

function scrollAppear() {
  var introText = document.querySelector('.side-text');
  var sideImage = document.querySelector('.sideImage');
  var introPosition = introText.getBoundingClientRect().top;
  var imagePosition = sideImage.getBoundingClientRect().top;
  
  var screenPosition = window.innerHeight / 1.2;

  if(introPosition < screenPosition) {
    introText.classList.add('side-text-appear');
  }
  if(imagePosition < screenPosition) {
    sideImage.classList.add('sideImage-appear');
  }
}

window.addEventListener('scroll', scrollAppear);

// For switching between navigation menus in mobile mode
var i = 2;
function switchTAB() {
	var x = document.getElementById("list-switch");
	if(i%2 == 0) {
		document.getElementById("list-switch").style= "display: grid; height: 50vh; margin-left: 5%;";
		document.getElementById("search-switch").style= "display: block; margin-left: 5%;";
	}else {
		document.getElementById("list-switch").style= "display: none;";
		document.getElementById("search-switch").style= "display: none;";
	}
	i++;
}

// For LOGIN
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");
var a = document.getElementById("log");
var b = document.getElementById("reg");
var w = document.getElementById("other");

function register() {
  x.style.left = "-400px";
  y.style.left = "50px";
  z.style.left = "110px";
  w.style.visibility = "hidden";
  b.style.color = "#fff";
  a.style.color = "#000";
}

function login() {
  x.style.left = "50px";
  y.style.left = "450px";
  z.style.left = "0px";
  w.style.visibility = "visible";
  a.style.color = "#fff";
  b.style.color = "#000";
}
  


// QUIZ Page


//<-- search bar -->

function search() {
  // Get the input value
  var input = document.getElementById('searchInput').value.toUpperCase();

  // Get the container of the items you want to filter
  var serviceContainer = document.querySelector('.service-swipe');
  var courseContainer = document.querySelector('.course');

  // Get all items inside the containers
  var serviceItems = serviceContainer.querySelectorAll('.s-card');
  var courseItems = courseContainer.querySelectorAll('.det');

  // Loop through service items and hide those that don't match the search query
  for (var i = 0; i < serviceItems.length; i++) {
      var textValue = serviceItems[i].textContent || serviceItems[i].innerText;
      if (textValue.toUpperCase().indexOf(input) > -1) {
          serviceItems[i].style.display = '';
      } else {
          serviceItems[i].style.display = 'none';
      }
  }

  // Loop through course items and hide those that don't match the search query
  for (var i = 0; i < courseItems.length; i++) {
      var textValue = courseItems[i].textContent || courseItems[i].innerText;
      if (textValue.toUpperCase().indexOf(input) > -1) {
          courseItems[i].style.display = '';
      } else {
          courseItems[i].style.display = 'none';
      }
  }
}