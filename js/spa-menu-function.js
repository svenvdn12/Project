"use strict";

document.querySelector(".welkom").scrollIntoView(false);

const button = document.querySelector("#hamburger-toggle");
let isOpen = false;
const pages = ["welkom", "galerij", "events"];

button.addEventListener("click", function () {
  if (isOpen) {
    document.querySelector(".welkom").scrollIntoView({ behavior: "smooth" });
    isOpen = false;
  } else {
    document.querySelector(".menu").scrollIntoView({ behavior: "smooth" });
    isOpen = true;
  }
});

for (let stop of document.querySelectorAll(".stop")) {
  for (let page of pages) {
    stop.innerHTML += `<h2>${page}</h2>`;
  }
}
