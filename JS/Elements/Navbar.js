function navres() {
  var nav = document.getElementById("navbar");
  var res = document.getElementById("responsive");
  if (nav.className === "navbar") {
    nav.className += " responsive";

  } else {
    nav.className = "navbar";

  }
}

