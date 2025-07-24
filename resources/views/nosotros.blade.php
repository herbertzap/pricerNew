@include('layouts.header')
<div id="content" class="site-content">
   <div id="primary" class="content-area">
      <main id="main" class="site-main">
      <div class="nosotros-page">
         <section class="hero-section d-flex align-items-stretch" style="min-height: 450px;">
            <div class="hero-right d-flex flex-column justify-content-center align-items-start p-5" style="flex-basis:40%; background:#0f1b2a; position:relative; min-width:0;">
               <div class="hero-gradient"></div>
               <h2 class="text-white mb-3 hero-title">Pricer Premium Logistics es una empresa líder en
                  logística y transporte internacional, fundada en 2015.
               </h2>
               <p class="text-white mb-4 fw-medium hero-subtitle">Desde nuestros inicios, hemos evolucionado para ofrecer un servicio integral de punta a punta que abarca transporte marítimo, aéreo, terrestre, cabotaje, almacenaje y última milla. Nos dirigimos a empresas de todos los tamaños y a personas que buscan soluciones logísticas eficientes y de alta calidad. 
                  <br>
                  <br>    
                  En Pricer Premium Logistics, nos enorgullece brindar un servicio excepcional, impulsado por la innovación y un firme compromiso con la calidad y la satisfacción del cliente.
               </p>
               <h3 class="hero-subtitle-h3">Tu satisfacción, nuestra prioridad.</h3>
            </div>
            <div class="hero-left position-relative flex-grow-1" style="flex-basis:60%; min-width:0;">
               <img src="{{ home_url('/') }}/content/uploads/Nosotros_Arriba.jpg" alt="Nosotros" class="img-fluid" style="object-fit:cover; width:auto; height:100%;">
               <div class="hero-overlay"></div>
               <div class="hero-gradient-left"></div>
            </div>
         </section>
         <!-- mision-vision Section -->
         <section id="mision-vision">
            <div class="container my-5">
               <div class="row align-items-center">
                  <!-- Columna 1: Imagen -->
                  <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
                     <img src="{{ home_url('/') }}/content/uploads/2025/07/logo-pricer.png" alt="Pricer Logo" class="img-fluid" style="max-width: 220px;filter: brightness(0)">
                  </div>
                  <!-- Columna 2: Lista de valores -->
                  <div class="col-12 col-md-3">
                     <ul class="valores-list list-unstyled ps-0">
                        <li>Partnership</li>
                        <li>Respect</li>
                        <li>Integrity</li>
                        <li>Credibility</li>
                        <li>Empathy</li>
                        <li>Resolutive</li>
                     </ul>
                  </div>
                  <!-- Columna 3: Video de YouTube -->
                  <div class="col-12 col-md-5 text-center">
                     <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" title="Video institucional" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>

               <div class="row justify-content-center my-1 mt-3 " id="stats-counters">
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
                            
               <!-- Segunda fila: Misión y Visión -->
               <div class="row mt-5 s-mision-vision">
                  <div class="col-12 col-md-6">
                     <h2 class="fw-bold">Misión</h2>
                     <p>
                        En Pricer Logistics, nos dedicamos a proporcionar soluciones logísticas y de transporte internacional de alta calidad, adaptadas a las necesidades específicas de cada cliente.<br><br>
                        Nos comprometemos a ofrecer un servicio excepcional y a crear experiencias positivas en cada etapa del proceso logístico, asegurando la máxima eficiencia y fiabilidad.
                     </p>
                  </div>
                  <div class="col-12 col-md-6">
                     <h2 class="fw-bold">Visión</h2>
                     <p>
                        Ser la empresa líder en logística y transporte internacional en América Latina, reconocida por nuestra excelencia en el servicio, la calidad inigualable de nuestras soluciones y nuestro compromiso con la innovación y la sostenibilidad.<br><br>
                        Aspiramos a ser el socio logístico preferido de nuestros clientes, estableciendo nuevos estándares de satisfacción y eficiencia.
                     </p>
                  </div>
               </div>
            </div>
         </section>

         <!-- Partnership Section -->
         <section class="Partnership-section">
                        <div class="container">
                        <div class="row">
                            <div class="col-2 Clientes-content">
                                <h2>Partnership</h2>
                            </div>
                            <div class="col clientes-logos d-flex flex-wrap justify-content-center align-items-center  mt-4">
                                <img src="{{ home_url('/') }}/content/uploads/CargowiseLogisticsProvider.svg" alt="Cliente 1" class="cliente-logo">
                            </div>
                            <div class="col-3 Clientes-content">
                                <h2>Proud Sponsor</h2>
                            </div>
                            <div class="col clientes-logos d-flex flex-wrap justify-content-center align-items-center gap-2 mt-4">
                                <img src="{{ home_url('/') }}/content/uploads/SelknamRugby.svg" alt="Cliente 1" class="cliente-logo">
                                <img src="{{ home_url('/') }}/content/uploads/Federacion.svg" alt="Cliente 1" class="cliente-logo">
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