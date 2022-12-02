var flipCheck = 0;

function rotateCards() {
  if (flipCheck === 0) {
 
    flipCheck = 1;
    setTimeout(function () {
      document.getElementById("front-4").classList.add("showGreen");
      document.getElementById("back-4").classList.add("showRed");

      document.getElementById("front-3").classList.add("showGreen");
      document.getElementById("back-3").classList.add("showRed");

      document.getElementById("front-5").classList.add("showGreen");
      document.getElementById("back-5").classList.add("showRed");

    }, 500);
  } else {
 

    flipCheck = 0;

    setTimeout(function () {
      document.getElementById("front-3").classList.remove("showGreen");
      document.getElementById("back-3").classList.remove("showRed");

      document.getElementById("front-4").classList.remove("showGreen");
      document.getElementById("back-4").classList.remove("showRed");

      document.getElementById("front-5").classList.remove("showGreen");
      document.getElementById("back-5").classList.remove("showRed");

    }, 500);
  }
}

setInterval(rotateCards, 3000); // Time in milliseconds
