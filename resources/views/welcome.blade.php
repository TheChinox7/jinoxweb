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
    <link rel="shortcut icon" href="{{ asset('images/logo.ico')}}" type="image/x-icon">

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
                    <img src="{{ asset('images/my-avatar.png')}}" alt="Jino Morales" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Jino Morales">Jino Morales</h1>
                    <p class="title">Desarrollador FullStack</p>
                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Mostrar Contactos</span>
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
                        <a href="https://www.linkedin.com/in/jinomorales" class="social-link" target="_blank">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://github.com/jinomorales" class="social-link" target="_blank">
                            <ion-icon name="logo-github"></ion-icon>
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
                        <button class="navbar-link active" data-nav-link>Sobre mí</button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Currículum</button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Portafolio</button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Contacto</button>
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
                        Soy un desarrollador Full Stack radicado en Quito, Ecuador, con amplia experiencia en el diseño y desarrollo de aplicaciones web a medida. Me especializo en transformar ideas y requisitos complejos en soluciones tecnológicas eficientes, escalables y centradas en la experiencia del usuario.
                    </p>

                    <p style="text-align: justify;">
                        Mi enfoque consiste en construir plataformas funcionales, seguras y visualmente atractivas, aplicando las mejores prácticas en arquitectura, UI/UX y rendimiento. He participado en una variedad de proyectos tanto para empresas consolidadas como para startups, aportando no solo desarrollo técnico, sino también visión estratégica para el crecimiento digital.
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
                            <h4 class="h4 timeline-item-title">Universidad de las Artes</h4>
                            <span>2007 — 2008</span>
                            <p class="timeline-text">
                                Estudios especializados en diseño digital y medios interactivos, con énfasis en interfaces
                                de usuario y experiencia de usuario.
                            </p>
                        </li>
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">Academia de Arte Digital</h4>
                            <span>2006 — 2007</span>
                            <p class="timeline-text">
                                Formación en diseño web, principios de usabilidad y accesibilidad web, y mejores prácticas
                                de desarrollo frontend.
                            </p>
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
                            <h4 class="h4 timeline-item-title">Director de Tecnología</h4>
                            <span>2015 — Presente</span>
                            <p class="timeline-text">
                                Liderazgo de equipos de desarrollo, arquitectura de sistemas y gestión de proyectos
                                tecnológicos. Implementación de metodologías ágiles y mejores prácticas de desarrollo.
                            </p>
                        </li>
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">Director de Desarrollo</h4>
                            <span>2013 — 2015</span>
                            <p class="timeline-text">
                                Gestión de proyectos de desarrollo web y móvil, supervisión de equipos técnicos y
                                aseguramiento de calidad en el desarrollo de software.
                            </p>
                        </li>
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">Desarrollador Web Senior</h4>
                            <span>2010 — 2013</span>
                            <p class="timeline-text">
                                Desarrollo de aplicaciones web complejas, implementación de soluciones frontend y backend,
                                optimización de rendimiento y seguridad.
                            </p>
                        </li>
                    </ol>
                </section>

                <!-- SKILLS SECTION -->
                <section class="skill">
                    <h3 class="h3 skills-title">Mis habilidades</h3>
                    <ul class="skills-list content-card">
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Diseño Web</h5>
                                <data value="80">80%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Graphic design</h5>
                                <data value="70">70%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 70%;"></div>
                            </div>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Branding</h5>
                                <data value="90">90%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 90%;"></div>
                            </div>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">WordPress</h5>
                                <data value="50">50%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 50%;"></div>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>





            <!-- PORTFOLIO -->
            <article class="portfolio" data-page="portafolio">
                <header>
                    <h2 class="h2 article-title">Portafolio</h2>
                </header>

                <section class="projects">
                    <ul class="filter-list">
                        <li class="filter-item">
                            <button class="active" data-filter-btn>All</button>
                        </li>
                        <li class="filter-item">
                            <button data-filter-btn>Web design</button>
                        </li>
                        <li class="filter-item">
                            <button data-filter-btn>Applications</button>
                        </li>
                        <li class="filter-item">
                            <button data-filter-btn>Web development</button>
                        </li>
                    </ul>

                    <div class="filter-select-box">
                        <button class="filter-select" data-select>
                            <div class="select-value" data-selecct-value>Select category</div>
                            <div class="select-icon">
                                <ion-icon name="chevron-down"></ion-icon>
                            </div>
                        </button>
                        <ul class="select-list">
                            <li class="select-item">
                                <button data-select-item>All</button>
                            </li>
                            <li class="select-item">
                                <button data-select-item>Web design</button>
                            </li>
                            <li class="select-item">
                                <button data-select-item>Applications</button>
                            </li>
                            <li class="select-item">
                                <button data-select-item>Web development</button>
                            </li>
                        </ul>
                    </div>

                    <ul class="project-list">
                        <li class="project-item active" data-filter-item data-category="web development">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                                </figure>
                                <h3 class="project-title">Finance</h3>
                                <p class="project-category">Web development</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="web development">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                                </figure>
                                <h3 class="project-title">Orizon</h3>
                                <p class="project-category">Web development</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="web design">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                                </figure>
                                <h3 class="project-title">Fundo</h3>
                                <p class="project-category">Web design</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="applications">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                                </figure>
                                <h3 class="project-title">Brawlhalla</h3>
                                <p class="project-category">Applications</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="web design">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                                </figure>
                                <h3 class="project-title">DSM.</h3>
                                <p class="project-category">Web design</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="web design">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                                </figure>
                                <h3 class="project-title">MetaSpark</h3>
                                <p class="project-category">Web design</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="web development">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                                </figure>
                                <h3 class="project-title">Summary</h3>
                                <p class="project-category">Web development</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="applications">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                                </figure>
                                <h3 class="project-title">Task Manager</h3>
                                <p class="project-category">Applications</p>
                            </a>
                        </li>
                        <li class="project-item active" data-filter-item data-category="web development">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>
                                    <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                                </figure>
                                <h3 class="project-title">Arrival</h3>
                                <p class="project-category">Web development</p>
                            </a>
                        </li>
                    </ul>
                </section>
            </article>





            <!-- BLOG -->
            <article class="blog" data-page="blog">
                <header>
                    <h2 class="h2 article-title">Blog</h2>
                </header>

                <section class="blog-posts">
                    <ul class="blog-posts-list">
                        <li class="blog-post-item">
                            <a href="#">
                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022"
                                        loading="lazy">
                                </figure>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>
                                        <span class="dot"></span>
                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>
                                    <h3 class="h3 blog-item-title">Design conferences in 2022</h3>
                                    <p class="blog-text">
                                        Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">
                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer"
                                        loading="lazy">
                                </figure>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>
                                        <span class="dot"></span>
                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>
                                    <h3 class="h3 blog-item-title">Best fonts every designer</h3>
                                    <p class="blog-text">
                                        Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">
                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                                </figure>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>
                                        <span class="dot"></span>
                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>
                                    <h3 class="h3 blog-item-title">Design digest #80</h3>
                                    <p class="blog-text">
                                        Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam
                                        corporis suscipit.
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">
                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week"
                                        loading="lazy">
                                </figure>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>
                                        <span class="dot"></span>
                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>
                                    <h3 class="h3 blog-item-title">UI interactions of the week</h3>
                                    <p class="blog-text">
                                        Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation
                                        ullamco laboris nisi.
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">
                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing"
                                        loading="lazy">
                                </figure>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>
                                        <span class="dot"></span>
                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>
                                    <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>
                                    <p class="blog-text">
                                        Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">
                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                                </figure>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>
                                        <span class="dot"></span>
                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>
                                    <h3 class="h3 blog-item-title">Design digest #79</h3>
                                    <p class="blog-text">
                                        Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </article>





            <!-- CONTACT -->
            <article class="contact" data-page="contacto">
                <header>
                    <h2 class="h2 article-title">Contacto</h2>
                </header>

                <section class="mapbox" data-mapbox>
                    <figure>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
                            width="400" height="300" loading="lazy"></iframe>
                    </figure>
                </section>

                <section class="contact-form">
                    <h3 class="h3 form-title">Contact Form</h3>
                    <form action="#" class="form" data-form>
                        <div class="input-wrapper">
                            <input type="text" name="fullname" class="form-input" placeholder="Full name" required
                                data-form-input>
                            <input type="email" name="email" class="form-input" placeholder="Email address" required
                                data-form-input>
                        </div>
                        <textarea name="message" class="form-input" placeholder="Your Message" required
                            data-form-input></textarea>
                        <button class="form-btn" type="submit" disabled data-form-btn>
                            <ion-icon name="paper-plane"></ion-icon>
                            <span>Send Message</span>
                        </button>
                    </form>
                </section>
            </article>
        </div>
    </main>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/script.js')}}"></script>

    <!-- Sincronización de menú y secciones -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('[data-nav-link]');
        const pages = document.querySelectorAll('[data-page]');
        const sectionMap = {
            'Sobre mí': 'sobre-mi',
            'Currículum': 'curriculum',
            'Portafolio': 'portafolio',
            'Contacto': 'contacto'
        };
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
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