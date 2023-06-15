//sumbit button link
function subbtn()
{
  location.replace('cart.html')
}


//dropdown 1
const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

//dropdown 2
const selected1 = document.querySelector(".selected1");
const optionsContainer1 = document.querySelector(".options-container1");

const options1List = document.querySelectorAll(".option1");

selected1.addEventListener("click", () => {
  optionsContainer1.classList.toggle("active1");
});

options1List.forEach(o => {
  o.addEventListener("click", () => {
    selected1.innerHTML = o.querySelector("label1").innerHTML;
    optionsContainer1.classList.remove("active1");
  });
});

//dropdown 3
const selected2 = document.querySelector(".selected2");
const optionsContainer2 = document.querySelector(".options-container2");

const options2List = document.querySelectorAll(".option2");

selected2.addEventListener("click", () => {
  optionsContainer2.classList.toggle("active2");
});

options2List.forEach(o => {
  o.addEventListener("click", () => {
    selected2.innerHTML = o.querySelector("label2").innerHTML;
    optionsContainer2.classList.remove("active2");
  });
});


