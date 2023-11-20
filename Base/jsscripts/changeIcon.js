function invertFavIcon() {
  let color = document.getElementsByClassName("favIcon");

  for (let i = 0; i < color.length; i++) {
    color[i].addEventListener("click", function () {
      this.style.filter = "invert(100%)";
    });
  }
}

invertFavIcon();
