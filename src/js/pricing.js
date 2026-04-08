const answer = document.querySelectorAll(".questions__answer");
const question = document.querySelectorAll(".questions__item");
const askArrow = document.querySelectorAll(".rightArrow");

askArrow.forEach((arrow, i) => {
  arrow.addEventListener("click", () => {
    askArrow.forEach((a, j) => {
      if (j !== i) {
        a.classList.remove("active");
        answer[j].classList.remove("active");
        question[j].classList.remove("active");
      }
    });

    arrow.classList.toggle("active");
    answer[i].classList.toggle("active");
    question[i].classList.toggle("active");
  });
});
