const hamburger = document.querySelector(".header__hamburger");
const headerMenu = document.querySelector(".header__nav");
const menuItem = document.querySelectorAll(".header__item");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  headerMenu.classList.toggle("active");
  document.body.classList.toggle("no-scroll");
});

menuItem.forEach((item) => {
  item.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    headerMenu.classList.toggle("active");
    if (window.innerWidth < 1200) {
      document.body.classList.toggle("no-scroll");
    }
  });
});

const videoButton = document.querySelector(".play-btn")
const video = document.querySelector(".careerHero__video-bg")

function playVideo(){
  video.play()
  videoButton.classList.toggle("active");
}

function restartVideo(){
  videoButton.classList.toggle("active");
}

videoButton.addEventListener("click", playVideo)

video.addEventListener("ended", restartVideo)