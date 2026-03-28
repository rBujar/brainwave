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