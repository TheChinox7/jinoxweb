'use strict';



// element toggle function
const elementToggleFunc = function (elem) { elem.classList.toggle("active"); }



// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });



// testimonials variables
const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// modal variable
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

// modal toggle function
const testimonialsModalFunc = function () {
  modalContainer.classList.toggle("active");
  overlay.classList.toggle("active");
}

// add click event to all modal items
for (let i = 0; i < testimonialsItem.length; i++) {

  testimonialsItem[i].addEventListener("click", function () {

    modalImg.src = this.querySelector("[data-testimonials-avatar]").src;
    modalImg.alt = this.querySelector("[data-testimonials-avatar]").alt;
    modalTitle.innerHTML = this.querySelector("[data-testimonials-title]").innerHTML;
    modalText.innerHTML = this.querySelector("[data-testimonials-text]").innerHTML;

    testimonialsModalFunc();

  });

}

// add click event to modal close button
modalCloseBtn.addEventListener("click", testimonialsModalFunc);
overlay.addEventListener("click", testimonialsModalFunc);



// custom select variables
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

select.addEventListener("click", function () { elementToggleFunc(this); });

// add event in all select items
for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);

  });
}

// filter variables
const filterItems = document.querySelectorAll("[data-filter-item]");

const filterFunc = function (selectedValue) {

  for (let i = 0; i < filterItems.length; i++) {

    if (selectedValue === "all") {
      filterItems[i].classList.add("active");
    } else if (selectedValue === filterItems[i].dataset.category) {
      filterItems[i].classList.add("active");
    } else {
      filterItems[i].classList.remove("active");
    }

  }

}

// add event in all filter button items for large screen
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {

  filterBtn[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedValue);

    lastClickedBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedBtn = this;

  });

}



// contact form variables
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// add event to all form input field
for (let i = 0; i < formInputs.length; i++) {
  formInputs[i].addEventListener("input", function () {

    // check form validation
    if (form.checkValidity()) {
      formBtn.removeAttribute("disabled");
    } else {
      formBtn.setAttribute("disabled", "");
    }

  });
}



// Mapa de secciones para la navegación
const SECTIONS_MAP = {
    'sobre mí': 'sobre-mi',
    'currículum': 'curriculum',
    'portafolio': 'portafolio',
    'contacto': 'contacto'
};

// Función principal de navegación
function initializeNavigation() {
    const navigationLinks = document.querySelectorAll("[data-nav-link]");
    const pages = document.querySelectorAll("[data-page]");
    let currentPage = null;

    // Función para animar el cambio de sección
    async function animatePageTransition(oldPage, newPage) {
        // Si hay una página actual, animamos su salida
        if (oldPage) {
            oldPage.classList.add('fade-out');
            await new Promise(resolve => setTimeout(resolve, 500)); // Esperar la animación
            oldPage.classList.remove('active', 'fade-out');
        }

        // Animamos la entrada de la nueva página
        newPage.classList.add('active');
        window.scrollTo(0, 0);
    }

    // Función para cambiar de sección
    async function switchSection(clickedButton) {
        // 1. Actualizar botones de navegación
        navigationLinks.forEach(link => link.classList.remove("active"));
        clickedButton.classList.add("active");

        // 2. Encontrar la página correspondiente
        const buttonText = clickedButton.textContent.toLowerCase().trim();
        const targetPageId = SECTIONS_MAP[buttonText] || buttonText;
        const targetPage = document.querySelector(`[data-page="${targetPageId}"]`);

        if (!targetPage) return;

        // 3. Animar el cambio de página
        const oldPage = document.querySelector('[data-page].active');
        await animatePageTransition(oldPage, targetPage);

        currentPage = targetPage;
    }

    // Configurar event listeners
    navigationLinks.forEach(button => {
        button.addEventListener("click", async function(e) {
            e.preventDefault();
            await switchSection(this);
        });
    });

    // Activar la primera sección por defecto
    if (navigationLinks.length > 0) {
        switchSection(navigationLinks[0]);
    }
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    initializeNavigation();
});