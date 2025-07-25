</div><!-- #page -->
<footer class="footer-contacto-agentes" id="footer-contacto">
        <div class="container py-5 fondo_f2" id="cotizar">
            <div class="row">
                <!-- Formulario -->
                <div class="col-12 col-lg-6 mb-4 mb-lg-0 conte-rrss">
                    {!! do_shortcode('[contact-form-7 id="be78daa" title="Formulario Agentes"]') !!}
                    <!-- Redes sociales -->
                    <div class="col-4 d-flex rrss">
                        <a href="https://www.facebook.com/Pricer-CHILE-102149522418008" class="me-3" target="_blank">
                            <img src="{{ home_url('/content/uploads/Facebook2.svg') }}" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/pricerchile/" class="me-3" target="_blank">
                            <img src="{{ home_url('/content/uploads/Instagram2.svg') }}" alt="Instagram">
                        </a>
                        <a href="https://www.linkedin.com/company/pricer" target="_blank">
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
                        Av. Padre Sergio Correa 14.500, Oficina 310, Colina, Santiago de Chile.<br>
                        Zip code: 8661512<br>
                        Email: info@pricer.cl<br>
                        Teléfono: +56 2 2785 5380
                    </div>

                    <div class="mb-4">
                        <strong>Qingdao, China</strong><br>
                        PRICER CHINA<br>
                        Room 26B,26/F, No.68, HongKong Middle Road<br>
                        Contacto: Phyllis<br>
                        Email: phyllis@pricer-china.com<br>
                        WeChat / WhatsApp: +86 155 6391 9819
                    </div>

                    <div class="mb-4">
                        <strong>Lima, Perú</strong><br>
                        PRICER PERU SAC<br>
                        Av. Jose Pardo Nº 434 Piso 16 (Ofic Comunal), Miraflores, Lima, Perú<br>
                        Contacto: Claudia Álvarez Farina
                        Email: caf@pricer.pe | jtr@pricer.pe<br>
                        Móvil: +51 996 136 397
                    </div>
                    <!-- Repite para las otras sucursales -->
                </div>
            </div>
        </div>
        <div class="text-center py-3" style="background: #0a1420;">
        © Copyright 2025 Pricer Premium Logistic - Desarrollado por Hz.
        </div>
    </footer>

    <script>
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.querySelector('.primary-menu');
    
    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', function() {
            primaryMenu.classList.toggle('active');
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
        });
    }
});
</script>
<?php wp_footer(); ?>
</body>
</html>