const minus = document.querySelector(".minus-btn");
const plus = document.querySelector(".plus-btn");
let inputNumber = parseInt(document.querySelector(".input-number").innerHTML);

plus.addEventListener("click", () => {
  inputNumber++;
  document.querySelector(".input-number").innerHTML = inputNumber;
});

minus.addEventListener("click", () => {
if(inputNumber > 0) inputNumber--;
  document.querySelector(".input-number").innerHTML = inputNumber;
});


var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 40,
      centeredSlides: true,
      thumbs: {
        swiper: swiper,
      },
    });