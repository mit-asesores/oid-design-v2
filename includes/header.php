<nav id="main-header" class="nav-clinical opacity-0 translate-y-[-20px]">
    <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
        <!-- Logo -->
        <a class="nav-logo" href="#">
            <b>Ortho</b> Imagen Digital
        </a>

        <!-- Menú Desktop -->
        <div class="hidden lg:flex items-center gap-12">
            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
            <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Inicio</a>
            <a class="nav-link <?php echo ($current_page == 'nosotros.php') ? 'active' : ''; ?>" href="nosotros.php">Nosotros</a>
            <a class="nav-link <?php echo ($current_page == 'estudios.php') ? 'active' : ''; ?>" href="estudios.php">Estudios</a>
            <a class="nav-link" href="index.php#sucursales">Sucursales</a>
            <a class="nav-link" href="#contacto">Contacto</a>
            
            <a href="#" class="px-8 py-3 bg-primary text-white font-bold rounded-xl hover:bg-primary-light transition-all shadow-lg text-sm">
                PORTAL DOCTOR
            </a>
        </div>

        <!-- Botón Móvil -->
        <button class="lg:hidden w-12 h-12 flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-3xl">menu</span>
        </button>
    </div>
</nav>
