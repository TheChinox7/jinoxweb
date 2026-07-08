<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jino Morales | Desarrollador Full Stack y Líder Técnico en Ecuador - Latinsoft</title>
    <meta name="description"
        content="Portafolio profesional de Jino Morales en Latinsoft.cloud: desarrollo de software Full Stack, arquitectura backend, integración de APIs y soluciones SaaS para empresas en Ecuador y LATAM.">
    <meta name="keywords" content="Jino Morales, Latinsoft, desarrollador full stack Ecuador, líder técnico, Laravel, Node.js, portafolio, arquitectura de software, APIs, SaaS">
    <meta name="author" content="Jino Morales">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta name="theme-color" content="#111827">
    <meta name="geo.region" content="EC">
    <meta name="geo.placename" content="Quito">
    <link rel="canonical" href="https://latinsoft.cloud/">
    <link rel="alternate" hreflang="es-EC" href="https://latinsoft.cloud/">
    <link rel="alternate" hreflang="x-default" href="https://latinsoft.cloud/">
    <link rel="sitemap" type="application/xml" href="https://latinsoft.cloud/sitemap.xml">

    <meta property="og:title" content="Jino Morales | Desarrollador Full Stack y Líder Técnico en Ecuador">
    <meta property="og:description"
        content="Portafolio profesional en Latinsoft.cloud: desarrollo Full Stack, liderazgo técnico, integración de APIs y soluciones de software a medida.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://latinsoft.cloud/">
    <meta property="og:site_name" content="Latinsoft">
    <meta property="og:locale" content="es_EC">
    <meta property="og:image" content="https://latinsoft.cloud/images/my-avatar.png">
    <meta property="og:image:alt" content="Foto de perfil de Jino Morales, desarrollador Full Stack y líder técnico">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jino Morales | Desarrollador Full Stack y Líder Técnico en Ecuador">
    <meta name="twitter:description" content="Portafolio profesional en Latinsoft.cloud con proyectos SaaS, experiencia técnica y contacto directo.">
    <meta name="twitter:image" content="https://latinsoft.cloud/images/my-avatar.png">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/my-avatar.png') }}" type="image/png">

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
                    <img src="{{ asset('images/Foto Jino 2.png') }}" alt="Jino Morales" width="80" loading="eager" fetchpriority="high">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Jino Morales">Jino Morales</h1>
                    <p class="title">Desarrollador Full Stack y Líder Técnico</p>
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
                            <ion-icon name="mail"></ion-icon>
                        </div>
                        <div class="contact-info">
                            <p class="contact-title">Correo</p>
                            <a href="mailto:jino0000morales0000@gmail.com"
                                class="contact-link">jino0000morales0000@gmail.com</a>
                        </div>
                    </li>

                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="call"></ion-icon>
                        </div>
                        <div class="contact-info">
                            <p class="contact-title">Teléfono</p>
                            <a href="tel:+593987223133" class="contact-link">+593 987223133</a>
                        </div>
                    </li>


                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="location"></ion-icon>
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
                        <a href="https://www.linkedin.com/in/jino-morales/" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Perfil de LinkedIn de Jino Morales">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://github.com/TheChinox7" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Perfil de GitHub de Jino Morales">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="{{ asset('CV Jino Morales.pdf') }}" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Ver CV en PDF">
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
                            <ion-icon name="person-circle"></ion-icon>
                            <span>Sobre mí</span>
                        </button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>
                            <ion-icon name="document-text"></ion-icon>
                            <span>Currículum</span>
                        </button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>
                            <ion-icon name="briefcase"></ion-icon>
                            <span>Portafolio</span>
                        </button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>
                            <ion-icon name="mail"></ion-icon>
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
                        Desarrollador Full Stack y Líder Técnico con más de 5 años de experiencia diseñando y desarrollando plataformas SaaS, sistemas empresariales a medida y soluciones escalables. Especializado en PHP (Laravel), Node.js y arquitectura backend orientada a rendimiento, seguridad y mantenibilidad.
                    </p>

                    <p style="text-align: justify;">
                        He trabajado en entornos corporativos y como consultor freelance, liderando equipos, definiendo arquitectura de software, integrando APIs críticas y optimizando procesos de negocio. Mi enfoque combina buenas prácticas de desarrollo, documentación clara y una experiencia de usuario consistente.
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
                                    Diseño de interfaces web modernas, usables y enfocadas en conversión.
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
                                    Desarrollo de aplicaciones web robustas, escalables y listas para producción.
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
                                    Implementación de soluciones móviles conectadas a servicios backend seguros.
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
                                    Integración de APIs REST/SOAP, automatización de flujos y conexión entre plataformas.
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
                            <span>2019 — 2023</span>
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
                            <p class="timeline-text">Responsable del análisis, desarrollo y liderazgo técnico de la plataforma Makrocomp y sistemas derivados, con enfoque en estabilidad operativa y evolución continua del producto.</p>
                        </li>
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title">Freelance — Desarrollador Full Stack</h4>
                            <span>2022 — Actualidad</span>
                            <p class="timeline-text">Desarrollo de soluciones web para múltiples clientes, consultoría técnica, automatización de procesos e implementación de proyectos académicos y empresariales con estándares profesionales.</p>
                        </li>
                    </ol>
                </section>

                <section class="skill">
                    <h3 class="h3 skills-title">Tecnologías</h3>
                    <p class="skills-intro">
                        Stack técnico orientado a construir productos escalables, mantenibles y listos para producción.
                    </p>
                    <ul class="skills-list content-card">
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Backend y Arquitectura</h5>
                                <data value="92">92%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 92%;"></div>
                            </div>
                            <p>Laravel, Node.js, diseño de APIs, arquitectura modular y servicios escalables.</p>
                            <ul class="skills-tags">
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>Node.js</li>
                                <li>REST / SOAP</li>
                            </ul>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Frontend y UX Funcional</h5>
                                <data value="84">84%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 84%;"></div>
                            </div>
                            <p>Interfaces modernas, responsivas y enfocadas en experiencia de usuario y negocio.</p>
                            <ul class="skills-tags">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>React / Vue</li>
                            </ul>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Datos y Persistencia</h5>
                                <data value="88">88%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 88%;"></div>
                            </div>
                            <p>Modelado y optimización de bases de datos para rendimiento, trazabilidad y crecimiento.</p>
                            <ul class="skills-tags">
                                <li>MySQL</li>
                                <li>PostgreSQL</li>
                                <li>MongoDB</li>
                                <li>SQL Optimization</li>
                            </ul>
                        </li>
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5">Infraestructura y Entrega</h5>
                                <data value="82">82%</data>
                            </div>
                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 82%;"></div>
                            </div>
                            <p>Despliegue y operación técnica con prácticas de versionado, contenedores y cloud.</p>
                            <ul class="skills-tags">
                                <li>Docker</li>
                                <li>Git</li>
                                <li>AWS</li>
                                <li>CI/CD</li>
                            </ul>
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
                                <p class="project-description">Plataforma API orientada a consultas confiables, rápidas y seguras para el mercado ecuatoriano.</p>
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
                                <p class="project-description">Sistema de ventas y gestión comercial enfocado en eficiencia operativa.</p>
                                <a class="btn-view" href="#" data-prod-url="https://sedifax.com/home" data-repo-url="" aria-label="Ver Sedifax">Ver</a>
                            </div>
                        </li>

                        <li class="project-card">
                            <figure class="project-media">
                                <img src="{{asset('/proyectos/defect.jpg')}}" alt="Gestión de Documentos" loading="lazy" decoding="async" width="400" height="300">
                            </figure>
                            <div class="project-content">
                                <h4 class="project-title">Gestión de Documentos</h4>
                                <p class="project-description">Aplicación para administrar, organizar y consultar documentos de forma centralizada.</p>
                                <a class="btn-view" href="#" data-prod-url="" data-repo-url="https://github.com/TheChinox7/gesti-n-de-documentos.git" aria-label="Ver tesis - Gestión de Documentos">Ver</a>
                            </div>
                        </li>

                        <li class="project-card">
                            <figure class="project-media">
                                <img src="{{asset('/proyectos/defect.jpg')}}" alt="Creador de Sílabos" loading="lazy" decoding="async" width="400" height="300">
                            </figure>
                            <div class="project-content">
                                <h4 class="project-title">Creador de Sílabos</h4>
                                <p class="project-description">Herramienta web para generar y gestionar sílabos académicos de manera estructurada.</p>
                                <a class="btn-view" href="#" data-prod-url="" data-repo-url="https://github.com/TheChinox7/creador-de-silabos-web.git" aria-label="Ver Creador de Sílabos">Ver</a>
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

                    <div class="wa-shell">
                        <div class="wa-header">
                            <div class="wa-icon" aria-hidden="true">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </div>
                            <div class="wa-copy">
                                <p class="wa-kicker">Contacto directo</p>
                                <p class="wa-subtitle">Escríbeme directamente por WhatsApp y conversemos sobre tu proyecto sin formularios ni esperas.</p>
                                <ul class="wa-benefits" aria-label="Beneficios de contacto">
                                    <li class="wa-benefit">Respuesta rápida</li>
                                    <li class="wa-benefit">Atención personalizada</li>
                                    <li class="wa-benefit">Sin compromiso</li>
                                </ul>
                            </div>
                        </div>

                        <div class="wa-direct">
                            <p class="wa-direct-text">
                                Disponible en <strong>+593 987223133</strong>. El botón abrirá WhatsApp con un mensaje inicial para que puedas escribirme de inmediato.
                            </p>
                            <a class="wa-btn" href="https://wa.me/593987223133?text=Hola%20Jino%2C%20quiero%20conversar%20sobre%20un%20proyecto." target="_blank" rel="noopener noreferrer" aria-label="Contactar a Jino Morales por WhatsApp">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                                <span>Contactarme por WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </main>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/script.js')}}"></script>

    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
