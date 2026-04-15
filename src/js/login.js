const email = document.querySelector("#email");
const password = document.querySelector("#password");
const loginForm = document.querySelector(".form__loginCard");

loginForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  const emailValue = email.value;
  const passwordValue = password.value;

  try {
    const response = await fetch("http://127.0.0.1:8000/api/login", {
      method: "POST",
      body: JSON.stringify({
        email: emailValue,
        password: passwordValue,
      }),
      headers: {
        "Content-type": "application/json",
        Accept: "application/json",
      },
    });

    const data = await response.json();

    if (!response.ok) {
      const emailError = document.querySelector(".emailError");
      const passError = document.querySelector(".passError");
      let hasError = false;

      if (emailValue === "") {
        emailError.innerText = "Email can`t be blank";
        hasError = true;
      }

      if (passwordValue === "" || passwordValue <= 6) {
        passError.innerText = "Your password is too short!";
        hasError = true;
      }

      if (hasError) return;
    } else {
      localStorage.setItem("user", JSON.stringify(data));

      window.open("http://localhost:8000/", "_self");
    }
  } catch (err) {
    console.log(err);
  }
});

// .then((response) => response.json())
