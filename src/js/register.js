const fName = document.querySelector("#name");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const confirmPassword = document.querySelector("#password_confirmation");
const registerForm = document.querySelector(".form__registerCard");
const checkbox = document.querySelector("#checkbox");

registerForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  const nameValue = fName.value;
  const emailValue = email.value;
  const passwordValue = password.value;
  const confirmPassValue = confirmPassword.value;

    const API_BASE =
  window.location.hostname.includes("localhost")
    ? "http://127.0.0.1:8000"
    : "https://4c48-37-26-70-153.ngrok-free.app";


  if (validateCheck()) {
    try {
      const response = await fetch(`${API_BASE}/api/register`, {
        method: "POST",
        body: JSON.stringify({
          name: nameValue,
          email: emailValue,
          password: passwordValue,
          password_confirmation: confirmPassValue,
        }),
        headers: {
          "Content-type": "application/json",
          Accept: "application/json",
        },
      });
      const data = await response.json();

      if (!response.ok) {
        alert("Error All the fields should be filled.");
        console.log(data);
        return;
      } else {
        window.location.href = "/";
      }
    } catch (err) {
      console.log(err);
    }
  }

  const nameError = document.querySelector(".nameError");
  const emailError = document.querySelector(".emailError");
  const passError = document.querySelector(".passError");
  const confirmPassError = document.querySelector(".confirmError");
  let hasError = false;

  const emailRegex = /^\S+@\S+\.\S+$/;
  const nameRegex = /^[a-zA-Z\s-]{3,}$/;

  if (nameValue === "") {
    nameError.innerText = "Name can`t be blank";
    hasError = true;
  } else if (!nameRegex.test(nameValue)) {
    nameError.innerText = "Invalid name";
    hasError = true;
  }

  if (emailValue === "") {
    emailError.innerText = "Email can`t be blank";
    hasError = true;
  } else if (!emailRegex.test(emailValue)) {
    emailError.innerText = "Invalid email";
    hasError = true;
  }

  if (passwordValue === "" || passwordValue <= 6) {
    passError.innerText = "Your password is too short!";
    hasError = true;
  }

  if (confirmPassValue !== passwordValue) {
    confirmPassError.innerText = "Password should match";
    hasError = true;
  } else if (confirmPassValue === "") {
    confirmPassError.innerText = "You must confirm your password!";
    hasError = true;
  }

  if (hasError) return;
});

function validateCheck() {
  if (!checkbox.checked) {
    alert("You have to accept the terms first");
    return false;
  } else {
    return true;
  }
}
