const minus = document.querySelectorAll(".minus-btn");
const plus = document.querySelectorAll(".plus-btn");
const deleteCard = document.querySelectorAll(".cart__remove");

plus.forEach((p) => {
    p.addEventListener("click", () => {
        const input = p.parentElement.querySelector(".input-number");

        let inputNumber = parseInt(input.innerHTML);
        inputNumber++;
        input.innerHTML = inputNumber;
    });
});

minus.forEach((m) => {
    m.addEventListener("click", () => {
        const input = m.parentElement.querySelector(".input-number");
        let inputNumber = parseInt(input.innerHTML);
        if(inputNumber > 0 ) inputNumber--;
        input.innerHTML = inputNumber;
    });
});

deleteCard.forEach((cross) => {
    cross.addEventListener("click", () => {
        cross.parentElement.style.display = "none"
    })
})

