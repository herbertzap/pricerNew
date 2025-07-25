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
                  <div class="row g-4 mt-4 align-items-stretch justify-content-center">
                     <div class="col">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Aereo.svg" alt="Aéreo" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Transporte<br>Aéreo</span>
                        </button>
                     </div>
                     <div class="col">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Maritimo.svg" alt="Marítimo" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Transporte<br>Marítimo</span>
                        </button>
                     </div>
                     <div class="col">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Terrestre.svg" alt="Terrestre" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Transporte<br>Terrestre</span>
                        </button>
                     </div>
                     <div class="col">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/Logistico.svg" alt="Logísticos" width="48">
                        </span>
                        <span class="fw-bold text-uppercase">Servicios<br>Logísticos</span>
                        </button>
                     </div>
                     <div class="col">
                        <button class="btn btn-secondary service-btn w-100 h-100 d-flex align-items-center rounded-0">
                        <span class="service-icon me-3">
                        <img src="{{ get_template_directory_uri() }}/assets/icons/CourierExpress.svg" alt="Courier Express" width="48" style="filter: invert(1);">
                        </span>
                        <span class="fw-bold text-uppercase">Courier<br>Express</span>
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
                           Ofrecemos soluciones rápidas y seguras para el transporte aéreo, tanto a nivel nacional como internacional. Nos aseguramos de que su carga llegue a su destino con la mayor eficiencia posible.
                           </p>
                           <h3>Servicios disponibles:</h3>
                           <ul>
                              <li>Courier Nacional e Internacional: Servicio expreso para documentos y paquetes con seguimiento en tiempo real.</li>
                              <li>Carga Aérea Consolidada (LCL): Transporte de carga consolidada para envíos más pequeños y económicos.</li>
                              <li>Carga Aérea Completa (FCL): Transporte de carga completa para envíos urgentes y de gran volumen.</li>
                              <li>Servicios Puerta a Puerta: Coordinamos la recogida y entrega de su carga desde su origen hasta su destino final.</li>
                              <li>Manejo de Carga Especializada: Transporte de carga peligrosa, perecedera y de alto valor con protocolos de seguridad estrictos.</li>
                           </ul>
                           <div class="text-center">
                              <a href="#footer-contacto" class="btn btn-primary px-5 py-2 mt-5 fw-bold btn-cotizar" data-servicio="aereo">Cotizar</a>
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
                              <a href="#footer-contacto" class="btn btn-primary px-5 py-2 mt-5 fw-bold btn-cotizar" data-servicio="maritimo">Cotizar</a>
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
                           Contamos con una red de proveedores de servicios de transporte terrestre, garantizando a nuestros clientes la capacidad para proveerles un servicio de calidad en todo momento. Ofrecemos distintos tipos de servicios para el transporte de carga terrestre.
                           </p>
                           <h3>LTL/TLT (Less-than-Truckload): Transporte terrestre de carga consolidada.</h3>
                           <ul>
                              <li>Rutas: Puerto de San Antonio y Valparaíso a Santiago.</li>
                              <li>Aeropuerto Internacional Santiago a la ciudad de Santiago (Anillo Américo Vespucio).</li>
                           </ul>
                           <h3 class="mt-4">FTL/FTL (Full Truckload): Transporte terrestre para camión completo.</h3>
                           <ul>
                           <li>Transporte nacional de contenedores.</li>
                           <li>Transporte nacional de camiones cerrados.</li>
                           <li>Transporte internacional de contenedores.</li>
                           <li>Transporte internacional de camiones cerrados.</li>
                           </ul>
                           <div class="text-center">
                              <a href="#footer-contacto" class="btn btn-primary px-5 py-2 mt-5 fw-bold btn-cotizar" data-servicio="terrestre">Cotizar</a>
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
                           Con el objetivo de entregar un excelente servicio a nuestros clientes, nos esforzamos por conocer mejor su negocio y sus necesidades para ofrecer soluciones a la medida. Ponemos a su disposición nuestro equipo y nuestras oficinas en China, Perú y nuestra red de agentes en todo el mundo para entregar una solución dinámica y confiable para sus necesidades de comercio internacional.
                           </p>
                           <h3>Servicios disponibles:</h3>
                           <ul>
                           <li>Venta de Seguros Internacionales: Proveemos seguros para proteger su carga contra daños, pérdidas o robos durante el transporte internacional. Nuestro objetivo es brindarle tranquilidad y seguridad en cada envío.</li>
                           <li>Almacén Extraportuario: Ofrecemos instalaciones de almacenamiento fuera del puerto para el manejo y la custodia de mercancías. Estos almacenes permiten una mayor flexibilidad y eficiencia en la gestión de su inventario.</li>
                           <li>Consolidaciones: Nos encargamos de la carga y descarga de contenedoresutilizando peonetas, optimizando así el proceso de manipulación de mercancías. Este servicio asegura que su carga sea manejada de manera eficiente y segura, reduciendo tiempos y costos.</li>
                           <li>Gestión de Inventarios: Administramos y controlamos su inventario en nuestras instalaciones, asegurando precisión y disponibilidad en todo momento. Ofrecemos soluciones personalizadas para la gestión de existencias según sus necesidades.</li>
                           <li>Cross Docking: Facilitamos la transferencia directa de mercancías desde el punto de recepción al punto de envío sin almacenamiento intermedio. Este servicio reduce tiempos de entrega y costos de almacenamiento.</li>
                           <li>Control de Sobreestadía de Contenedores: Monitoreamos y gestionamos los tiempos de estadía de sus contenedores en Puerto y bodega para evitar cargos adicionales.</li>
                           <li>Última Milla: Distribución a Cliente Final Ofrecemos un servicio de distribución eficiente y fiable, asegurando que los paquetes lleguen a su destino final en perfectas condiciones.</li>
                           <li>Entrega de paquetes: Desde el centro de distribución hasta la dirección final del cliente.</li>
                           <li>Tracking: Seguimiento en tiempo real de los envíos.</li>
                           </ul>
                           <div class="text-center">
                              <a href="#footer-contacto" class="btn btn-primary px-5 py-2 mt-5 fw-bold btn-cotizar" data-servicio="logistico">Cotizar</a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="courier" role="tabpanel">
                        <!-- Contenido de Courier Express -->
                        <div class="col-12 text-center mb-4 service-image service-courier">
                           <div class="hero-overlay"></div>
                           <div class="text-center service-image-content">
                              <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                 <img src="{{ get_template_directory_uri() }}/assets/icons/CourierExpress.svg" alt="Courier Express" width="48">
                                 <h2 class="fw-bold text-white mb-0">Courier Express</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-8 offset-2 text-center mb-4 p-5 text-service">
                           <p>
                           <strong>Courier Express</strong> es nuestro servicio especializado para paquetes urgentes con cobertura global. Ofrecemos courier internacional puerta a puerta para documentos, muestras, productos ecommerce y B2B con seguimiento en tiempo real y tarifas competitivas en el mercado internacional.
                           </p>
                           <p class="fw-medium text-primary mb-4">
                           "Llevando tus envíos al mundo, de forma simple, rápida y segura."
                           </p>
                           

                              <h3>Ventajas Competitivas</h3>
                              <ul>
                                 <li>Tarifas competitivas en el mercado internacional</li>
                                 <li>Recolección diaria y flexibilidad en origen</li>
                                 <li>Atención personalizada y servicio postventa</li>
                                 <li>Red de agentes internacionales y almacenes en zonas francas</li>
                              </ul>
    


                              <h3>Cobertura y Modalidad</h3>
                              <ul>
                                 <li><strong>Cobertura:</strong> Global (USA, Europa, Asia y Latinoamérica)</li>
                                 <li><strong>Modalidad:</strong> Puerta a puerta</li>
                                 <li><strong>Tracking:</strong> Seguimiento en tiempo real</li>
                                 <li><strong>Capacidad:</strong> Paquetes hasta 70kg</li>
                              </ul>


           
                              <h3 >Productos Aceptados</h3>
                              <ul>
                                 <li>Documentación</li>
                                 <li>Muestras sin valor comercial</li>
                                 <li>Pequeñas encomiendas y paquetes hasta 70kg</li>
                                 <li>Envíos B2B y B2C</li>
                              </ul>
    

                           <div class="text-center mb-4">
                              <h3 >Alianzas Estratégicas</h3>
                              <p>Integración con <strong>DHL, FedEx, UPS</strong> y oficinas propias en <strong>Chile, Perú, China y España</strong>. Forwarding consolidado para apoyo logístico y soporte aduanero.</p>
                           </div>

                           <div class="text-center">
                              <a href="#footer-contacto" class="btn btn-primary px-5 py-2 mt-5 fw-bold btn-cotizar" data-servicio="courier">Cotizar</a>
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
@include('layouts.footer-servicio')
<script>
   document.addEventListener('DOMContentLoaded', function () {
       const serviceBtns = document.querySelectorAll('.service-btn');
       const tabPanes = document.querySelectorAll('.tab-pane');
       const tabIds = ['aereo', 'maritimo', 'terrestre', 'logistico', 'courier'];
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
<script>
      document.addEventListener('DOMContentLoaded', function() {
  // Escucha todos los botones Cotizar
  document.querySelectorAll('.btn-cotizar').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var servicio = this.getAttribute('data-servicio');
      // Espera un poco para asegurar que el scroll terminó y el formulario está en pantalla
      setTimeout(function() {
        var select = document.querySelector('.select-tipo-servicio');
        if (select) {
          select.value = servicio;
          // Si es un select de Contact Form 7, dispara el evento change
          var event = new Event('change', { bubbles: true });
          select.dispatchEvent(event);
        }
      }, 300);
    });
  });
});
</script>