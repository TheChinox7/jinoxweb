<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKYSOFT S.A.S | Desarrollo de software en Ecuador</title>
    <meta name="description"
        content="MAKYSOFT S.A.S desarrolla software a medida, plataformas SaaS, aplicaciones e integraciones para empresas en Ecuador y Latinoamérica.">
    <meta name="keywords"
        content="MAKYSOFT, desarrollo de software Ecuador, software a medida, SaaS, integración de APIs, aplicaciones empresariales">
    <meta name="author" content="MAKYSOFT S.A.S">
    <meta name="robots" content="index,follow,max-image-preview:large">
    <meta name="theme-color" content="#081a35">
    <meta name="geo.region" content="EC">
    <link rel="canonical" href="https://makysoft.com/">

    <meta property="og:title" content="MAKYSOFT S.A.S | Tecnología que impulsa empresas">
    <meta property="og:description"
        content="Diseñamos y desarrollamos soluciones digitales seguras, escalables y alineadas con los objetivos de tu empresa.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://makysoft.com/">
    <meta property="og:site_name" content="MAKYSOFT">
    <meta property="og:locale" content="es_EC">
    <meta property="og:image" content="{{ asset('images/makysoft_logo.svg') }}">

    <link rel="icon" href="{{ asset('images/makysoft_favicon.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a class="skip-link" href="#contenido">Saltar al contenido principal</a>

    <header class="site-header" data-header>
        <div class="container header-inner">
            <a class="brand" href="#inicio" aria-label="Ir al inicio de MAKYSOFT">
                <img src="{{ asset('images/makysoft_logo.svg') }}" alt="MAKYSOFT" width="210" height="70">
            </a>

            <button class="menu-toggle" type="button" aria-label="Abrir menú" aria-expanded="false"
                aria-controls="main-navigation" data-menu-toggle>
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="main-nav" id="main-navigation" aria-label="Navegación principal" data-nav>
                <a href="#inicio">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#soluciones">Soluciones</a>
                <a href="#empresa">Empresa</a>
                <a class="nav-cta" href="#contacto">Hablemos</a>
            </nav>
        </div>
    </header>

    <main id="contenido">
        <section class="hero" id="inicio">
            <div class="hero-orb hero-orb-one" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-two" aria-hidden="true"></div>
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow"><span></span> Software para empresas que quieren avanzar</p>
                    <h1>Convertimos desafíos de negocio en <em>soluciones digitales.</em></h1>
                    <p class="hero-description">
                        En MAKYSOFT S.A.S diseñamos y desarrollamos software confiable, escalable y preparado para
                        acompañar el crecimiento de tu empresa.
                    </p>
                    <div class="hero-actions">
                        <a class="button button-primary"
                            href="https://wa.me/593962894078?text=Hola%20MAKYSOFT%2C%20quiero%20conversar%20sobre%20una%20soluci%C3%B3n%20para%20mi%20empresa."
                            target="_blank" rel="noopener noreferrer">
                            Cuéntanos tu idea
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                        <a class="button button-secondary" href="#servicios">Conocer servicios</a>
                    </div>
                    <ul class="hero-points" aria-label="Ventajas de MAKYSOFT">
                        <li>
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            Atención en Ecuador
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            Soluciones escalables
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            Acompañamiento técnico
                        </li>
                    </ul>
                </div>

                <div class="hero-visual" aria-label="Representación de las soluciones digitales de MAKYSOFT">
                    <div class="visual-grid" aria-hidden="true"></div>
                    <div class="code-window">
                        <div class="window-bar">
                            <span></span><span></span><span></span>
                            <small>makysoft / solución</small>
                        </div>
                        <div class="window-content">
                            <div class="code-line"><b>01</b><span><i>const</i> empresa = <strong>"tu negocio"</strong>;</span></div>
                            <div class="code-line"><b>02</b><span><i>const</i> reto = analizar(empresa);</span></div>
                            <div class="code-line active"><b>03</b><span><i>const</i> solución = <strong>MAKYSOFT</strong>.crear(reto);</span></div>
                            <div class="code-line"><b>04</b><span>solución.escalar();</span></div>
                        </div>
                    </div>
                    <div class="floating-card card-security">
                        <span class="floating-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 3 5 6v5c0 4.6 2.9 8.6 7 10 4.1-1.4 7-5.4 7-10V6l-7-3Z" />
                                <path d="m9 12 2 2 4-5" />
                            </svg>
                        </span>
                        <span><small>Arquitectura</small><strong>Segura y estable</strong></span>
                    </div>
                    <div class="floating-card card-progress">
                        <span class="progress-ring"><b>98<small>%</small></b></span>
                        <span><small>Enfoque</small><strong>En resultados</strong></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="trust-strip" aria-label="Especialidades">
            <div class="container trust-inner">
                <span>Desarrollo web</span>
                <i></i>
                <span>Plataformas SaaS</span>
                <i></i>
                <span>Aplicaciones empresariales</span>
                <i></i>
                <span>Integración de APIs</span>
            </div>
        </section>

        <section class="section services" id="servicios">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow"><span></span> Lo que hacemos</p>
                        <h2>Tecnología pensada para resolver y crecer.</h2>
                    </div>
                    <p>Construimos soluciones alineadas con tu operación, tus usuarios y tus objetivos de negocio.</p>
                </div>

                <div class="services-grid">
                    <article class="service-card featured">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 5h16v14H4zM8 9l-2 3 2 3M16 9l2 3-2 3M14 7l-4 10" />
                            </svg>
                        </div>
                        <p class="card-number">01</p>
                        <h3>Software a medida</h3>
                        <p>Digitalizamos procesos específicos con sistemas diseñados alrededor de la realidad de tu empresa.</p>
                        <ul>
                            <li>Sistemas administrativos</li>
                            <li>Automatización de procesos</li>
                            <li>Plataformas internas</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M7 18h10a4 4 0 0 0 .6-8A6 6 0 0 0 6 8.5 4.8 4.8 0 0 0 7 18Z" />
                            </svg>
                        </div>
                        <p class="card-number">02</p>
                        <h3>Productos SaaS</h3>
                        <p>Creamos plataformas en la nube listas para operar, evolucionar y atender a múltiples usuarios.</p>
                        <ul>
                            <li>Arquitectura escalable</li>
                            <li>Gestión de suscripciones</li>
                            <li>Operación en la nube</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M5 7h14v12H5zM9 12h6" />
                            </svg>
                        </div>
                        <p class="card-number">03</p>
                        <h3>Integraciones y APIs</h3>
                        <p>Conectamos sistemas, servicios y datos para reducir tareas manuales y mejorar la continuidad operativa.</p>
                        <ul>
                            <li>APIs REST y SOAP</li>
                            <li>Servicios de terceros</li>
                            <li>Flujos automatizados</li>
                        </ul>
                    </article>

                    <article class="service-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="7" y="2.5" width="10" height="19" rx="2" />
                                <path d="M10 5h4M11 18.5h2" />
                            </svg>
                        </div>
                        <p class="card-number">04</p>
                        <h3>Experiencias digitales</h3>
                        <p>Desarrollamos interfaces web y móviles claras, rápidas y consistentes con la identidad de tu negocio.</p>
                        <ul>
                            <li>Aplicaciones web</li>
                            <li>Soluciones móviles</li>
                            <li>Diseño responsive</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="section solutions" id="soluciones">
            <div class="container">
                <div class="section-heading section-heading-centered">
                    <div>
                        <p class="eyebrow"><span></span> Soluciones</p>
                        <h2>Estamos construyendo las próximas soluciones de MAKYSOFT.</h2>
                    </div>
                    <p>Muy pronto presentaremos aquí las soluciones desarrolladas por nuestra empresa para responder a
                        necesidades reales de nuestros clientes.</p>
                </div>

                <div class="solutions-coming-soon">
                    <div class="coming-soon-visual" aria-hidden="true">
                        <div class="coming-soon-icon">
                            <img src="{{ asset('images/makysoft_mark.svg') }}" alt="" width="120" height="120"
                                loading="lazy">
                        </div>
                        <div class="solution-lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="coming-soon-copy">
                        <span class="coming-soon-label">Próximamente</span>
                        <h3>Nuevas soluciones empresariales están en camino.</h3>
                        <p>
                            Estamos trabajando en productos y herramientas creados por MAKYSOFT S.A.S para mejorar
                            procesos, conectar equipos y aportar valor a las empresas que confían en nosotros.
                        </p>
                        <a href="#contacto">
                            Cuéntanos qué necesita tu empresa
                            <span class="circle-link" aria-hidden="true">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section company" id="empresa">
            <div class="container company-grid">
                <div class="company-visual">
                    <div class="company-logo-card">
                        <img src="{{ asset('images/makysoft_mark.svg') }}" alt="Símbolo de MAKYSOFT" width="240"
                            height="240" loading="lazy">
                    </div>
                    <div class="company-badge">
                        <strong>MAKYSOFT S.A.S</strong>
                        <span>Empresa ecuatoriana</span>
                    </div>
                </div>
                <div class="company-copy">
                    <p class="eyebrow"><span></span> Quiénes somos</p>
                    <h2>Un aliado tecnológico para construir con visión de futuro.</h2>
                    <p class="lead">
                        MAKYSOFT S.A.S es una empresa ecuatoriana de tecnología enfocada en crear software que simplifica
                        operaciones, conecta procesos y abre nuevas oportunidades de crecimiento.
                    </p>
                    <p>
                        Combinamos análisis, desarrollo y acompañamiento técnico para convertir cada necesidad en una
                        solución útil, mantenible y preparada para evolucionar.
                    </p>
                    <div class="values-grid">
                        <div>
                            <strong>Claridad</strong>
                            <span>Comunicación directa durante todo el proyecto.</span>
                        </div>
                        <div>
                            <strong>Calidad</strong>
                            <span>Decisiones técnicas pensadas para durar.</span>
                        </div>
                        <div>
                            <strong>Cercanía</strong>
                            <span>Entendemos el negocio antes de escribir código.</span>
                        </div>
                        <div>
                            <strong>Evolución</strong>
                            <span>Construimos para crecer junto a nuestros clientes.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section process">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow eyebrow-light"><span></span> Cómo trabajamos</p>
                        <h2>De una necesidad concreta a una solución funcionando.</h2>
                    </div>
                    <p>Un proceso claro para reducir incertidumbre y mantener el proyecto alineado.</p>
                </div>
                <ol class="process-grid">
                    <li>
                        <span>01</span>
                        <h3>Entendemos</h3>
                        <p>Analizamos el reto, el contexto y el resultado que tu empresa necesita.</p>
                    </li>
                    <li>
                        <span>02</span>
                        <h3>Diseñamos</h3>
                        <p>Definimos la solución, su experiencia y una ruta de implementación viable.</p>
                    </li>
                    <li>
                        <span>03</span>
                        <h3>Construimos</h3>
                        <p>Desarrollamos con entregas claras, validación continua y buenas prácticas.</p>
                    </li>
                    <li>
                        <span>04</span>
                        <h3>Acompañamos</h3>
                        <p>Apoyamos la puesta en marcha y la evolución de la solución.</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="section contact" id="contacto">
            <div class="container">
                <div class="contact-card">
                    <div class="contact-copy">
                        <p class="eyebrow"><span></span> Hablemos de tu proyecto</p>
                        <h2>¿Tienes una idea o un proceso que necesita mejorar?</h2>
                        <p>Conversemos sobre el reto de tu empresa y encontremos una solución tecnológica que tenga sentido.</p>
                        <div class="contact-links">
                            <a href="mailto:soporte@makysoft.com">
                                <span class="contact-icon">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M3 5h18v14H3zM3 7l9 7 9-7" />
                                    </svg>
                                </span>
                                <span><small>Correo</small><strong>soporte@makysoft.com</strong></span>
                            </a>
                            <a href="tel:+593962894078">
                                <span class="contact-icon">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M7 3H4a1 1 0 0 0-1 1c0 9.4 7.6 17 17 17a1 1 0 0 0 1-1v-3l-5-2-1.5 2.2a15 15 0 0 1-7.7-7.7L9 8 7 3Z" />
                                    </svg>
                                </span>
                                <span><small>Teléfono</small><strong>+593 96 289 4078</strong></span>
                            </a>
                        </div>
                    </div>
                    <div class="contact-action">
                        <img src="{{ asset('images/makysoft_mark.svg') }}" alt="" width="88" height="88"
                            loading="lazy">
                        <p>Respuesta directa de nuestro equipo</p>
                        <a class="button button-whatsapp"
                            href="https://wa.me/593962894078?text=Hola%20MAKYSOFT%2C%20quiero%20conversar%20sobre%20una%20soluci%C3%B3n%20para%20mi%20empresa."
                            target="_blank" rel="noopener noreferrer">
                            Escribir por WhatsApp
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                        <small>Sin compromiso. Cuéntanos qué necesitas.</small>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <div>
                <img src="{{ asset('images/makysoft_logo_light.svg') }}" alt="MAKYSOFT" width="210" height="70"
                    loading="lazy">
                <p>Soluciones de software para empresas que quieren avanzar.</p>
            </div>
            <div class="footer-links">
                <div>
                    <strong>Explora</strong>
                    <a href="#servicios">Servicios</a>
                    <a href="#soluciones">Soluciones</a>
                    <a href="#empresa">Empresa</a>
                </div>
                <div>
                    <strong>Contacto</strong>
                    <a href="mailto:soporte@makysoft.com">soporte@makysoft.com</a>
                    <a href="tel:+593962894078">+593 96 289 4078</a>
                    <span>Ecuador</span>
                </div>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>© {{ date('Y') }} MAKYSOFT S.A.S. Todos los derechos reservados.</p>
            <a href="#inicio">Volver arriba ↑</a>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
