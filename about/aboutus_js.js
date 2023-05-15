function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

//Pre-loder
var preloder=document.getElementById('loading');
  function hariyaloder(){
    preloder.style.display='none';
}

// nav slide
var pos = document.documentElement;
	pos.addEventListener("mousemove", e => {
		pos.style.setProperty('--x', e.clientX + "px");
		pos.style.setProperty('--y', e.clientY + "px");
	})

// Initialize Swiper
var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 25,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  loop: true,
  autoplay: {
    delay: 5500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

// music slide
var swiper2 = new Swiper('.swiper-container2', {
  effect: 'cube',
  grabCursor: true,
  cubeEffect: {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

// game logo
function game_error() {
	swal("Error !", "To play this game you have to Sign In !", "error");
}

// game logo
function music_error() {
	swal("Error !", "To play this music you have to Sign In !", "error");
}

// scroll bar
var progressbar=document.getElementById("progressbar");
var percent=document.getElementById("percent");
var totalHeight=document.body.scrollHeight-window.innerHeight;
window.onscroll=function(){
  var progress=(window.pageYOffset/totalHeight)*100;
  progressbar.style.height=progress+"%";
  //percent.innerHTML="Page Scrolled "+ Math.round(progress)+"%"
}