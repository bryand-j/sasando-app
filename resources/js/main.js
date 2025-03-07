import "../css/app.css";


const mainHeader = document.querySelector("#header");
const menuBtn = document.querySelector("#menu-btn");
const nav= document.querySelector("#nav")

menuBtn.addEventListener("click", () => {
  mainHeader.dataset.state = mainHeader.dataset.state === "active" ? "closed" : "active";
  if (mainHeader.dataset.state === "active") {
    nav.classList.remove("overflow-hidden")
  }
  else{
    nav.classList.add("overflow-hidden")
  }
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

// import { Dropdown } from '@flexilla/dropdown'

// new Dropdown('#myDropdown', {
//   placement: 'bottom-left',
//   triggerStrategy:"hover", 
 
// })

  const dropdownToggles = document.querySelectorAll(".dropdown-toggle")

  dropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      // Find the next sibling element which is the dropdown menu
      const dropdownMenu = toggle.nextElementSibling
      // Toggle the 'hidden' class to show or hide the dropdown menu
      if (dropdownMenu.classList.contains("hidden")) {
        // Hide any open dropdown menus before showing the new one
        document.querySelectorAll(".dropdown-menu").forEach((menu) => {
          menu.classList.add("hidden")
        })
        dropdownMenu.classList.remove("hidden")
      } else {
        dropdownMenu.classList.add("hidden")
      }
    })
  })

  // Clicking outside of an open dropdown menu closes it
  window.addEventListener("click", function (e) {
    if (!e.target.matches(".dropdown-toggle")) {
      document.querySelectorAll(".dropdown-menu").forEach((menu) => {
        if (!menu.contains(e.target)) {
          menu.classList.add("hidden")
        }
      })
    }
  })

const searchInput = document.querySelectorAll('.search-input');
searchInput.forEach((input) => {
input.addEventListener('input', () => {
    const searchTerm = input.value.toLowerCase();
    const items = input.nextElementSibling.nodeName
    
    console.log(items)
    items.forEach((item) => {
        const text = item.textContent.toLowerCase();
        if (text.includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});
})
  
