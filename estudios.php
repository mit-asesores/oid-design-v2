<?php
$page_title = "Catálogo de Estudios Clínicos | Precisión 3D y Baja Radiación";
$page_description = "Explora nuestro catálogo de equipos de vanguardia: Tomografía Pax-i3D Smart, Escaneo Digital y Radiología Panorámica HD. Tecnología certificada con la mínima radiación.";
include_once 'includes/head.php';
?>

<!-- Failsafe for Editorial Buttons -->
<style>
    .btn-editorial-cta {
        display: inline-block !important;
        padding: 1rem 2.5rem !important;
        background: transparent !important;
        border: 1px solid #0891b2 !important;
        color: #0891b2 !important;
        border-radius: 9999px !important;
        font-size: 11px !important;
        font-weight: 800 !important;
        letter-spacing: 0.2em !important;
        text-transform: uppercase !important;
        text-decoration: none !important;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
        margin-top: 1.5rem !important;
        cursor: pointer !important;
    }

    .btn-editorial-cta:hover {
        background: #0891b2 !important;
        color: #ffffff !important;
        box-shadow: 0 15px 30px rgba(8, 145, 178, 0.2) !important;
        transform: translateY(-3px) !important;
    }
</style>

<?php include_once 'includes/header.php'; ?>

<main id="smooth-wrapper" class="not-home">

    <!-- SECCIÓN 1: Hero Editorial (Estética High-Tech Dental - Full Bleed) -->
    <br>
    <section class="relative w-full overflow-hidden bg-slate-900" style="height: 100vh;">
        <div class="absolute inset-0 w-full h-full">
            <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-60 saturate-[1.1]">
                <source src="video/hero_estudios_2.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/40 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
        </div>

        <!-- Floating 3D Molar (Hologram) -->
        <div class="absolute right-[5%] top-[15%] w-[400px] md:w-[650px] h-[400px] md:h-[650px] pointer-events-none hidden lg:block animate-float"
            style="z-index: 5; 
                        background: url('img/holographic_molar_v2.png') center/contain no-repeat; 
                        mix-blend-mode: screen;">
        </div>

        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col items-start justify-center h-full p-8 md:p-20 pt-80">
            <div
                class="hero-badge-status mb-6 flex items-center gap-3 bg-white/5 backdrop-blur-md border border-white/10 px-4 py-2 rounded-full">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse shadow-[0_0_10px_#22d3ee]"></span>
                <span class="text-[10px] font-bold tracking-[0.3em] text-cyan-400 uppercase">Tecnología de Diagnóstico
                    Avanzado</span>
            </div>

            <h1 class="hero-anim-item text-white text-5xl md:text-8xl font-medium leading-[0.95] tracking-tighter mb-8"
                style="letter-spacing: -0.04em;">
                Diagnóstico Digital <br>
                <span class="text-cyan-400 italic font-bold">de Máxima Precisión.</span>
            </h1>

            <p class="text-white/70 text-lg md:text-xl max-w-lg mb-12 font-light leading-relaxed">
                Visualiza cada detalle con nitidez sub-milimétrica. <br class="hidden md:block">
                La certeza clínica que tus pacientes merecen.
            </p>

            <div class="flex flex-wrap gap-4 mb-20">
                <a href="#catalog-section"
                    class="inline-flex items-center gap-4 bg-cyan-600 text-white text-base font-bold pl-8 pr-2 py-2 rounded-full hover:bg-white hover:text-cyan-600 transition-all duration-300 group shadow-xl shadow-cyan-900/40">
                    Explorar Estudios
                    <div class="bg-white/20 rounded-full p-2 group-hover:bg-cyan-600/10 transition-colors">
                        <span
                            class="material-symbols-outlined text-white group-hover:text-cyan-600 transition-colors">arrow_downward</span>
                    </div>
                </a>
                <a href="citas.php"
                    class="inline-flex items-center gap-3 bg-white/5 backdrop-blur-md border border-white/20 text-white text-base font-bold px-8 py-4 rounded-full hover:bg-white hover:text-black transition-all duration-300">
                    Agendar Cita
                </a>
            </div>

            <!-- Brand & Study Marquee -->
            <div class="w-full max-w-5xl overflow-hidden mt-12 border-t border-white/10 pt-12">
                <style>
                    @keyframes marquee-scroll {
                        0% {
                            transform: translateX(0);
                        }

                        100% {
                            transform: translateX(-50%);
                        }
                    }

                    @keyframes float-anim {

                        0%,
                        100% {
                            transform: translateY(0);
                        }

                        50% {
                            transform: translateY(-30px);
                        }
                    }

                    .animate-float {
                        animation: float-anim 8s ease-in-out infinite;
                    }

                    .marquee-wrapper {
                        display: flex;
                        width: max-content;
                        animation: marquee-scroll 45s linear infinite;
                    }
                </style>
                <div class="marquee-wrapper">
                    <!-- Items -->
                    <span class="mx-12 text-white/40 whitespace-nowrap font-bold"
                        style="font-size: 14px; letter-spacing: 0.1em;">VATECH GLOBAL</span>
                    <span class="mx-12 text-cyan-500/50 whitespace-nowrap uppercase font-bold"
                        style="font-size: 11px;">· Tomografía CBCT ·</span>
                    <span class="mx-12 text-white/40 whitespace-nowrap italic font-medium"
                        style="font-size: 14px; letter-spacing: 0.1em;">ROMEXIS PLANMECA</span>
                    <span class="mx-12 text-cyan-500/50 whitespace-nowrap uppercase font-bold"
                        style="font-size: 11px;">· Escaneo Intraoral ·</span>
                    <span class="mx-12 text-white/40 whitespace-nowrap font-light"
                        style="font-size: 14px; letter-spacing: 0.1em;">ITERO</span>
                    <span class="mx-12 text-cyan-500/50 whitespace-nowrap uppercase font-bold"
                        style="font-size: 11px;">· Radiografía Panorámica ·</span>
                    <!-- Clone -->
                    <span class="mx-12 text-white/40 whitespace-nowrap font-bold"
                        style="font-size: 14px; letter-spacing: 0.1em;">VATECH GLOBAL</span>
                    <span class="mx-12 text-cyan-500/50 whitespace-nowrap uppercase font-bold"
                        style="font-size: 11px;">· Tomografía CBCT ·</span>
                    <span class="mx-12 text-white/40 whitespace-nowrap italic font-medium"
                        style="font-size: 14px; letter-spacing: 0.1em;">3SHAPE ITERO</span>
                    <span class="mx-12 text-cyan-500/50 whitespace-nowrap uppercase font-bold"
                        style="font-size: 11px;">· Escaneo Intraoral ·</span>
                    <span class="mx-12 text-white/40 whitespace-nowrap font-light"
                        style="font-size: 14px; letter-spacing: 0.1em;">DIGITAL WORKFLOW</span>
                    <span class="mx-12 text-cyan-500/50 whitespace-nowrap uppercase font-bold"
                        style="font-size: 11px;">· Radiografía Panorámica ·</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 2: Pilares de Valor (Copy Optimizado) -->
    <section class="py-32 bg-slate-50/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="clinical-pilar-card">
                    <span class="pilar-number">01 / CERTEZA</span>
                    <h3 class="pilar-title">Nitidez Absoluta</h3>
                    <p class="pilar-body">Imágenes HD con pureza digital superior que eliminan cualquier margen de error
                        en tu planificación quirúrgica.</p>
                </div>
                <div class="clinical-pilar-card-featured">
                    <span class="pilar-number">02 / AGILIDAD</span>
                    <h3 class="pilar-title">Resultados Hoy</h3>
                    <p class="pilar-body">Sincronización instantánea con la nube. Visualiza el estudio en tu consultorio
                        antes de que el paciente termine su visita.</p>
                </div>
                <div class="clinical-pilar-card">
                    <span class="pilar-number">03 / EVOLUCIÓN</span>
                    <h3 class="pilar-title">Digital Flow</h3>
                    <p class="pilar-body">Archivos listos para integración CAD/CAM y software de trazado. Un ecosistema
                        diseñado para la odontología del futuro.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3: Seguridad (PROTOCOLO GREEN + CTA) -->
    <section class="py-24 bg-gradient-to-b from-slate-50/30 to-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="safety-banner-premium">
                <div class="safety-glow-effect"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center gap-16">
                    <div class="w-full md:w-2/3">
                        <div class="flex items-center gap-4 mb-8">
                            <span class="safety-accent-line"></span>
                            <span class="text-cyan-400 font-bold text-[10px] tracking-[0.4em] uppercase">Tecnología
                                Responsable</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-light text-white leading-tight mb-8">
                            Seguridad Green: <br>
                            <span class="font-bold">Hasta un 70% menos de radiación.</span>
                        </h2>
                        <p class="text-slate-400 text-lg font-light leading-relaxed max-w-xl mb-12">
                            Protegemos a tus pacientes con algoritmos de ultra-baja dosis que mantienen la máxima
                            fidelidad diagnóstica sin riesgos innecesarios.
                        </p>
                        <a href="citas.php" class="btn-primary">
                            Priorizar mi seguridad hoy
                        </a>
                    </div>
                    <div class="w-full md:w-1/3 flex justify-center">
                        <div
                            class="w-48 h-48 rounded-full border border-white/10 flex flex-col items-center justify-center p-8 text-center relative group">
                            <div
                                class="absolute inset-0 rounded-full border-t-2 border-cyan-400 animate-[spin_10s_linear_infinite]">
                            </div>
                            <span class="material-symbols-outlined text-cyan-400 text-5xl mb-2">verified_user</span>
                            <span class="text-white font-bold text-[10px] tracking-widest uppercase">Certificado
                                Green</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECCIÓN 4: Catálogo de Servicios Real (Optimizado para Conversión) -->
    <section id="catalog-section" class="py-32 bg-slate-50/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="section-label">PORTAFOLIO CLÍNICO</span>
                <h2 class="text-4xl md:text-5xl font-light text-slate-800 mb-6">Encuentra el <span
                        class="font-bold text-slate-900">estudio exacto.</span></h2>
                <p class="text-slate-400 font-light mb-12">Selecciona una categoría para explorar nuestras soluciones de
                    diagnóstico digital.</p>

                <div class="tab-nav-container">
                    <button id="btn-tab-2d" onclick="switchTab('tab-2d')" class="tab-btn-luxury active">Radiología
                        2D</button>
                    <button id="btn-tab-3d" onclick="switchTab('tab-3d')" class="tab-btn-luxury inactive">Tomografía
                        3D</button>
                    <button id="btn-tab-ortho" onclick="switchTab('tab-ortho')"
                        class="tab-btn-luxury inactive">Ortodoncia</button>
                    <button id="btn-tab-scan" onclick="switchTab('tab-scan')" class="tab-btn-luxury inactive">Escaneo
                        3D</button>
                    <button id="btn-tab-specialized" onclick="switchTab('tab-specialized')"
                        class="tab-btn-luxury inactive">Especializados</button>
                </div>
            </div>

            <div id="catalog-container" class="relative min-h-[500px]">
                <!-- TABS CONTENT: RADIOLOGÍA 2D -->
                <div id="tab-2d"
                    class="tab-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <h4 class="study-card-title">Panorámica Digital</h4>
                        <p class="study-card-body">Claridad absoluta en estructuras dentomaxilares. Disponible al
                            instante en tu portal.</p>
                        <a href="citas.php" class="study-card-link">Agendar este estudio →</a>
                    </div>
                    <div class="study-card-luxury">
                        <h4 class="study-card-title">Lateral de Cráneo</h4>
                        <p class="study-card-body">Precisión milimétrica para trazados cefalométricos exitosos.</p>
                        <a href="citas.php" class="study-card-link">Agendar este estudio →</a>
                    </div>
                    <div class="study-card-luxury">
                        <h4 class="study-card-title">Serie Periapical</h4>
                        <p class="study-card-body">Detalle profundo radicular y periodontal en alta resolución.</p>
                        <a href="citas.php" class="study-card-link">Agendar este estudio →</a>
                    </div>
                </div>

                <!-- TABS CONTENT: TOMOGRAFÍA 3D -->
                <div id="tab-3d"
                    class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <div
                            class="w-12 h-12 bg-cyan-50 rounded-2xl flex items-center justify-center p-2 mb-6 group-hover:bg-cyan-500 text-cyan-600 group-hover:text-white transition-all">
                            <div class="icon-tint" style="-webkit-mask-image: url('img/icons/tomografia.png'); mask-image: url('img/icons/tomografia.png');"></div>
                        </div>
                        <h4 class="study-card-title">Tomografía Completa</h4>
                        <p class="study-card-body">Reconstrucción 3D total para casos complejos de cirugía e implantes.
                        </p>
                        <a href="citas.php" class="study-card-link">Solicitar Tomografía →</a>
                    </div>
                    <div class="study-card-luxury">
                        <div
                            class="w-12 h-12 bg-cyan-50 rounded-2xl flex items-center justify-center text-cyan-600 mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-all">
                            <svg viewBox="0 0 24 24" class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="18" cy="12" r="3" opacity="0.3"/>
                                <circle cx="6" cy="12" r="3"/>
                                <path d="M9 12h6" stroke-dasharray="2 2"/>
                                <path d="M12 9v6" opacity="0.2"/>
                            </svg>
                        </div>
                        <h4 class="study-card-title">ATM Funcional</h4>
                        <p class="study-card-body">Análisis dinámico de la articulación con nitidez 3D superior.</p>
                        <a href="citas.php" class="study-card-link">Agendar cita →</a>
                    </div>
                </div>

                <!-- TABS CONTENT: ORTODONCIA -->
                <div id="tab-ortho"
                    class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <h4 class="study-card-title">Modelos de Estudio</h4>
                        <p class="study-card-body">Duplicado físico de alta fidelidad para planificación y registro.</p>
                        <a href="citas.php" class="study-card-link">Solicitar estudio →</a>
                    </div>
                    <div class="study-card-luxury">
                        <h4 class="study-card-title">Fotografía Clínica</h4>
                        <p class="study-card-body">Registro visual macro de alta gama para análisis facial.</p>
                        <a href="citas.php" class="study-card-link">Solicitar estudio →</a>
                    </div>
                </div>

                <!-- TABS CONTENT: ESCANEO 3D -->
                <div id="tab-scan"
                    class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <div
                            class="w-12 h-12 bg-cyan-50 rounded-2xl flex items-center justify-center p-2 mb-6 group-hover:bg-cyan-500 text-cyan-600 group-hover:text-white transition-all">
                            <div class="icon-tint" style="-webkit-mask-image: url('img/icons/escaneo.png'); mask-image: url('img/icons/escaneo.png');"></div>
                        </div>
                        <h4 class="study-card-title">Escaneo Intraoral</h4>
                        <p class="study-card-body">Flujo 100% digital con tecnología de vanguardia.</p>
                        <a href="citas.php" class="study-card-link">Agendar escaneo →</a>
                    </div>
                </div>

                <!-- TABS CONTENT: ESPECIALIZADOS -->
                <div id="tab-specialized"
                    class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <div class="study-card-icon-wrapper p-2 text-cyan-600 group-hover:text-white">
                            <div class="icon-tint" style="-webkit-mask-image: url('img/icons/ortodoncia.png'); mask-image: url('img/icons/ortodoncia.png');"></div>
                        </div>
                        <h4 class="study-card-title">Ortodóntico Completo</h4>
                        <p class="study-card-body">Carpeta integral de diagnóstico con trazados cefalométricos y análisis
                            estético.</p>
                        <a href="citas.php" class="study-card-link">Agendar ahora →</a>
                    </div>

                    <div class="study-card-luxury">
                        <div class="study-card-icon-wrapper">
                            <svg viewBox="0 0 24 24" class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" opacity="0.3"/>
                                <circle cx="12" cy="13" r="4"/>
                                <circle cx="12" cy="13" r="1"/>
                            </svg>
                        </div>
                        <h4 class="study-card-title">Fotografías Clínicas</h4>
                        <p class="study-card-body">Set profesional extra e intraoral de alta gama para seguimiento clínico.
                        </p>
                        <a href="citas.php" class="study-card-link">Agendar ahora →</a>
                    </div>

                    <div class="study-card-luxury">
                        <div class="study-card-icon-wrapper">
                            <svg viewBox="0 0 24 24" class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17.5 19a5.5 5.5 0 0 0 5.5-5.5c0-2.3-1.4-4.3-3.5-5.1A7 7 0 0 0 6 9.1C3.8 9.9 2 12 2 14.5A5.5 5.5 0 0 0 7.5 20h10" opacity="0.3"/>
                                <path d="M9 13l2 2 4-4"/>
                            </svg>
                        </div>
                        <h4 class="study-card-title">Carpeta Digital OID</h4>
                        <p class="study-card-body">Acceso ilimitado a tu expediente en la nube con visualizador 3D OrthoCloud.
                        </p>
                        <a href="citas.php" class="study-card-link">Acceder al portal →</a>
                    </div>

                    <div class="study-card-luxury">
                        <div class="study-card-icon-wrapper">
                            <span class="material-symbols-outlined text-3xl text-cyan-600">nasal_flare</span>
                        </div>
                        <h4 class="study-card-title">Senos Paranasales</h4>
                        <p class="study-card-body">Estudio especializado para la detección de patologías en cavidades
                            nasales.</p>
                        <a href="citas.php" class="study-card-link">Agendar ahora →</a>
                    </div>

                    <div class="study-card-luxury">
                        <div class="study-card-icon-wrapper">
                            <span class="material-symbols-outlined text-3xl text-cyan-600">join_inner</span>
                        </div>
                        <h4 class="study-card-title">ATM Comparativa</h4>
                        <p class="study-card-body">Análisis de la articulación temporomandibular en posición abierta y
                            cerrada.</p>
                        <a href="citas.php" class="study-card-link">Agendar ahora →</a>
                    </div>

                    <div class="study-card-luxury">
                        <div class="study-card-icon-wrapper">
                            <svg viewBox="0 0 24 24" class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="16" rx="2" opacity="0.3"/>
                                <path d="M12 8v8M8 12h8"/>
                                <path d="M7 21h10" stroke-width="0.8" opacity="0.5"/>
                            </svg>
                        </div>
                        <h4 class="study-card-title">Paquetes Quirúrgicos</h4>
                        <p class="study-card-body">Combinación de estudios optimizada para procedimientos de cirugía
                            maxilofacial.</p>
                        <a href="citas.php" class="study-card-link">Ver paquetes →</a>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <p class="text-slate-400 font-light mb-8 italic">¿No encuentras el estudio que buscas o tienes una
                    solicitud especial?</p>
                <a href="contacto.php"
                    class="text-slate-900 font-bold text-[10px] tracking-widest uppercase border-b-2 border-cyan-500 pb-2 hover:text-cyan-600 transition-all">Hablar
                    con un técnico radiólogo</a>
            </div>
        </div>
    </section>

    <!-- EQUIPAMIENTO TECNOLÓGICO: DISEÑO EDITORIAL MINIMALISTA -->
    <section class="py-32 bg-white relative overflow-hidden border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="space-y-40">
                <!-- Item 1: Pax-i3D Smart (A - Studio Gallery) -->
                <div class="flex flex-col lg:flex-row items-center gap-16 equipment-item py-12 relative">
                    <div class="premium-line-guide"></div>
                    <div class="lg:w-7/12 relative group">
                        <div
                            class="studio-gallery-container rounded-[4rem] p-12 relative overflow-hidden premium-reveal">
                            <div class="studio-backdrop-aura"></div>
                            <div class="studio-img-wrap relative z-10">
                                <img src="img/cbct_3d.png" class="w-full h-auto rounded-[3rem] shadow-2xl mx-auto"
                                    alt="Pax-i3D Tomografía 3D" loading="lazy">
                            </div>
                            <div class="studio-tech-tag uppercase">CERTIFICACIÓN VATECH GLOBAL</div>
                        </div>
                    </div>
                    <div class="lg:w-5/12 equipment-text">
                        <span class="section-label premium-reveal tracking-[0.3em]">EXCELENCIA RADIOLÓGICA</span>
                        <h3 class="text-5xl font-black text-slate-900 mb-6 premium-reveal leading-tight">Pax-i3D
                            <br><span class="text-cyan-600">Smart</span>
                        </h3>
                        <p class="text-slate-500 font-light text-lg leading-relaxed mb-8 premium-reveal">
                            Nuestra tecnología Pax-i3D integra el protocolo <strong>Green CT</strong>, que reduce la
                            exposición a la radiación hasta en un <strong>52.6%</strong> en comparación con tomografías
                            convencionales (Vatech Innovation). Cumplimos rigurosamente con el estándar
                            <strong>ALARA</strong>, garantizando seguridad clínica y nitidez absoluta.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-10 premium-reveal">
                            <div
                                class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                                MÍNIMA RADIACIÓN</div>
                            <div
                                class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                                ALTA DEFINICIÓN</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-editorial-cta">Agendar este estudio</a>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Escaneo Digital 3D (A - Studio Gallery) -->
                <div class="flex flex-col lg:flex-row items-center gap-16 equipment-item py-12 relative">
                    <div class="premium-line-guide line-right"></div>
                    <div class="lg:w-5/12 order-2 lg:order-1 equipment-text lg:text-right">
                        <span class="section-label premium-reveal tracking-[0.3em]">FLUJO DIGITAL</span>
                        <h3 class="text-5xl font-black text-slate-900 mb-6 premium-reveal leading-tight">Escaneo
                            <br><span class="text-cyan-600">Digital 3D</span>
                        </h3>
                        <p class="text-slate-500 font-light text-lg leading-relaxed mb-8 premium-reveal">
                            Eliminamos el error de las impresiones analógicas. El escaneo digital 3D captura la anatomía
                            oral con una fidelidad de hasta <strong>20 micras</strong>, superando a los moldes de
                            silicona que pueden deformarse hasta un 1.5% (<em>Journal of Dentistry</em>). Aseguramos un
                            ajuste milimétrico desde la primera cita.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-10 premium-reveal lg:justify-end">
                            <div
                                class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                                SIN MOLDES</div>
                            <div
                                class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                                COLOR REAL</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-editorial-cta">Agendar este estudio</a>
                        </div>
                    </div>
                    <div class="lg:w-7/12 relative order-1 lg:order-2 group">
                        <div
                            class="studio-gallery-container rounded-[4rem] p-12 relative overflow-hidden premium-reveal">
                            <div class="studio-backdrop-aura"></div>
                            <div class="studio-img-wrap relative z-10">
                                <img src="img/scanner_3d.png" class="w-full h-auto rounded-[3rem] shadow-2xl mx-auto"
                                    alt="Escaneo Intraoral" loading="lazy">
                            </div>
                            <div class="studio-tech-tag uppercase">PRECISIÓN MICRÓNICA</div>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Radiología HD (A - Studio Gallery) -->
                <div class="flex flex-col lg:flex-row items-center gap-16 equipment-item py-12 relative">
                    <div class="premium-line-guide"></div>
                    <div class="lg:w-7/12 relative group">
                        <div
                            class="studio-gallery-container rounded-[4rem] p-12 relative overflow-hidden premium-reveal">
                            <div class="studio-backdrop-aura"></div>
                            <div class="studio-img-wrap relative z-10">
                                <img src="img/panoramico_hd.png" class="w-full h-auto rounded-[3rem] shadow-2xl mx-auto"
                                    alt="Radiología Panorámica" loading="lazy">
                            </div>
                            <div class="studio-tech-tag uppercase">SISTEMA HD INTEGRADO</div>
                        </div>
                    </div>
                    <div class="lg:w-5/12 equipment-text">
                        <span class="section-label premium-reveal tracking-[0.3em]">VISIÓN INTEGRAL</span>
                        <h3 class="text-5xl font-black text-slate-900 mb-6 premium-reveal leading-tight">Radiología
                            <br><span class="text-cyan-600">HD Digital</span>
                        </h3>
                        <p class="text-slate-500 font-light text-lg leading-relaxed mb-8 premium-reveal">
                            Superamos la limitación de la película tradicional. Nuestros sensores digitales HD ofrecen
                            una resolución superior a los <strong>20 lp/mm</strong>, duplicando la nitidez de los
                            métodos analógicos. Esta precisión es crítica para detectar patologías incipientes y
                            microfracturas invisibles en sistemas convencionales.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-10 premium-reveal">
                            <div
                                class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                                PANORÁMICA HD</div>
                            <div
                                class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                                BAJA RADIACIÓN</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-editorial-cta">Agendar este estudio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: CONFIANZA Y AUTORIDAD (E-E-A-T) -->
    <?php include_once 'includes/trust-section.php'; ?>

    <!-- SECCIÓN: FUNDAMENTOS DE CERTEZA CLÍNICA (AI SEO CITATIONS) -->
    <section class="py-16 bg-slate-50 border-t border-slate-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h4 class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase mb-8 text-center">Fundamentos
                    de Certeza Clínica & Referencias</h4>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-8 text-[10px] text-slate-400 font-light leading-relaxed">
                    <div>
                        <p class="mb-4"><strong>01. Radioprotección:</strong> Los protocolos Green CT de Vatech reducen
                            la dosis efectiva de radiación en un 52.6% manteniendo la calidad diagnóstica (Data Source:
                            Vatech Global Innovation Center, 2024).</p>
                        <p><strong>02. Precisión Digital:</strong> Estudios de revisión sistemática confirman
                            precisiones de 20-30 micras en escaneo intraoral, eliminando el error de expansión térmica
                            de materiales analógicos (Ref: Journal of Dentistry).</p>
                    </div>
                    <div>
                        <p class="mb-4"><strong>03. Éxito Quirúrgico:</strong> La planificación mediante CBCT 3D reduce
                            la desviación en colocación de implantes a menos de 0.5mm, siguiendo guías del ITI
                            (International Team for Implantology).</p>
                        <p><strong>04. Resolución Espacial:</strong> Sensores digitales HD certificados por FDA ofrecen
                            >20 lp/mm, duplicando la nitidez de la película radiográfica convencional (ISO 3665 Dental
                            Radiography Standards).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 5: El Portal Digital (Con Efecto de Máscara Circular) -->
    <div class="portal-reveal-trigger bg-white">
        <section class="reveal-portal-container py-32 bg-slate-900 overflow-hidden relative">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]">
                </div>
            </div>
            <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
                <span class="text-[10px] font-black tracking-[0.5em] text-cyan-400 uppercase mb-8 block">CONTROL TOTAL
                    EN LA NUBE</span>
                <h2 class="text-4xl md:text-6xl font-light text-white mb-12 leading-tight">Tu consultorio merece <br>
                    <span class="font-bold italic">diagnósticos sin fronteras.</span>
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto mb-16 font-light text-lg">Accede y descarga los estudios de
                    tus pacientes desde cualquier dispositivo con OID Cloud.</p>
                <a href="https://orthoimagendigital.com/OrthoCloud" target="_blank" class="btn-primary"
                    style="padding: 1.5rem 3rem;">
                    <span class="material-symbols-outlined text-2xl">cloud_sync</span>
                    Acceder a mi Portal OID
                </a>
            </div>
        </section>
    </div>

    <!-- 8. Footer -->
    <?php include_once 'includes/footer.php'; ?>

</main>

<!-- 9. Scripts Finales -->
<?php include_once 'includes/scripts.php'; ?>

<!-- Marcado Schema.org para AI Search Visibility (AEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalWebPage",
  "name": "Catálogo de Estudios y Tecnología Dental HD - OID",
  "description": "Explora nuestra tecnología de diagnóstico dental avanzada: Pax-i3D Smart, Escaneo Intraoral 3D y Radiología HD con baja dosis de radiación.",
  "medicalSpecialty": "Dentistry",
  "relevantProcedure": ["Dental Imaging", "Cone Beam Computed Tomography", "Digital Dental Impression"],
  "mainEntity": {
    "@type": "MedicalDevice",
    "name": "Pax-i3D Smart Precision",
    "manufacturer": "Vatech",
    "description": "Sistema de tomografía computarizada de haz cónico (CBCT) con protocolos de reducción de radiación del 52.6%."
  },
  "author": {
    "@type": "Person",
    "name": "Dr. Arturo Estrada",
    "jobTitle": "Director Médico",
    "affiliation": {
      "@type": "Organization",
      "name": "Ortho Imagen Digital"
    }
  },
  "datePublished": "2024-01-01",
  "dateModified": "2026-05-07"
}
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // 0. Reveal del Header
        gsap.to("#main-header", { opacity: 1, y: 0, duration: 1, ease: "power3.out" });

        // 1. Efecto Portal Reveal (Clip-path circular)
        gsap.to(".reveal-portal-container", {
            clipPath: "circle(100% at 50% 50%)",
            ease: "none",
            scrollTrigger: {
                trigger: ".portal-reveal-trigger",
                start: "top 80%",
                end: "top 20%",
                scrub: 1
            }
        });

        // 2. Animaciones de la Sección de Confianza (Trust Section)
        gsap.from(".trust-reveal-left", {
            x: -50,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".trust-reveal-left",
                start: "top 85%"
            }
        });

        gsap.from(".trust-reveal-right", {
            x: 50,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".trust-reveal-right",
                start: "top 85%"
            }
        });

        gsap.to(".visual-anchor", {
            y: -30,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // 3. Parallax de Capas Atmosférico (Efecto 7)
        const layers = document.querySelectorAll('[data-depth]');
        layers.forEach(layer => {
            const depth = layer.getAttribute('data-depth');
            const movement = layer.offsetHeight * depth;

            gsap.to(layer, {
                y: -movement,
                ease: "none",
                scrollTrigger: {
                    trigger: layer,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                }
            });
        });

        // 3. Coreografía de Equipos (Efecto Lupa + Parallax + Split Text)
        const items = document.querySelectorAll('.equipment-item');
        items.forEach((item, index) => {
            const img = item.querySelector('.equipment-img');
            const h3 = item.querySelector('h3');

            // Simulación de Split Text (Word Reveal)
            if (h3) {
                const text = h3.innerText;
                h3.innerHTML = text.split(' ').map(word =>
                    `<span style="display:inline-block; overflow:hidden; vertical-align:top;">
                        <span class="split-word" style="display:inline-block;">${word}&nbsp;</span>
                    </span>`
                ).join('');

                // Animación de las palabras del título (Efecto 5)
                const titleWords = item.querySelectorAll('.split-word');
                gsap.from(titleWords, {
                    y: "100%",
                    opacity: 0,
                    duration: 1,
                    stagger: 0.1,
                    ease: "power4.out",
                    scrollTrigger: {
                        trigger: h3,
                        start: "top 90%",
                        toggleActions: "play none none reverse"
                    }
                });
            }

            // Animación del Párrafo (Line Reveal / Fade Slide)
            const p = item.querySelector('.equipment-text p');
            const pills = item.querySelectorAll('.equipment-text .flex > div'); // Selecciona los tags específicos de texto

            if (p) {
                gsap.from([p, ...pills], {
                    opacity: 0,
                    y: 20,
                    duration: 1.2,
                    stagger: 0.2,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: p,
                        start: "top 90%",
                        toggleActions: "play none none reverse"
                    }
                });
            }

            // Zoom-In sutil al scroll
            if (img) {
                gsap.fromTo(img,
                    { scale: 1 },
                    {
                        scale: 1.15,
                        ease: "none",
                        scrollTrigger: {
                            trigger: item,
                            start: "top bottom",
                            end: "bottom top",
                            scrub: 1
                        }
                    }
                );
            }
        });

        // 4. Tab Switching Logic
        window.switchTab = (tabId, targetBtn = null) => {
            // Ocultar todos los contenidos
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
                content.style.opacity = "0";
            });

            // Resetear todos los botones
            document.querySelectorAll('.tab-btn-luxury').forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('inactive');
            });

            // Mostrar tab activa
            const activeTab = document.getElementById(tabId);
            if (activeTab) {
                activeTab.classList.remove('hidden');
                gsap.fromTo(activeTab, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5, ease: "power2.out" });
            }

            // Activar botón (si se pasó uno o si se detecta por el evento)
            const btnToActivate = targetBtn || (event ? event.currentTarget : null);
            if (btnToActivate) {
                btnToActivate.classList.add('active');
                btnToActivate.classList.remove('inactive');
            } else {
                // Si no hay botón (llamada desde jumpToTab), buscarlo por el onclick
                const foundBtn = Array.from(document.querySelectorAll('.tab-btn-luxury'))
                    .find(b => b.getAttribute('onclick')?.includes(tabId));
                if (foundBtn) {
                    foundBtn.classList.add('active');
                    foundBtn.classList.remove('inactive');
                }
            }
        };

        // 5. Jump to Tab (Desde el Hero)
        window.jumpToTab = (tabId) => {
            const catalog = document.getElementById('catalog-section');
            if (catalog) {
                catalog.scrollIntoView({ behavior: 'smooth' });
                // Pequeño delay para que el scroll termine antes de cambiar la tab visualmente
                setTimeout(() => window.switchTab(tabId), 300);
            }
        };

        // 5. Parallax Hero
        gsap.to(".hero-bg-img", {
            yPercent: 20,
            ease: "none",
            scrollTrigger: {
                trigger: ".hero-section",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });

        // --- LOGICA CAPÍTULO 1: MINIMAL PREMIUM REVEAL ---
        gsap.utils.toArray('.equipment-item').forEach(item => {
            const reveals = item.querySelectorAll('.premium-reveal');

            gsap.from(reveals, {
                y: 60,
                opacity: 0,
                duration: 1.2,
                stagger: 0.15,
                ease: "power3.out",
                clearProps: "all",
                scrollTrigger: {
                    trigger: item,
                    start: "top 85%",
                    onEnter: () => item.classList.add('is-visible'),
                    toggleActions: "play none none reverse"
                }
            });
        });
    });
</script>

</body>

</html>