const logout = document.querySelector(".header__logout")

const user = JSON.parse(localStorage.getItem('user'));

const isNetlify = window.location.hostname.includes("netlify");

const loginPage = isNetlify ? "/login.html" : "/login.php";



if(!user){
    window.location.href = loginPage;
}else{
  console.log("You are logged in")
  logout.classList.toggle("active")
}

logout.addEventListener("click", async (e) =>{
  e.preventDefault();

const response = await fetch("http://127.0.0.1:8000/api/logout", {
    method: "POST",
    headers: { "Content-type": "application/json",
      "Accept": "application/json",
      'Authorization': `Bearer ${user.token}`
     },
  })

  if(response.ok){
    localStorage.removeItem("user");
    window.open("http://localhost:8000/login.php", "_self");
  }
}
) 
