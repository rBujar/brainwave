const reset = document.querySelector('.form__button')
const form = document.querySelector(".form__resetPassword")
const emailError = document.querySelector(".emailError");
const email = document.querySelector("#email");


form.addEventListener('submit', (e) =>{
    e.preventDefault();
    const emailValue = email.value;
    let hasError = false;

    if (emailValue === "") {
        emailError.innerText = "Email can`t be blank";
        hasError = true;
      }
      if (hasError) return;

      if(!hasError){
        alert("You will be sent an Email.")
        window.open("http://localhost:8000/login.php", "_self");
      }
})

      
