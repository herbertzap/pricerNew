@include('layouts.header')
<div id="content" class="site-content">
   <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <div class="contacto-page">
    <div class="container py-5 fondo_f2">
            <div class="row">
                <!-- Formulario -->
                 <div class="col-12 col-lg-12 text-left text-contacto">
                    <h2 class="fw-bold">Enviar mensaje</h2>
                    <p>Nuestros especialistas responderán todas tus dudas con tu envío</p>
                 </div>
                <div class="col-12 col-lg-6 mb-4 mb-lg-0 conte-rrss">
                    {!! do_shortcode('[contact-form-7 id="6d43860" title="Formulario de contacto 1"]') !!}
                    <!-- Redes sociales -->
                    <div class="col-4 d-flex rrss">
                        <a href="https://facebook.com/" class="me-3" target="_blank">
                            <img src="{{ home_url('/content/uploads/Facebook2.svg') }}" alt="Facebook">
                        </a>
                        <a href="https://instagram.com/" class="me-3" target="_blank">
                            <img src="{{ home_url('/content/uploads/Instagram2.svg') }}" alt="Instagram">
                        </a>
                        <a href="https://linkedin.com/" target="_blank">
                            <img src="{{ home_url('/content/uploads/LinkedIn2.svg') }}" alt="LinkedIn">
                        </a>
                    </div>
                </div>

                    

                <!-- Datos de contacto -->
                <div class="col-12 col-lg-6 ps-10">
                    <!-- Aquí pon los datos de contacto de las sucursales, igual que en tu diseño -->
                    <div class="mb-4">
                        <strong>Santiago, Chile</strong><br>
                        PRICER CHILE<br>
                        El Retiro 1227, Renca, bodega 163, Santiago de Chile<br>
                        Zip code: 8661512<br>
                        Email: info@pricer.cl<br>
                        Teléfono: +56 2 27855380
                    </div>

                    <div class="mb-4">
                        <strong>Santiago, Chile</strong><br>
                        PRICER CHILE<br>
                        El Retiro 1227, Renca, bodega 163, Santiago de Chile<br>
                        Zip code: 8661512<br>
                        Email: info@pricer.cl<br>
                        Teléfono: +56 2 27855380
                    </div>

                    <div class="mb-4">
                        <strong>Santiago, Chile</strong><br>
                        PRICER CHILE<br>
                        El Retiro 1227, Renca, bodega 163, Santiago de Chile<br>
                        Zip code: 8661512<br>
                        Email: info@pricer.cl<br>
                        Teléfono: +56 2 27855380
                    </div>
                    <!-- Repite para las otras sucursales -->
                </div>
            </div>
    </div>
    <div class="container-fluid">
    <div class="row">
                <div class="col-12 px-0">
                    <div class="map-responsive" style="width:100vw; min-height:500px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6661.737135820712!2d-70.770323!3d-33.400593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c198cc14e57f%3A0x237cc2a25fae1f58!2sAv.%20el%20Retiro%201227%2C%20Renca%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1753336222523!5m2!1ses!2scl" width="100%" height="450" style="border:0; min-height:500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
    </div>
    </main>
   </div>
</div>
@include('layouts.footerContacto')