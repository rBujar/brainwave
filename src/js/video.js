const videoButton = document.querySelector(".play-btn")
const videoContent = document.querySelector(".content")
const video = document.querySelector(".video-bg")

function playVideo(){
  video.play()
 videoContent.classList.toggle("active");
}

function restartVideo(){
videoContent.classList.toggle("active");
}

videoButton.addEventListener("click", playVideo)

video.addEventListener("ended", restartVideo)