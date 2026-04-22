const minus = document.querySelector(".minus-btn");
const plus = document.querySelector(".plus-btn");
let inputNumber = parseInt(document.querySelector(".input-number").innerHTML);
const button = document.querySelectorAll(".product__detailBtn")
const detailItem = document.querySelectorAll(".product__item")
const smallProduct = document.querySelectorAll(".product__smallSlide")

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
      breakpoints: {
        768: {
          direction: 'vertical'
        }
      }
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 40,
      centeredSlides: true,
      thumbs: {
        swiper: swiper,
      },
    });

button.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    button.forEach((b, j) => {
      if (j !== i) {
        b.classList.remove("active");
        detailItem[j].classList.remove("active");
      }
    });
    btn.classList.toggle("active");
    detailItem[i].classList.toggle("active");
  });
});
