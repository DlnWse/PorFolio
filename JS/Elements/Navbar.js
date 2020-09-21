window.onscroll = function () {
    scrollFunction()
  };
  
  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      document.getElementById("navbar").style.backgroundColor = "#007fff";
      document.getElementById("navbar").style.transition = "0.5s";
    } else {
      document.getElementById("navbar").style.backgroundColor = "rgba(0, 0, 0, 0.137)";
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