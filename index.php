<?php 
/**
 * Ortho Imagen Digital - Ethereal Clinical Interface
 * Index Principal (Reconstruido desde home.html)
 */
include_once 'includes/head.php'; 
?>

<!-- 1. Intro Scrolly (Video Dental) -->
<section id="intro-scrolly">
    <div class="scrolly-window">
        <video id="scrolly-video" muted playsinline preload="auto">
            <source src="video/Transition_animation_element_202604161449.mp4" type="video/mp4">
        </video>
        <div class="scrolly-overlay"></div>
        <div class="scrolly-text-container">
            <div id="step-1" class="scrolly-step-text"><span class="scrolly-label">Tecnología que te Cuida</span><h2 class="scrolly-heading">Lo último en imagen digital <br/><span class="highlight">diseñado para ti</span></h2></div>
            <div id="step-2" class="scrolly-step-text"><span class="scrolly-label">Claridad para tu Sonrisa</span><h2 class="scrolly-heading">Imágenes 3D para que <br/><span class="highlight">veas todo con claridad</span></h2></div>
            <div id="step-3" class="scrolly-step-text"><span class="scrolly-label">Tu Seguridad Primero</span><h2 class="scrolly-heading">Diagnósticos precisos con <br/><span class="highlight">mínima radiación</span></h2></div>
            <div id="step-4" class="scrolly-step-text"><span class="scrolly-label">Confianza Total</span><h2 class="scrolly-heading">El respaldo que tú y <br/><span class="highlight">tu dentista merecen</span></h2></div>
        </div>
    </div>
</section>

<!-- 2. Fondo Dinámico (Auras) -->
<?php include_once 'includes/background-blobs.php'; ?>

<!-- 3. Navegación -->
<?php include_once 'includes/header.php'; ?>

<main class="relative">
    <!-- 4. Hero Section (Paciente) -->
    <section class="w-full py-0">
        <div class="hero-video-container">
            <video autoplay muted loop playsinline class="hero-video-bg"><source src="video/video.mp4" type="video/mp4"></video>
            <div class="hero-overlay"></div>
            <div class="hero-text-overlay">
                <span class="hero-anim-item inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-[0.2em] uppercase bg-cyan-500/10 text-cyan-300 border border-cyan-500/30 rounded-full opacity-0">MÁXIMA TECNOLOGÍA, MÍNIMA RADIACIÓN</span>
                <h1 class="hero-anim-item text-6xl md:text-8xl lg:text-9xl font-light leading-[1] mb-8 opacity-0">Tu Salud es Primero. <br><span class="font-normal italic text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-white">Tu Sonrisa También.</span></h1>
                <p class="hero-anim-item text-lg md:text-xl text-cyan-50/70 max-w-2xl mx-auto mb-10 leading-relaxed opacity-0">Imágenes HD con protocolos Ultra Low Dose™. La tecnología más segura para cuidar de ti mientras vemos lo que otros no ven.</p>
                <div class="hero-anim-item flex flex-col sm:flex-row gap-5 justify-center opacity-0">
                    <a href="reserva.php" class="btn-primary">AGENDAR MI CITA</a>
                    <a href="estudios.php" class="btn-glass">VER CATÁLOGO 3D</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4.1 Trust Bar (NUEVO: Autoridad Inmediata) -->
    <?php include_once 'includes/trust-bar.php'; ?>

    <!-- 5. Catálogo de Estudios -->
    <section id="estudios" class="max-w-7xl mx-auto pt-10 pb-32 px-4">
        <div class="flex justify-between items-end mb-20">
            <div>
                <span class="text-[10px] font-black tracking-[0.5em] text-cyan-500 uppercase mb-4 block">PORTAFOLIO CLÍNICO</span>
                <h2 class="section-title">Estudios Especializados</h2>
                <p class="section-desc">Tecnología de vanguardia para diagnósticos de precisión milimétrica.</p>
            </div>
            <div class="hidden md:block w-32 h-[1px] bg-slate-200 mb-4"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Cards de servicios (Ultra-limpias) -->
            <div class="clinical-card opacity-0 service-reveal">
                <div class="clinical-icon bg-cyan-500/10 text-cyan-600">
                    <span class="material-symbols-outlined text-3xl">orthopedics</span>
                </div>
                <h3>Ortodoncia</h3>
                <p>Análisis de alta precisión para tratamientos más rápidos y resultados predecibles.</p>
                <a class="clinical-link" href="estudios.php">Ver estudios <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>

            <div class="clinical-card service-reveal">
                <div class="clinical-icon bg-blue-500/10 text-blue-600">
                    <span class="material-symbols-outlined text-3xl">panorama_photosphere</span>
                </div>
                <h3>Radiología 2D</h3>
                <p>Imágenes HD con la mínima radiación posible, cuidando siempre de tu bienestar.</p>
                <a class="clinical-link" href="estudios.php">Ver estudios <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>

            <div class="clinical-card service-reveal">
                <div class="clinical-icon bg-indigo-500/10 text-indigo-600">
                    <span class="material-symbols-outlined text-3xl">view_in_ar</span>
                </div>
                <h3>Tomografía 3D</h3>
                <p>Visualización volumétrica para la certeza total en cirugías e implantes complejos.</p>
                <a class="clinical-link" href="estudios.php">Ver estudios <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>

            <div class="clinical-card service-reveal">
                <div class="clinical-icon bg-slate-500/10 text-slate-600">
                    <span class="material-symbols-outlined text-3xl">3d_rotation</span>
                </div>
                <h3>Escaneo Digital</h3>
                <p>Digitalización intraoral rápida, eliminando moldes incómodos del pasado.</p>
                <a class="clinical-link" href="estudios.php">Ver estudios <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>
        </div>
    </section>

    <!-- 5.1 Stats & Social Proof (Impacto Post-Catálogo) -->
    <?php include_once 'includes/stats-section.php'; ?>
    
    <!-- Sección de Autoridad y Confianza (Marketing) -->
    <?php include_once 'includes/trust-section.php'; ?>

    <!-- 5.2 Testimoniales (Prueba Social Humana) -->
    <?php include_once 'includes/testimonials-section.php'; ?>

    <!-- 6. Call to Action Enriquecido (Marketing) -->
    <section class="cta-section py-32">
        <div class="max-w-7xl mx-auto px-6">
            <div class="cta-grid">
                
                <!-- Imagen Humana + Testimonio -->
                <div class="relative">
                    <div class="cta-image-wrapper">
                        <img src="img/human_experience.png" alt="Atención Clínica Ortho Imagen Digital">
                    </div>
                    <div class="cta-testimonial">
                        <div class="flex gap-1 mb-2">
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                            <span class="material-symbols-outlined text-yellow-400 text-sm">star</span>
                        </div>
                        <p>"Excelente atención y tecnología de punta. Mi diagnóstico fue rapidísimo."</p>
                        <span>— Paciente Verificado</span>
                    </div>
                </div>

                <!-- Contenido de Acción -->
                <div class="lg:pl-12">
                    <span class="hero-badge">TU SALUD ES NUESTRO COMPROMISO</span>
                    <h2 class="cta-title">Diagnóstico Preciso. <br><span>Tranquilidad Absoluta.</span></h2>
                    <p class="cta-description">
                        Obtén la nitidez diagnóstica que necesitas con la mínima radiación posible. Descubre por qué miles de pacientes y especialistas confían en nuestra tecnología Ultra Low Dose™.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <a href="reserva.php" class="btn-primary">
                            ASEGURAR MI CITA <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                        <a href="index.php#sucursales" class="btn-glass">
                            UBICAR SUCURSAL
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. Sucursales (Carousel) -->
    <?php include_once 'includes/branches.php'; ?>

    <!-- 8. Footer -->
    <?php include_once 'includes/footer.php'; ?>
</main>

<!-- 9. Scripts Finales -->
<?php include_once 'includes/scripts.php'; ?>

<!-- 10. SEO Structured Data -->
<?php include_once 'includes/schema-markup.php'; ?>

</body>
</html>
