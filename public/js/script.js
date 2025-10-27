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
  initializeWhatsAppForm();
});



/**
 * Inicializa el formulario de WhatsApp con validación y envío optimizado
 */
function initializeWhatsAppForm() {
  const elements = getFormElements();
  if (!elements.form) return;

  // Configurar países y autodetección
  setupCountrySelection(elements);
  
  // Configurar validación de teléfono
  setupPhoneValidation(elements);
  
  // Configurar envío del formulario
  setupFormSubmission(elements);
}

/**
 * Obtiene todos los elementos del formulario
 */
function getFormElements() {
  return {
    form: document.getElementById('waForm'),
    countrySelect: document.getElementById('waCountry'),
    dialCodeEl: document.getElementById('waDialCode'),
    phoneInput: document.getElementById('waPhone'),
    messageEl: document.getElementById('waMessage'),
    statusEl: document.getElementById('waStatus'),
    submitBtn: document.getElementById('waSubmit'),
    feedbackEl: document.getElementById('waPhoneFeedback')
  };
}

/**
 * Configura la selección de países con autodetección
 */
async function setupCountrySelection(elements) {
  const { countrySelect, dialCodeEl } = elements;
  
  try {
    const countries = await loadCountries();
    populateCountryOptions(countrySelect, countries);
    await autoDetectCountry(countrySelect, dialCodeEl);
  } catch (error) {
    console.warn('Error loading countries, using fallback:', error);
    loadFallbackCountries(countrySelect, dialCodeEl);
  }
  
  // Listener para cambio de país
  countrySelect.addEventListener('change', () => {
    if (dialCodeEl) dialCodeEl.textContent = countrySelect.value || '+000';
  });
}

/**
 * Puebla las opciones de países en el select
 */
function populateCountryOptions(select, countries) {
  countries.sort((a, b) => a.label.localeCompare(b.label, 'es'));
  
  countries.forEach(country => {
    const option = document.createElement('option');
    option.value = country.dial_code;
    option.textContent = `${country.label} (${country.dial_code})`;
    option.dataset.dial = country.dial_code;
    option.dataset.code = country.code;
    select.appendChild(option);
  });
}

/**
 * Autodetecta el país del usuario
 */
async function autoDetectCountry(countrySelect, dialCodeEl) {
  try {
    const ipCode = await detectCountryByIP();
    const detected = ipCode || detectCountryCode();
    
    const match = [...countrySelect.options].find(
      option => (option.dataset.code || '').toUpperCase() === detected
    );
    
    if (match) {
      countrySelect.value = match.value;
      if (dialCodeEl) dialCodeEl.textContent = match.value;
    } else {
      setDefaultCountry(countrySelect, dialCodeEl);
    }
  } catch (error) {
    setDefaultCountry(countrySelect, dialCodeEl);
  }
}

/**
 * Establece el país por defecto
 */
function setDefaultCountry(countrySelect, dialCodeEl) {
  const firstOption = countrySelect.options[0];
  if (firstOption) {
    countrySelect.value = firstOption.value;
    if (dialCodeEl) dialCodeEl.textContent = firstOption.value;
  }
}

/**
 * Carga países de respaldo si falla la API
 */
function loadFallbackCountries(countrySelect, dialCodeEl) {
  const fallbackCountries = [
    { code: 'EC', dial_code: '+593', label: 'Ecuador' },
    { code: 'CO', dial_code: '+57', label: 'Colombia' },
    { code: 'PE', dial_code: '+51', label: 'Perú' },
    { code: 'MX', dial_code: '+52', label: 'México' },
    { code: 'ES', dial_code: '+34', label: 'España' },
    { code: 'AR', dial_code: '+54', label: 'Argentina' },
    { code: 'US', dial_code: '+1', label: 'Estados Unidos' }
  ];
  
  populateCountryOptions(countrySelect, fallbackCountries);
  countrySelect.value = '+593';
  if (dialCodeEl) dialCodeEl.textContent = '+593';
}

/**
 * Configura la validación del campo de teléfono
 */
function setupPhoneValidation(elements) {
  const { phoneInput, feedbackEl } = elements;
  
  phoneInput.addEventListener('input', () => {
    const cleaned = phoneInput.value.replace(/\D/g, '');
    
    // Actualizar valor solo si cambió
    if (cleaned !== phoneInput.value) {
      phoneInput.value = cleaned;
    }
    
    // Validar longitud
    const isValid = cleaned.length >= 7 && cleaned.length <= 15;
    
    // Actualizar clases CSS
    phoneInput.classList.toggle('is-valid', isValid);
    phoneInput.classList.toggle('is-invalid', !isValid && cleaned.length > 0);
    
    // Actualizar feedback
    if (feedbackEl) {
      feedbackEl.textContent = getPhoneValidationMessage(cleaned, isValid);
    }
  });
}

/**
 * Obtiene el mensaje de validación del teléfono
 */
function getPhoneValidationMessage(phone, isValid) {
  if (phone.length === 0) return '';
  return isValid ? 'Número válido' : 'Ingresa entre 7 y 15 dígitos';
}

/**
 * Configura el envío del formulario
 */
function setupFormSubmission(elements) {
  const { form, countrySelect, phoneInput, messageEl, statusEl, submitBtn, feedbackEl } = elements;
  
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    
    // Validar datos
    const formData = validateFormData(countrySelect, phoneInput, messageEl, feedbackEl);
    if (!formData) return;
    
    // Enviar mensaje
    await sendWhatsAppMessage(form, formData, statusEl, submitBtn);
  });
}

/**
 * Valida los datos del formulario
 */
function validateFormData(countrySelect, phoneInput, messageEl, feedbackEl) {
  const dialCode = countrySelect.value;
  const phone = phoneInput.value.trim();
  const message = (messageEl?.value || '').trim();
  
  const isValidPhone = phone.length >= 7 && phone.length <= 15 && /^\d+$/.test(phone);
  
  if (!isValidPhone) {
    if (feedbackEl) {
      feedbackEl.textContent = 'Verifica el número (solo dígitos, 7–15).';
    }
    phoneInput.classList.add('is-invalid');
    phoneInput.focus();
    return null;
  }
  
  return { dial_code: dialCode, phone, message };
}

/**
 * Envía el mensaje de WhatsApp
 */
async function sendWhatsAppMessage(form, formData, statusEl, submitBtn) {
  const csrfToken = form.querySelector('input[name=_token]')?.value;
  
  // Estado de carga
  setFormStatus(statusEl, 'Enviando…', 'is-loading');
  submitBtn.disabled = true;
  
  try {
    const response = await fetch(form.action, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken || ''
      },
      body: JSON.stringify(formData)
    });
    
    const data = await response.json().catch(() => ({
      success: false,
      message: 'Error al procesar la respuesta del servidor'
    }));
    
    if (response.ok && data.success) {
      setFormStatus(statusEl, '¡Mensaje enviado por WhatsApp!', 'is-success');
      form.reset(); // Limpiar formulario después del éxito
    } else {
      const errorMessage = data.message || 'No se pudo enviar el mensaje. Intenta nuevamente.';
      setFormStatus(statusEl, errorMessage, 'is-error');
    }
    
  } catch (error) {
    console.error('Error sending WhatsApp message:', error);
    setFormStatus(statusEl, 'Error de conexión. Verifica tu internet.', 'is-error');
  } finally {
    submitBtn.disabled = false;
    // Limpiar estado de carga después de un tiempo
    setTimeout(() => {
      statusEl.classList.remove('is-loading');
    }, 1200);
  }
}

/**
 * Establece el estado del formulario
 */
function setFormStatus(statusEl, text, className) {
  statusEl.textContent = text;
  statusEl.classList.remove('is-loading', 'is-success', 'is-error');
  if (className) {
    statusEl.classList.add(className);
  }
}

async function loadCountries() {
  try {
    const res = await fetch('https://restcountries.com/v3.1/all?fields=cca2,name,idd,translations');
    const data = await res.json();
    return data
      .map((d) => {
        const label = d.translations?.spa?.common || d.name?.common || d.cca2;
        const root = d.idd?.root || '';
        const suffix = Array.isArray(d.idd?.suffixes) && d.idd.suffixes.length ? d.idd.suffixes[0] : '';
        const dial_code = `${root}${suffix}`;
        return { code: d.cca2?.toUpperCase?.() || '', dial_code, label };
      })
      .filter((x) => x.code && x.dial_code);
  } catch (e) {
    return Promise.reject(e);
  }
}

// Detección de país por IP con múltiples proveedores (fallbacks)
async function detectCountryByIP() {
  const providers = [
    async () => {
      const res = await fetch('https://ipapi.co/json/');
      const data = await res.json();
      return (data && data.country) ? String(data.country).toUpperCase() : null;
    },
    async () => {
      const res = await fetch('https://ipwho.is/');
      const data = await res.json();
      return (data && data.success && data.country_code) ? String(data.country_code).toUpperCase() : null;
    }
  ];

  for (const getCode of providers) {
    try {
      const code = await getCode();
      if (code) return code;
    } catch (_) {
      // continue to next provider
    }
  }
  return null;
}
function detectCountryCode() {
  const lang = (navigator.languages && navigator.languages[0]) || navigator.language || 'es-EC';
  const parts = lang.split('-');
  return (parts[1] || parts[0] || 'EC').toUpperCase();
}