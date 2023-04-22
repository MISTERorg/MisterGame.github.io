//defining 
const selected = document.querySelector(".default_option");
const optionsContainer = document.querySelector(".contains");

const optionsList = document.querySelectorAll(".containing");
const dropOptions = document.querySelector(".dropdown ul li");



selected.addEventListener("click", () =>{
  optionsContainer.classList.toggle("drop");
})

//Go to top playstation button Javascript
window.addEventListener('scroll', function(){
  var scroll = document.querySelector(".gotop");
  scroll.classList.toggle("active", window.scrollY > 300)
})

window.addEventListener('scroll', function(){
  var top_nav = document.querySelector("#navigation-view");
  top_nav.classList.toggle("boyard", window.scrollY > 200 )
})
//Gotop button index
window.addEventListener('scroll', function(){
  var scroll = document.querySelector(".gotop123");
  scroll.classList.toggle("active", window.scrollY > 300)
})



const swift = document.querySelector(".iconic");
const navigation = document.querySelector(".biggest");

swift.addEventListener("click", () =>{
  navigation.classList.toggle("pushdown");
})

//For media query navigation bar
const arrowdown = document.querySelector(".create_first");
const arrow = document.querySelector("#crossover");

arrow.addEventListener("click", () =>{
  if(arrowdown.style.transform == "rotate(90deg)"){
    arrowdown.style.transform = "rotate(0deg)"
  }
  else{
    arrowdown.style.transform = "rotate(90deg)"
  }
})

const logged = document.querySelector(".inner_nav ul ul");
const login_button = document.querySelector(".login-button");

login_button.addEventListener("click", ()=>{
  logged.classList.toggle("logged_in");
})









//email sending respond 
function myFunction(){
  alert ("Your Email has been sent, we will get to you later");
}



