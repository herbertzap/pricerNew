</div><!-- #page -->
<footer class="footer-contacto">
        <div class="container py-5 fondo_f2">
            <div class="row">
                <!-- Formulario -->
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    {!! do_shortcode('[contact-form-7 id="6d43860" title="Formulario de contacto 1"]') !!}
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
            <!-- Redes sociales -->
            <div class="d-flex justify-content-end mt-4">
                <a href="https://facebook.com/" class="me-3" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/" class="me-3" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
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