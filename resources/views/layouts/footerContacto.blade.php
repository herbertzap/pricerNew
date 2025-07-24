</div><!-- #page -->
<footer class="footer">
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