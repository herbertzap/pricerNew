@include('layouts.header')
<div id="content" class="site-content">
   <div id="primary" class="content-area">
      <main id="main" class="site-main">
         <div class="servicios-page">
            <section class="hero-section d-flex align-items-stretch" style="min-height: 450px;">
               <div class="hero-right d-flex flex-column justify-content-center align-items-start p-5" style="flex-basis:40%; background:#0f1b2a; position:relative; min-width:0;">
                  <div class="hero-gradient"></div>
                  <h1 class="text-white mb-3 hero-title">Servicios
                  </h1>
                  <p class="text-white mb-4 fw-medium hero-subtitle">Queremos ser un socio estratégico para su empresa, por lo que ofrecemos servicios personalizados y a la medida, garantizando un servicio de excelencia y seguro en cada uno de sus embarques.  
                  </p>
               </div>
               <div class="hero-left position-relative flex-grow-1" style="flex-basis:60%; min-width:0;">
                  <img src="{{ home_url('/') }}/content/uploads/Servicios_Arriba.jpg" alt="servicios" class="img-fluid" style="object-fit:cover; width:auto; height:100%;">
                  <div class="hero-overlay"></div>
                  <div class="hero-gradient-left"></div>
               </div>
            </section>
            <!-- Servicios Section -->
            <section id="Servicios-btn" class="mt-5">
               <div class="container">
                  <div class="row g-4 mt-4  align-items-stretch">
                     <div class="col-12 col-md-6 col-lg-3">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Aereo.svg" alt="Aéreo" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Transporte<br>Aéreo</span>
                        </button>
                     </div>
                     <div class="col-12 col-md-6 col-lg-3">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Maritimo.svg" alt="Marítimo" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Transporte<br>Marítimo</span>
                        </button>
                     </div>
                     <div class="col-12 col-md-6 col-lg-3">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Terrestre.svg" alt="Terrestre" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Transporte<br>Terrestre</span>
                        </button>
                     </div>
                     <div class="col-12 col-md-6 col-lg-3 d-flex flex-column justify-content-between">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center mb-3 mb-lg-0 rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Logistico.svg" alt="Logísticos" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Servicios<br>Logísticos</span>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="container mt-4">
                  <!-- Tabs de contenido -->
                  <div class="tab-content" id="serviciosTabContent">
                     <div class="tab-pane fade show active" id="aereo" role="tabpanel">
                        <!-- Contenido de Transporte Aéreo -->
                        <div class="col-12 text-center mb-4 service-image service-aereo">
                           <div class="hero-overlay"></div>
                           <div class="text-center service-image-content">
                              <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                 <img src="{{ get_template_directory_uri() }}/assets/icons/Aereo.svg" alt="Aéreo" width="48">
                                 <h2 class="fw-bold text-white mb-0">Transporte Aéreo</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-8 offset-2 text-center mb-4 p-5 text-service">
                           <p>
                              Ofrecemos soluciones integrales de transporte marítimo, trabajando con gran parte de las compañías navieras para asegurar un servicio de alta calidad desde cualquier parte del mundo. Nuestro objetivo es proporcionar a nuestros clientes flexibilidad y opciones adaptadas a sus necesidades específicas.
                           </p>
                           <h3>Servicios disponibles:</h3>
                           <ul>
                              <li>Importaciones FCL y LCL: Transporte de carga completa (Full Container Load) y carga consolidada (Less than Container Load) para importaciones de todo tipo de mercancías.</li>
                              <li>Exportaciones FCL y LCL: Transporte de carga completa y carga consolidada para exportaciones, asegurando un envío eficiente y seguro.</li>
                              <li>Servicio puerta a puerto: Coordinación de la recogida de la carga en el origen y su entrega en el puerto de destino.</li>
                              <li>Servicio puerta a puerta: Solución completa que incluye la recogida en el origen y la entrega en la dirección final del destinatario.</li>
                           </ul>
                           <div class="text-center">
                              <a href="#cotizar" class="btn btn-primary px-5 py-2 mt-5 fw-bold">Cotizar</a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="maritimo" role="tabpanel">
                        <!-- Contenido de Transporte Marítimo -->
                         <!-- Contenido de Transporte Aéreo -->
                        <div class="col-12 text-center mb-4 service-image service-maritimo">
                           <div class="hero-overlay"></div>
                           <div class="text-center service-image-content">
                              <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                 <img src="{{ get_template_directory_uri() }}/assets/icons/Maritimo.svg" alt="Marítimo" width="48">
                                 <h2 class="fw-bold text-white mb-0">Transporte Marítimo</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-8 offset-2 text-center mb-4 p-5 text-service">
                           <p>
                              Ofrecemos soluciones integrales de transporte marítimo, trabajando con gran parte de las compañías navieras para asegurar un servicio de alta calidad desde cualquier parte del mundo. Nuestro objetivo es proporcionar a nuestros clientes flexibilidad y opciones adaptadas a sus necesidades específicas.
                           </p>
                           <h3>Servicios disponibles:</h3>
                           <ul>
                              <li>Importaciones FCL y LCL: Transporte de carga completa (Full Container Load) y carga consolidada (Less than Container Load) para importaciones de todo tipo de mercancías.</li>
                              <li>Exportaciones FCL y LCL: Transporte de carga completa y carga consolidada para exportaciones, asegurando un envío eficiente y seguro.</li>
                              <li>Servicio puerta a puerto: Coordinación de la recogida de la carga en el origen y su entrega en el puerto de destino.</li>
                              <li>Servicio puerta a puerta: Solución completa que incluye la recogida en el origen y la entrega en la dirección final del destinatario.</li>
                           </ul>
                           <div class="text-center">
                              <a href="#cotizar" class="btn btn-primary px-5 py-2 mt-5 fw-bold">Cotizar</a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="terrestre" role="tabpanel">
                        <!-- Contenido de Transporte Terrestre -->
                         <!-- Contenido de Transporte Aéreo -->
                        <div class="col-12 text-center mb-4 service-image service-terrestre">
                           <div class="hero-overlay"></div>
                           <div class="text-center service-image-content">
                              <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                 <img src="{{ get_template_directory_uri() }}/assets/icons/Terrestre.svg" alt="Terrestre" width="48">
                                 <h2 class="fw-bold text-white mb-0">Transporte Terrestre</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-8 offset-2 text-center mb-4 p-5 text-service">
                           <p>
                              Ofrecemos soluciones integrales de transporte marítimo, trabajando con gran parte de las compañías navieras para asegurar un servicio de alta calidad desde cualquier parte del mundo. Nuestro objetivo es proporcionar a nuestros clientes flexibilidad y opciones adaptadas a sus necesidades específicas.
                           </p>
                           <h3>Servicios disponibles:</h3>
                           <ul>
                              <li>Importaciones FCL y LCL: Transporte de carga completa (Full Container Load) y carga consolidada (Less than Container Load) para importaciones de todo tipo de mercancías.</li>
                              <li>Exportaciones FCL y LCL: Transporte de carga completa y carga consolidada para exportaciones, asegurando un envío eficiente y seguro.</li>
                              <li>Servicio puerta a puerto: Coordinación de la recogida de la carga en el origen y su entrega en el puerto de destino.</li>
                              <li>Servicio puerta a puerta: Solución completa que incluye la recogida en el origen y la entrega en la dirección final del destinatario.</li>
                           </ul>
                           <div class="text-center">
                              <a href="#cotizar" class="btn btn-primary px-5 py-2 mt-5 fw-bold">Cotizar</a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="logistico" role="tabpanel">
                        <!-- Contenido de Servicios Logísticos -->
                        <div class="col-12 text-center mb-4 service-image service-logistico">
                           <div class="hero-overlay"></div>
                           <div class="text-center service-image-content">
                              <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                 <img src="{{ get_template_directory_uri() }}/assets/icons/Logistico.svg" alt="Logísticos" width="48">
                                 <h2 class="fw-bold text-white mb-0">Servicios Logísticos</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-8 offset-2 text-center mb-4 p-5 text-service">
                           <p>
                              Ofrecemos soluciones integrales de transporte marítimo, trabajando con gran parte de las compañías navieras para asegurar un servicio de alta calidad desde cualquier parte del mundo. Nuestro objetivo es proporcionar a nuestros clientes flexibilidad y opciones adaptadas a sus necesidades específicas.
                           </p>
                           <h3>Servicios disponibles:</h3>
                           <ul>
                              <li>Importaciones FCL y LCL: Transporte de carga completa (Full Container Load) y carga consolidada (Less than Container Load) para importaciones de todo tipo de mercancías.</li>
                              <li>Exportaciones FCL y LCL: Transporte de carga completa y carga consolidada para exportaciones, asegurando un envío eficiente y seguro.</li>
                              <li>Servicio puerta a puerto: Coordinación de la recogida de la carga en el origen y su entrega en el puerto de destino.</li>
                              <li>Servicio puerta a puerta: Solución completa que incluye la recogida en el origen y la entrega en la dirección final del destinatario.</li>
                           </ul>
                           <div class="text-center">
                              <a href="#cotizar" class="btn btn-primary px-5 py-2 mt-5 fw-bold">Cotizar</a>
                           </div>
                        </div>
                     </div>
                     <!-- Flechas de navegación -->
                     <div class="d-flex justify-content-between align-items-center mt-3 flecha_service">
                        <button id="prevService" class="btn btn-link fs-2 pl-2"><</button>
                        <button id="nextService" class="btn btn-link fs-2 pr-2">></button>
                     </div>
                  </div>
               </div>
            </section>

            <section id="seguimiento" class="mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="seguimiento-content d-flex flex-column flex-md-row justify-content-center align-items-center py-4">
                                <span class="seguimiento-text fw-bold fs-2 me-md-4 mb-3 mb-md-0">
                                    Haz seguimiento de tus pedidos aquí
                                </span>
                                <a href="#tracker" class="btn btn-primary btn-tracker fw-bold ms-md-4 px-5 py-2">TRACKER</a>
                            </div>
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
       const serviceBtns = document.querySelectorAll('.service-btn');
       const tabPanes = document.querySelectorAll('.tab-pane');
       const tabIds = ['aereo', 'maritimo', 'terrestre', 'logistico'];
       let currentTab = 0;
   
       // Función para mostrar el tab correspondiente
       function showTab(index) {
           tabPanes.forEach((tab, i) => {
               tab.classList.toggle('show', i === index);
               tab.classList.toggle('active', i === index);
           });
           serviceBtns.forEach((btn, i) => {
               btn.classList.toggle('active', i === index);
           });
           currentTab = index;
       }
   
       // Click en los botones superiores
       serviceBtns.forEach((btn, i) => {
           btn.addEventListener('click', function () {
               showTab(i);
           });
       });
   
       // Flechas
       document.getElementById('prevService').addEventListener('click', function () {
           let newIndex = (currentTab - 1 + tabIds.length) % tabIds.length;
           showTab(newIndex);
       });
       document.getElementById('nextService').addEventListener('click', function () {
           let newIndex = (currentTab + 1) % tabIds.length;
           showTab(newIndex);
       });
   
       // Si hay un hash en la URL, selecciona el tab correspondiente
       const hash = window.location.hash.replace('#', '');
       if (hash && tabIds.includes(hash)) {
           showTab(tabIds.indexOf(hash));
           // Scroll al contenedor de servicios si es necesario
           document.getElementById('Servicios').scrollIntoView({behavior: 'smooth'});
       } else {
           showTab(0); // Por defecto, el primero
       }
   });
</script>