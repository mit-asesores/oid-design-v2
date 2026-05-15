<nav id="main-header" class="fixed top-0 left-0 w-screen z-[1000] bg-white/10 backdrop-blur-xl border-b border-white/10 nav-clinical">
    <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
        <!-- Logo -->
        <a class="nav-logo flex items-center gap-3" href="index.php">
            <span><b class="text-[#1B331A]">Ortho</b> Imagen Digital</span>
            <img src="img/logos/logo-metal-lupa.png" alt="Ortho Imagen Digital Logo" class="h-12 w-auto">
        </a>

        <!-- Menú Desktop -->
        <div class="hidden lg:flex items-center gap-8">
            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
            <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Inicio</a>
            <a class="nav-link <?php echo ($current_page == 'nosotros.php') ? 'active' : ''; ?>" href="nosotros.php">Nosotros</a>
            <a class="nav-link <?php echo ($current_page == 'estudios.php') ? 'active' : ''; ?>" href="estudios.php">Estudios</a>
            <a class="nav-link" href="index.php#sucursales">Sucursales</a>
            <a class="nav-link" href="#contacto">Contacto</a>
            
            <a href="citas.php" class="px-8 py-3 bg-[#1B331A] text-white font-bold rounded-xl hover:bg-[#254624] transition-all shadow-lg shadow-green-900/20 text-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">calendar_month</span>
                HAZ TU CITA
            </a>

            <a href="#" class="px-6 py-3 border border-[#1B331A]/20 text-[#1B331A] font-bold rounded-xl hover:bg-[#1B331A]/5 transition-all text-sm">
                PORTAL DOCTOR
            </a>
        </div>

        <!-- Botón Móvil (Z-index supremo) -->
        <button class="lg:hidden w-12 h-12 flex items-center justify-center text-primary mobile-menu-btn relative z-[10000]">
            <span class="material-symbols-outlined text-3xl">menu</span>
        </button>
    </div>
</nav>

<!-- Menú Móvil Overlay (Premium Dark Mode) -->
<div id="mobile-menu-overlay" class="fixed top-0 left-0 w-screen h-screen bg-[#020617] z-[9999] flex flex-col items-center justify-center lg:hidden" style="display: none; opacity: 0; background-color: #020617 !important; width: 100vw !important; left: 0 !important;">
        <div class="absolute top-8 left-6 text-white text-xl font-thin tracking-tight">
            <span class="font-bold text-cyan-400">Ortho</span> Imagen Digital
        </div>
        
        <nav class="flex flex-col items-center gap-10">
            <a class="mobile-nav-link text-3xl font-light text-white/90 hover:text-cyan-400" href="index.php">Inicio</a>
            <a class="mobile-nav-link text-3xl font-light text-white/90 hover:text-cyan-400" href="nosotros.php">Nosotros</a>
            <a class="mobile-nav-link text-3xl font-light text-white/90 hover:text-cyan-400" href="estudios.php">Estudios</a>
            <a class="mobile-nav-link text-3xl font-light text-white/90 hover:text-cyan-400" href="index.php#sucursales">Sucursales</a>
            <a href="citas.php" class="px-10 py-4 bg-[#1B331A] text-white font-bold rounded-2xl shadow-2xl shadow-green-950/40 text-center w-full max-w-xs flex items-center justify-center gap-3">
                <span class="material-symbols-outlined">calendar_month</span>
                HAZ TU CITA
            </a>
            
            <a href="#" class="text-white/40 font-bold tracking-widest text-[10px] hover:text-white transition-colors">
                ACCESO PORTAL DOCTOR
            </a>
        </nav>

        <div class="absolute bottom-12 text-[10px] text-white/30 tracking-[0.3em] uppercase">
            Innovación en Diagnóstico
        </div>
    </div>

