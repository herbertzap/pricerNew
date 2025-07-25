@include('layouts.header')
<div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="home-page">
                    <!-- Hero Section -->
                    <section class="hero-section d-flex align-items-stretch" style="min-height: 500px;">
                        <div class="hero-left position-relative flex-grow-1" style="flex-basis:60%; min-width:0;"> 
                            <video class="hero-video-bg" src="{{ home_url('/') }}/content/uploads/Home.mp4" autoplay loop muted playsinline style="object-fit:cover; width:auto; height:100%;min-height:500px;"></video>
                            <div class="hero-overlay"></div>
                            <div class="hero-gradient"></div>
                        </div>
                        <div class="hero-right d-flex flex-column justify-content-center align-items-start p-5" style="flex-basis:40%; background:#0f1b2a; position:relative; min-width:0;">
                            <div class="hero-gradient"></div>
                            <h1 class="text-white mb-3 hero-title ">Get a Quote</h1>
                            <a href="#footer-contacto" class="btn btn-primary mb-4 hero-btn">Contact us</a>
                            <p class="text-white mb-4 fw-medium hero-subtitle">Freight Forwarders Internacionales/Agentes de carga Transitarios con Servicio de Transporte Internacional Multimodal, Seguros y Almacenajes.</p>
                            <div class="hero-buttons ">
                                <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="#about"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16"><path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/></svg>(+56) 2 2785 5380</a>
                                <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"  href="#contact">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/></svg>  
                                info@pricer.cl</a>
                            </div>
                        </div>
                    </section>

                    
                    <!-- Servicios Section -->
                    <section id="Servicios" class="mt-5">
                        <div class="container">
                            <div class="row align-items-center mb-4">
                                <div class="col-12 col-md-12">
                                    <h2 class="fs-1 fw-bold ">Servicios</h2>
                                    <p class="fs-4 fw-medium ">Queremos ser un socio estratégico para su empresa, por lo que ofrecemos servicios personalizados y a la medida,
                                    garantizando un servicio de excelencia y seguro en cada uno de sus embarques.</p>
                                </div>
                                <div class="col-12 col-md-12 text-md-end mt-3 mt-md-0">
                                    <a href="{{ home_url('/servicios') }}" class="btn btn-primary btn-lg">Conocer más</a>
                                </div>
                            </div>

                                    
                        <div class="row g-4 mt-4  align-items-stretch">
                            <div class="col">
                                <a href="{{ home_url('/servicios#aereo') }}" class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                                    <span class="service-icon me-3">
                                        <img src="{{ get_template_directory_uri() }}/assets/icons/Aereo.svg" alt="Aéreo" width="48">
                                    </span>
                                    <span class="fw-bold text-uppercase">Transporte<br>Aéreo</span>
                                </a>
                            </div>
                            <div class="col">
                                
                                <a href="{{ home_url('/servicios#maritimo') }}" class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                                    <span class="service-icon me-3">
                                        <img src="{{ get_template_directory_uri() }}/assets/icons/Maritimo.svg" alt="Marítimo" width="48">
                                    </span>
                                    <span class="fw-bold text-uppercase">Transporte<br>Marítimo</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ home_url('/servicios#terrestre') }}" class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                                    <span class="service-icon me-3">
                                        <img src="{{ get_template_directory_uri() }}/assets/icons/Terrestre.svg" alt="Terrestre" width="48">
                                    </span>
                                    <span class="fw-bold text-uppercase">Transporte<br>Terrestre</span>
                                </a>
                            </div>
                            <div class="col d-flex flex-column justify-content-between">
                                <a href="{{ home_url('/servicios#logistico') }}" class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center mb-3 mb-lg-0 rounded-0">
                                    <span class="service-icon me-3">
                                        <img src="{{ get_template_directory_uri() }}/assets/icons/Logistico.svg" alt="Logísticos" width="48">
                                    </span>
                                    <span class="fw-bold text-uppercase">Servicios<br>Logísticos</span>
                                </a>
                            </div>
                            <div class="col d-flex flex-column justify-content-between">
                                <a href="{{ home_url('/servicios#courier') }}" class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center mb-3 mb-lg-0 rounded-0">
                                    <span class="service-icon me-3">
                                        <img src="{{ get_template_directory_uri() }}/assets/icons/CourierExpress.svg" alt="Courier Express" width="48" style="filter: invert(1);">
                                    </span>
                                    <span class="fw-bold text-uppercase">Courier<br>Express</span>
                                </a>
                            </div>
                        </div>
                            </div>
                    </section>

                    <!-- Quiénes Somos Section -->
                    <section class="QuienesSomos-section">
                        <div class="container">
                            <h2 class="section-title fw-bold">Quiénes Somos</h2>
                            <div class="services-grid">
                            <div class="row align-items-center mb-4">
                                <div class="col-12 col-md-12">
                                    <p class="fs-4 fw-medium ">Pricer Premium Logistics es una empresa líder en logística y transporte internacional, fundada en 2015. Desde nuestros inicios, hemos evolucionado para ofrecer un servicio integral de punta a punta que abarca transporte marítimo, aéreo, terrestre, cabotaje, almacenaje y última milla. Nos dirigimos a empresas de todos los tamaños y a personas que buscan soluciones logísticas eficientes y de alta calidad.

                                        <br>
                                        <br>

                                        En Pricer Premium Logistics, nos enorgullece brindar un servicio excepcional, impulsado por la innovación y un firme compromiso con la calidad y la satisfacción del cliente.

                                        <br>
                                        <br>

                                        <b>Tu satisfacción, nuestra prioridad.</b></p>
                                </div>
                                <div class="col-12 col-md-12 text-md-end mt-3 mt-md-0">
                                    <a href="{{ home_url('/nosotros') }}" class="btn btn-primary btn-lg">Conocer más</a>
                                </div>
                                <div class="row justify-content-center my-1" id="stats-counters">
                                <div class="col-12 col-md-3 d-flex align-items-center justify-content-center mb-4 mb-md-0">
                                    +<span class="counter display-4 fw-bold me-3" data-target="7">0</span>
                                    <span class="fs-4 fw-bold text-start">Años en<br>el negocio</span>
                                </div>
                                <div class="col-12 col-md-3 d-flex align-items-center justify-content-center mb-4 mb-md-0">
                                    <span class="counter display-4 fw-bold me-3" data-target="8000">0</span>
                                    <span class="fs-4 fw-bold text-start">Casos de<br>éxito</span>
                                </div>
                                <div class="col-12 col-md-3 d-flex align-items-center justify-content-center mb-4 mb-md-0">
                                    <span class="counter display-4 fw-bold me-1" data-target="100">0</span>+
                                    <span class="fs-4 fw-bold text-start">Clientes<br>felices</span>
                                </div>
                                <div class="col-12 col-md-3 d-flex align-items-center justify-content-center">
                                    <span class="counter display-4 fw-bold me-1" data-target="250">0</span>+
                                    <span class="fs-4 fw-bold text-start">Consultorías</span>
                                </div>
                            </div>
                            </div>

                            </div>
                        </div>
                    </section>

                    <!-- Algunos de Nuestros Clientes Section -->
                    <section class="Clientes-section">
                        <div class="container">
                        <div class="row">
                            <div class="col-4 Clientes-content">
                                <h2>Partnership</h2>
                            </div>
                            <div class="col clientes-logos d-flex flex-wrap justify-content-center align-items-center gap-2 mt-4">
                                <img src="{{ home_url('/') }}/content/uploads/ONE.svg" alt="Cliente 1" class="cliente-logo">
                                <img src="{{ home_url('/') }}/content/uploads/MSC.svg" alt="Cliente 5" class="col cliente-logo">
                                <img src="{{ home_url('/') }}/content/uploads/Evergreen.svg" alt="Cliente 3" class="col cliente-logo">
                                <img src="{{ home_url('/') }}/content/uploads/MAERSK.svg" alt="Cliente 4" class="col cliente-logo">
                                <img src="{{ home_url('/') }}/content/uploads/CMA_CGM.svg" alt="Cliente 6" class="col cliente-logo">
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
@include('layouts.footer')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.counter');
    const speed = 100; // menor = más rápido

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace(/\D/g, '');
            const increment = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
});
</script>