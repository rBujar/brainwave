const minus = document.querySelector(".minus-btn");
const plus = document.querySelector(".plus-btn");
let inputNumber = parseInt(document.querySelector(".input-number").innerHTML);
const deleteCard = document.querySelectorAll(".cart__remove");
const card = document.querySelectorAll(".cart__card")

plus.addEventListener("click", () => {
  inputNumber++;
  document.querySelector(".input-number").innerHTML = inputNumber;
});

minus.addEventListener("click", () => {
if(inputNumber > 0) inputNumber--;
  document.querySelector(".input-number").innerHTML = inputNumber;
});


deleteCard.forEach((cross, i) => {
  cross.addEventListener("click", () => {
    deleteCard.forEach((x, j) => {
      if (j == i) {
        card[j].style.display = "none";
      }
    });
  });
});
