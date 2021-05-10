function ourProduct(value){
  console.log(value)
  var robotic   = document.getElementById("robotic");
  var simulator = document.getElementById("simulator");
  var vet       = document.getElementById("vet");
  var lms       = document.getElementById("lms");

  if( value === '1')
  {
    robotic.style.display = "block"
    simulator.style.display = "none"
    vet.style.display = "none"
    lms.style.display = "none"
  }else{
    robotic.style.display = "none"
  }

  if( value === '2')
  {
    simulator.style.display = "block"
    robotic.style.display = "none"
    vet.style.display = "none"
    lms.style.display = "none"
  }else{
    simulator.style.display = "none"
  } 

  if( value === '3')
  {
    vet.style.display = "block"
    simulator.style.display = "none"
    robotic.style.display = "none"
    lms.style.display = "none"
  }else{
    vet.style.display = "none"
  }

  if( value === '4')
  {
    lms.style.display = "block"
    simulator.style.display = "none"
    robotic.style.display = "none"
    vet.style.display = "none"
  }else{
    lms.style.display = "none"
  }
}


//button Our Prodct

function clickProduct(value) {
  document.getElementById("myProduct").style.display = "block"
    document.getElementById("myProduct").src = "ourProduct/"+value+".html";
}

//animation
// This changes everything
"use strict";

// retrieve the element
var element = document.getElementById("logo");

// reset the transition by...
element.addEventListener("click", function(e){
  e.preventDefault;
  
  // -> removing the class
  element.classList.remove("run-animation");
  
  // -> triggering reflow /* The actual magic */
  // without this it wouldn't work. Try uncommenting the line and the transition won't be retriggered.
  // This was, from the original tutorial, will no work in strict mode. Thanks Felis Phasma! The next uncommented line is the fix.
  // element.offsetWidth = element.offsetWidth;
  
  void element.offsetWidth;
  
  // -> and re-adding the class
  element.classList.add("run-animation");
}, false);

//smooth scroll





               