<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jino Morales - Desarrollador FullStack | Portafolio Profesional</title>
    <meta name="description"
        content="Portafolio profesional de Jino Morales, Desarrollador FullStack con experiencia en desarrollo web y aplicaciones. Conozca mis proyectos y habilidades.">
    <meta name="keywords"
        content="Jino Morales, desarrollador fullstack, portafolio, desarrollo web, Ecuador, programador, frontend, backend">
    <meta name="author" content="Jino Morales">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Jino Morales - Desarrollador FullStack">
    <meta property="og:description"
        content="Portafolio profesional de Jino Morales, Desarrollador FullStack con experiencia en desarrollo web y aplicaciones.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jinomorales.com/">
    <meta property="og:image" content="./assets/images/my-avatar.png">

    <!-- FAVICON -->
    {{-- cambiar --}}
    <link rel="shortcut icon" href="{{ asset('images/my-avatar.png')}}" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animations.css')}}">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- MAIN -->
    <main>
        <!-- SIDEBAR -->
        <aside class="sidebar" data-sidebar>
            <div class="sidebar-info">
                <figure class="avatar-box">
                    {{-- cambiar --}}
                    <img src="{{ asset('images/Foto Jino 2.png')}}" alt="Jino Morales" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Jino Morales">Jino Morales</h1>
                    <p class="title">Full Stack & Líder Técnico</p>
                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Ver Info</span>
                    <ion-icon name="chevron-down"></ion-icon>
                </button>
            </div>

            <div class="sidebar-info_more">
                <div class="separator"></div>

                <ul class="contacts-list">
                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <div class="contact-info">
                            <p class="contact-title">Correo</p>
                            <a href="mailto:jino0000morales0000@gmail.com"
                                class="contact-link">jino0000morales0000@gmail.com</a>
                        </div>
                    </li>

                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>
                        <div class="contact-info">
                            <p class="contact-title">Teléfono</p>
                            <a href="tel:+593962894078" class="contact-link">+593 962894078</a>
                        </div>
                    </li>


                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>
                        <div class="contact-info">
                            <p class="contact-title">Ubicación</p>
                            <address>Quito - Ecuador</address>
                        </div>
                    </li>
                </ul>

                <div class="separator"></div>

                <ul class="social-list">
                    <li class="social-item">
                        <a href="https://www.linkedin.com/in/jino-morales/" class="social-link" target="_blank">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://github.com/TheChinox7" class="social-link" target="_blank">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="{{ asset('CV Jino Morales.pdf') }}" class="social-link" target="_blank" aria-label="Ver CV en PDF">
                            <ion-icon name="document-outline"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <!-- NAVBAR -->
            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <button class="navbar-link active" data-nav-link>
                            <ion-icon name="person-circle-outline"></ion-icon>
                            <span>Sobre mí</span>
                        </button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>
                            <ion-icon name="document-text-outline"></ion-icon>
                            <span>Currículum</span>
                        </button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>
                            <ion-icon name="briefcase-outline"></ion-icon>
                            <span>Portafolio</span>
                        </button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>
                            <ion-icon name="mail-outline"></ion-icon>
                            <span>Contacto</span>
                        </button>
                    </li>
                </ul>
            </nav>

            <!-- ABOUT -->
            <article class="about active" data-page="sobre-mi">
                <header>
                    <h2 class="h2 article-title">Sobre mí</h2>
                </header>

                <section class="about-text">
                    <p style="text-align: justify;">
                        Full Stack Developer y Líder Técnico con más de 5 años desarrollando plataformas SaaS, sistemas a medida y soluciones escalables. Experto en PHP (Laravel), Node.js y arquitectura backend. Orientado a resultados y a entregar software estable, documentado y mantenible.
                    </p>

                    <p style="text-align: justify;">
                        He trabajado tanto en empresas como de forma freelance liderando equipos, definiendo arquitectura, integrando APIs y optimizando rendimiento. Enfocado en buenas prácticas, seguridad y experiencia de usuario.
                    </p>
                </section>

                <!-- SERVICES SECTION -->
                <section class="service">
                    <h3 class="h3 service-title">Lo que hago</h3>
                    <ul class="service-list">
                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="{{ asset('images/icon-design.svg') }}" alt="ícono de diseño" width="40">
                            </div>
                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Diseño web</h4>
                                <p class="service-item-text">
                                    Diseño moderno y de alta calidad realizado a nivel profesional.
                                </p>
                            </div>
                        </li>

                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="{{ asset('images/icon-dev.svg') }}" alt="ícono de desarrollo web" width="40">
                            </div>
                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Desarrollo web</h4>
                                <p class="service-item-text">
                                    Desarrollo de sitios web de alta calidad a nivel profesional.
                                </p>
                            </div>
                        </li>

                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="{{ asset('images/icon-app.svg') }}" alt="ícono de aplicación móvil" width="40">
                            </div>
                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Aplicaciones móviles</h4>
                                <p class="service-item-text">
                                    Desarrollo profesional de aplicaciones para iOS y Android.
                                </p>
                            </div>
                        </li>

                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="{{ asset('images/icon-dev.svg') }}" alt="ícono de integración" width="40">
                            </div>
                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Integración de APIs</h4>
                                <p class="service-item-text">
                                    Integración de APIs (REST/SOAP), automatización y conexión entre sistemas.
                                </p>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>





            <!-- RESUME -->
            <article class="resume" data-page="curriculum">
                <header>
                    <h2 class="h2 article-title">Currículum</h2>
                </header>

                <section class="timeline">
                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>
                        <h3 class="h3">Educación</h3>
                    </div>

                    <ol class="timeline-list">
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">INSTITUTO SUPERIOR TENA</h4>
                            <span>—</span>
                            <p class="timeline-text">Tecnólogo Superior en Desarrollo de Software.</p>
                        </li>
                    </ol>
                </section>

                <section class="timeline">
                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>
                        <h3 class="h3">Experiencia</h3>
                    </div>

                    <ol class="timeline-list">
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">Desarrollo Full Stack — Makrocomp</h4>
                            <span>2019 — 2022</span>
                            <p class="timeline-text">Desarrollador Full Stack y analista encargado del desarrollo y liderazgo técnico de la plataforma Makrocomp y sus sistemas derivados.</p>
                        </li>
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">Freelance — Desarrollador Full Stack</h4>
                            <span>2022 — 2025</span>
                            <p class="timeline-text">Proyectos web para diversos clientes, desarrollo de tesis de pregrado y posgrado, y capacitaciones técnicas en tecnología y desarrollo web.</p>
                        </li>
                    </ol>
                </section>

                <section class="skill">
                    <h3 class="h3 skills-title">Tecnologías</h3>
                    <ul class="skills-list content-card">
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Frontend</h5>
                                <data value="80">80%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>
                            <p>HTML5, CSS3, JavaScript, React, Vue.js</p>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Backend</h5>
                                <data value="90">90%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 90%;"></div>
                            </div>
                            <p>PHP (Laravel), Node.js, Python (Django), Java (Spring)</p>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Bases de Datos</h5>
                                <data value="85">85%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 85%;"></div>
                            </div>
                            <p>MySQL, PostgreSQL, MongoDB</p>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Infraestructura</h5>
                                <data value="75">75%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 75%;"></div>
                            </div>
                            <p>Docker, Git, AWS</p>
                        </li>
                    </ul>
                </section>
            </article>





            <!-- PORTFOLIO -->
            <article class="portfolio" data-page="portafolio">
                <header>
                    <h2 class="h2 article-title">Portafolio</h2>
                </header>

                <!-- Proyectos más populares -->
                <section class="projects popular-projects">
                    <h3 class="h3 section-subtitle">Proyectos más populares</h3>

                    <ul class="project-grid primary">
                        <li class="project-card">
                            <figure class="project-media">
                                <img src="{{asset('/proyectos/apiconsult.png')}}" alt="Apiconsult" loading="lazy" decoding="async" width="400" height="300">
                            </figure>
                            <div class="project-content">
                                <h4 class="project-title">Apiconsult</h4>
                                <p class="project-description">LA API MÁS CONFIABLE DE ECUADOR.</p>
                                <a class="btn-view" href="#" data-prod-url="https://apiconsult.zampisoft.com/" data-repo-url="" aria-label="Ver Apiconsult">Ver</a>
                            </div>
                        </li>
                    </ul>
                </section>

                <!-- Otros proyectos -->
                <section class="projects other-projects">
                    <h3 class="h3 section-subtitle">Otros proyectos</h3>

                    <ul class="project-grid secondary">
                        <li class="project-card">
                            <figure class="project-media">
                                <img src="{{asset('/proyectos/sedifax.png')}}" alt="Sedifax" loading="lazy" decoding="async" width="400" height="300">
                            </figure>
                            <div class="project-content">
                                <h4 class="project-title">Sedifax</h4>
                                <p class="project-description">Plataforma de ventas.</p>
                                <a class="btn-view" href="#" data-prod-url="https://sedifax.com/home" data-repo-url="" aria-label="Ver Sedifax">Ver</a>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>






            <!-- CONTACT -->
            <article class="contact" data-page="contacto">
                <header>
                    <h2 class="h2 article-title">Contacto</h2>
                </header>

                <section class="contact-form">
                    <h3 class="h3 form-title">WhatsApp</h3>

                    <div class="wa-header">
                        <div class="wa-icon" aria-hidden="true">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </div>
                        <p class="wa-subtitle">Te contactaré inmediatamente por WhatsApp</p>
                    </div>


                    <form id="waForm" class="wa-form" action="{{ route('contact.whatsapp') }}" method="POST">
                        @csrf
                        <div class="wa-grid">
                            <div class="wa-field">
                                <label for="waCountry" class="wa-label">País</label>
                                <select id="waCountry" name="dial_code" class="wa-select" aria-label="Selecciona tu país" required>
                                    <option value="+593">Ecuador (+593)</option>
                                </select>
                            </div>
                            <div class="wa-field">
                                <label for="waPhone" class="wa-label">Número telefónico</label>
                                <input id="waPhone" name="phone" type="tel" inputmode="numeric" autocomplete="tel" pattern="^[0-9]{7,15}$" class="wa-input" placeholder="Solo dígitos" required />
                            </div>
                        </div>

                        <div class="wa-actions">
                            <button id="waSubmit" type="submit" class="wa-btn" aria-label="Enviar por WhatsApp">
                                <ion-icon name="paper-plane"></ion-icon>
                                <span>Enviar por WhatsApp</span>
                            </button>
                            <div id="waStatus" class="wa-status" role="status" aria-live="polite"></div>
                        </div>
                    </form>
                </section>
            </article>
        </div>
    </main>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/script.js')}}"></script>

    <!-- Sincronización de menú y secciones -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('[data-nav-link]');
            const pages = document.querySelectorAll('[data-page]');
            const sectionMap = {
                'Sobre mí': 'sobre-mi',
                'Currículum': 'curriculum',
                'Portafolio': 'portafolio',
                'Contacto': 'contacto'
            };
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Quitar clase active de todos los links
                    navLinks.forEach(l => l.classList.remove('active'));
                    // Agregar clase active al link clicado
                    this.classList.add('active');
                    // Ocultar todas las secciones
                    pages.forEach(page => page.classList.remove('active'));
                    // Mostrar la sección correspondiente
                    const pageName = sectionMap[this.textContent.trim()];
                    const targetPage = document.querySelector(`[data-page="${pageName}"]`);
                    if (targetPage) {
                        targetPage.classList.add('active');
                    }
                });
            });
        });
    </script>

    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>