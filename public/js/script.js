'use strict';



// element toggle function
const elementToggleFunc = function (elem) { elem.classList.toggle("active"); }



// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
if (sidebarBtn) {
  sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });
}



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
if (modalCloseBtn) modalCloseBtn.addEventListener("click", testimonialsModalFunc);
if (overlay) overlay.addEventListener("click", testimonialsModalFunc);



// custom select and portfolio filter (con guardas para evitar errores si no existen)
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

if (select) {
  select.addEventListener("click", function () { elementToggleFunc(this); });
  for (let i = 0; i < selectItems.length; i++) {
    selectItems[i].addEventListener("click", function () {
      let selectedValue = this.innerText.toLowerCase();
      if (selectValue) selectValue.innerText = this.innerText;
      elementToggleFunc(select);
      filterFunc(selectedValue);
    });
  }
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
if (filterBtn && filterBtn.length > 0) {
  let lastClickedBtn = filterBtn[0];
  for (let i = 0; i < filterBtn.length; i++) {
    filterBtn[i].addEventListener("click", function () {
      let selectedValue = this.innerText.toLowerCase();
      if (selectValue) selectValue.innerText = this.innerText;
      filterFunc(selectedValue);
      if (lastClickedBtn) lastClickedBtn.classList.remove("active");
      this.classList.add("active");
      lastClickedBtn = this;
    });
  }
}

/* Lógica del botón "Ver" en tarjetas de proyectos:
   - Prioriza data-prod-url si está disponible
   - Caso contrario, usa data-repo-url
*/
document.addEventListener('DOMContentLoaded', () => {
  // Actualizar botón (aunque esté oculto) para mantener compatibilidad de datos
  document.querySelectorAll('.btn-view').forEach(function (btn) {
    const prod = btn.getAttribute('data-prod-url');
    const repo = btn.getAttribute('data-repo-url');
    const target = (prod && prod.trim().length > 0) ? prod : repo;
    if (target && target.trim().length > 0) {
      btn.setAttribute('href', target);
      btn.setAttribute('rel', 'noopener noreferrer');
      btn.setAttribute('target', '_blank');
    } else {
      btn.removeAttribute('href');
      btn.setAttribute('disabled', 'disabled');
    }
  });

  // Inyectar ícono overlay dentro de cada imagen de tarjeta y priorizar enlace
  document.querySelectorAll('.project-card').forEach(function (card) {
    const media = card.querySelector('.project-media');
    if (!media) return;

    // Obtener datos del botón oculto (si existe)
    const btn = card.querySelector('.btn-view');
    const prod = btn ? btn.getAttribute('data-prod-url') : '';
    const repo = btn ? btn.getAttribute('data-repo-url') : '';
    const target = (prod && prod.trim().length > 0) ? prod : (repo && repo.trim().length > 0 ? repo : '');

    // Ícono overlay clicable dentro de la imagen
    const anchor = document.createElement('a');
    anchor.className = 'project-link-icon';
    anchor.setAttribute('target', '_blank');
    anchor.setAttribute('rel', 'noopener noreferrer');
    anchor.setAttribute('aria-label', 'Abrir proyecto');

    if (target) {
      anchor.setAttribute('href', target);
    } else {
      anchor.setAttribute('aria-disabled', 'true');
    }

    // Elegir ícono según destino: producción -> open-outline, solo repo -> logo-github
    const hasProd = prod && prod.trim().length > 0;
    const hasRepo = !hasProd && repo && repo.trim().length > 0;
    const iconName = hasProd ? 'open-outline' : (hasRepo ? 'logo-github' : 'open-outline');
    const ariaLabel = hasProd ? 'Abrir producción' : (hasRepo ? 'Abrir repositorio' : 'Abrir proyecto');
    if (hasProd) anchor.classList.add('is-prod');
    if (hasRepo) anchor.classList.add('is-repo');
    anchor.setAttribute('aria-label', ariaLabel);
    anchor.innerHTML = `<ion-icon name="${iconName}"></ion-icon>`;

    media.appendChild(anchor);

    // Hacer el título clicable y que lleve al mismo destino
    const titleEl = card.querySelector('.project-content .project-title');
    if (titleEl && target) {
      const existingLink = titleEl.querySelector('a');
      if (existingLink) {
        existingLink.setAttribute('href', target);
        existingLink.setAttribute('target', '_blank');
        existingLink.setAttribute('rel', 'noopener noreferrer');
        existingLink.setAttribute('aria-label', 'Abrir proyecto desde título');
      } else {
        const titleLink = document.createElement('a');
        titleLink.className = 'project-title-link';
        titleLink.setAttribute('href', target);
        titleLink.setAttribute('target', '_blank');
        titleLink.setAttribute('rel', 'noopener noreferrer');
        titleLink.setAttribute('aria-label', 'Abrir proyecto desde título');
        titleLink.textContent = titleEl.textContent.trim();
        titleEl.textContent = '';
        titleEl.appendChild(titleLink);
      }
    }
  });
});



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

  // Cambio de sección sin animación
  async function animatePageTransition(oldPage, newPage) {
    if (oldPage) {
      oldPage.classList.remove('active', 'fade-out');
    }
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
    button.addEventListener("click", async function (e) {
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
document.addEventListener('DOMContentLoaded', function () {
  initializeNavigation();
});
