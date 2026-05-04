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
                <span class="hero-anim-item hero-badge opacity-0">DIAGNÓSTICO DIGITAL DE ALTA TECNOLOGÍA</span>
                <h1 class="hero-anim-item hero-title opacity-0">La Imagen más <br><span>Clara de tu Sonrisa</span></h1>
                <p class="hero-anim-item hero-description opacity-0">Descubre la tranquilidad de un diagnóstico preciso con tecnología 3D de mínima radiación.</p>
                <div class="hero-anim-item flex flex-col sm:flex-row gap-5 justify-center opacity-0">
                    <a href="citas.php" class="btn-primary">AGENDAR CITA</a>
                    <a href="estudios.php" class="btn-glass">VER ESTUDIOS</a>
                </div>
            </div>
        </div>
    </section>

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

            <div class="clinical-card opacity-0 service-reveal">
                <div class="clinical-icon bg-blue-500/10 text-blue-600">
                    <span class="material-symbols-outlined text-3xl">panorama_photosphere</span>
                </div>
                <h3>Radiología 2D</h3>
                <p>Imágenes HD con la mínima radiación posible, cuidando siempre de tu bienestar.</p>
                <a class="clinical-link" href="estudios.php">Ver estudios <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>

            <div class="clinical-card opacity-0 service-reveal">
                <div class="clinical-icon bg-indigo-500/10 text-indigo-600">
                    <span class="material-symbols-outlined text-3xl">view_in_ar</span>
                </div>
                <h3>Tomografía 3D</h3>
                <p>Visualización volumétrica para la certeza total en cirugías e implantes complejos.</p>
                <a class="clinical-link" href="estudios.php">Ver estudios <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>

            <div class="clinical-card opacity-0 service-reveal">
                <div class="clinical-icon bg-slate-500/10 text-slate-600">
                    <span class="material-symbols-outlined text-3xl">3d_rotation</span>
                </div>
                <h3>Escaneo Digital</h3>
                <p>Digitalización intraoral rápida, eliminando moldes incómodos del pasado.</p>
                <a class="clinical-link" href="estudios.php">Ver estudios <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>
        </div>
    </section>
    
    <!-- Sección de Autoridad y Confianza (Marketing) -->
    <?php include_once 'includes/trust-section.php'; ?>

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
                    <span class="hero-badge">INNOVACIÓN CON EMPATÍA</span>
                    <h2 class="cta-title">¿Listo para transformar tu <br><span>diagnóstico?</span></h2>
                    <p class="cta-description">
                        Únete a los miles de pacientes y doctores que ya confían en la precisión de Ortho Imagen Digital. Tu salud dental merece la mejor tecnología y el trato más humano.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <a href="citas.php" class="btn-primary">
                            AGENDAR MI CITA <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                        <a href="index.php#sucursales" class="btn-glass">
                            VER SUCURSALES
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

</body>
</html>
