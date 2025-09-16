const checkbox = document.getElementById("hamburger-toggle");
const headerlist = document.getElementById("header-list");

checkbox.addEventListener("change", (event) => {
  if (event.currentTarget.checked) {
    headerlist.style.display = "inline";
  } else {
    headerlist.style.display = "none";
  }
});
