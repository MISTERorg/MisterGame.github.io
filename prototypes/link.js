const arrowdown = document.querySelector(".create_first");
const arrow = document.querySelector("#crossover");

arrow.addEventListener("click", () =>{
  if(arrowdown.style.transform == "rotate(90deg)"){
    arrowdown.style.transform = "rotate(0deg)"
    call.style.display="block";
    arrowdown.style.color = "cyan";
  }
  else{
    arrowdown.style.transform = "rotate(90deg)"
    arrowdown.style.color = "white";
    call.style.display="none";
  }
})