window.onscroll = function () {
    scrollFunction()
  };
  
  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 1050) {
      document.getElementById("navbar").style.backgroundColor = "#007fff";
      document.getElementById("navbar").style.transition = "0.5s";
    } else {
      document.getElementById("navbar").style.backgroundColor = "";
      document.getElementById("navbar").style.transition = "0.5s";
    }
  }
  
  function navres() {
    var nav = document.getElementById("navbar");
    var res = document.getElementById("responsive");
    if (nav.className === "navbar") {
      nav.className += " responsive";
      
    } else {
      nav.className = "navbar";
      
    }
  }