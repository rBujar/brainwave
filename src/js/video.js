const videoButton = document.querySelector(".play-btn")
const videoContent = document.querySelector(".previewVideo__content")
const video = document.querySelector(".previewVideo__video-bg")

function playVideo(){
  video.play()
  videoContent.classList.toggle("active");
}

function restartVideo(){
  videoContent.classList.toggle("active");
}

videoButton.addEventListener("click", playVideo)

video.addEventListener("ended", restartVideo)