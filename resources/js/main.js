import "../css/app.css";

const mainHeader = document.querySelector("#header");
const menuBtn = document.querySelector("#menu-btn");

menuBtn.addEventListener("click", () => {
  mainHeader.dataset.state = mainHeader.dataset.state === "active" ? "closed" : "active";
})

let switchers = document.querySelectorAll(".switcher");
if (
  localStorage.getItem("color-theme") === "dark" ||
  (!("color-theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  document.documentElement.classList.add("dark");
} else {
  document.documentElement.classList.remove("dark");
}

switchers.forEach((switcher) => {
  switcher.addEventListener("click", function () {
    if (localStorage.getItem("color-theme")) {
      if (localStorage.getItem("color-theme") === "light") {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
      } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
      }
    } else {
      if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
      } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
      }
    }
  });
});


function setCustomization(document) {
  const palette = localStorage.getItem('palette') || 'tls'
  const shade = localStorage.getItem('shade') || 'glassy'
  const rounded = localStorage.getItem('rounded') || 'large'

  const root = document.documentElement

  root.dataset.palette = palette
  root.dataset.shade = shade
  root.dataset.rounded = rounded

  
}
setCustomization(document)

import { Dropdown } from '@flexilla/dropdown'

new Dropdown('#myDropdown', {
  offsetDistance: 8,
  placement: 'bottom-middle',
  triggerStrategy:"hover", 
 
})
