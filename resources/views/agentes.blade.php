@include('layouts.header')
<div id="content" class="site-content">
   <div id="primary" class="content-area">
      <main id="main" class="site-main">
      <div class="agentes-page">
      <section class="hero-agentes position-relative d-flex align-items-center">
            <div class="hero-gradient-right"></div>
            <div class="hero-overlay"></div>
            <div class="container position-relative z-2">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 offset-lg-5 text-white py-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-orange d-flex align-items-center justify-content-center me-3">
                                <img src="{{ home_url('/content/uploads/Agentes.svg') }}" alt="Agentes" width="120">
                            </div>
                            <div>
                                <h1 class="fw-bold mb-0">Red de Agentes</h1>
                                <h2>INTERMODAL / MULTIMODAL</h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4 mt-5 gap-3 flex-wrap">
            <span class="fw-bold  me-3">Exportación Reefer</span>
            <img src="{{ home_url('/content/uploads/REEFER_01.svg') }}" alt="Reefer 1" width="70">
            <img src="{{ home_url('/content/uploads/REEFER_02.svg') }}" alt="Reefer 2" width="70">
            <img src="{{ home_url('/content/uploads/REEFER_03.svg') }}" alt="Reefer 3" width="70">
            <img src="{{ home_url('/content/uploads/REEFER_04.svg') }}" alt="Reefer 4" width="70">
            </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- pricer-alianzas Section -->
         <section class="alianza-section w-100" style="background: #fff;">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-stretch" style="min-height: 420px;">
            <!-- Imagen izquierda -->
            <div class="col-12 col-md-4 d-flex align-items-stretch">
                <img src="{{ home_url('/content/uploads/agentes2.jpg') }}" alt="Agentes" class="img-fluid w-100 h-100" style="object-fit: cover; min-height: 420px;">
            </div>
            <!-- Contenido derecho -->
            <div class="col-12 col-md-7 d-flex align-items-center justify-content-center text-agentes">
                <div class="p-4 p-md-5 w-100">
                    <!-- Logo Pricer -->
                    <div class="mb-3">
                        <img src="{{ home_url('/content/uploads/logo.png') }}" alt="Pricer Logo" style="max-width: 250px;filter: brightness(0)">
                    </div>
                    <!-- Texto -->
                    <p class="mb-2">
                    <span class="fw-bold"> Pricer Logistic</span> es miembro activo de la red de <b>agentes DF Alliance</b>, el cual nos proporciona asistencia logística global.
                    </p>
                    <p>
                        Ponemos a disposición de nuestros clientes nuestra red con presencia en <b>más de 190 países</b> cubriendo así sus necesidades en los principales puertos y aeropuertos.
                    </p>
                    <p>
                        Ofrecemos los siguientes servicios a medida bajo la <b>modalidad End to end</b> con un enfoque integral que cubre todas las etapas del servicio desde el inicio hasta el final. Abarcando todas las actividades necesarias para mover su carga desde su origen hasta su destino final.
                    </p>
                    <!-- Partners -->
                    <div class="d-flex align-items-center mt-4 flex-wrap">
                        <span class="fw-bold me-4">Nuestros Partners</span>
                        <img src="{{ home_url('/content/uploads/DFAlliance.svg') }}" alt="DF Alliance" style="max-width: 250px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

         <!-- Partnership Section -->
         <section class="Esto-incluye-section">
                        <div class="container">
                        <div class="row">
                        <div class="col-12 col-md-12">
                     <h2 class="fw-bold">Esto incluye:</h2>
                     <ul>
                        <li>Planificación y Coordinación Inicial: Asesoría y planificación del proceso logístico según las necesi- dades del cliente.</li>
                        <li>Transporte: Transporte terrestre, marítimo o aéreo desde el lugar de origen hasta el destino final.</li>
                        <li>Gestión Aduanera: Trámites aduaneros tanto en el país de origen como en el de destino.</li>
                        <li>Almacenamiento y Manejo de Inventario: Servicios de almacenamiento intermedio si es necesario, con control de inventarios.</li>
                        <li>Distribución Final: Transporte desde el puerto o almacén de destino hasta el cliente final.</li>
                        <li>Monitoreo y Seguimiento: Seguimiento en tiempo real de la carga y gestión de cualquier incidencia durante el proceso.</li>
                        <li>Servicio Post-Venta: Evaluación del servicio, soporte y solución de problemas después de la entrega.</li>

                        <div class="text-center">
                              <a href="#cotizar" class="btn btn-primary px-5 py-2 mt-5 fw-bold">Cotizar</a>
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