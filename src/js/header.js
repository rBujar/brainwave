const hamburger = document.querySelector(".header__hamburger");
const headerMenu = document.querySelector(".header__nav");
const menuItem = document.querySelectorAll(".header__item");
const logout = document.querySelector(".header__logout")

const user = JSON.parse(localStorage.getItem('user'));

if(!user){
  alert("You need to log in")
  window.open("http://localhost:8000/login.php", "_self");
}else{
  console.log("You are logged in")
  logout.classList.toggle("active")
}

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  headerMenu.classList.toggle("active");
  document.body.classList.toggle("no-scroll");
});

menuItem.forEach((item) => {
  item.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    headerMenu.classList.toggle("active");
    if (window.innerWidth < 1200) {
      document.body.classList.toggle("no-scroll");
    }
  });
});

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
