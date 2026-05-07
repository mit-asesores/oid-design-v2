<?php include_once 'includes/head.php'; ?>

<body class="bg-white font-manrope">

<?php include_once 'includes/header.php'; ?>

<main id="smooth-wrapper" class="not-home">

    <!-- SECCIÓN 1: Hero Editorial (Estética Light Clinical) -->
    <section class="hero-clinical-hub">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=2070&auto=format&fit=crop" 
                 class="hero-bg-img w-full h-full object-cover opacity-30 saturate-[0.8]" alt="Radiología Digital de Vanguardia">
            <div class="absolute inset-0 bg-gradient-to-b from-white/20 via-slate-50/40 to-slate-50"></div>
        </div>
        
        <div class="relative z-10 text-center px-6 pt-32">
            <div class="hero-badge-status">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 animate-pulse"></span>
                <span class="text-[9px] font-bold tracking-[0.3em] text-slate-500 uppercase">Tecnología de Diagnóstico Avanzado</span>
            </div>

            <h1 class="hero-display-title">
                Diagnósticos que <br>
                <span class="font-bold italic text-cyan-600">aseguran tu éxito.</span>
            </h1>
            
            <p class="text-slate-400 max-w-2xl mx-auto mb-12 font-light text-lg leading-relaxed">
                La precisión que los mejores especialistas exigen, <br class="hidden md:block">
                con la rapidez y seguridad que tus pacientes merecen.
            </p>

            <div class="flex flex-wrap justify-center gap-4 mb-20">
                <a href="#catalog-section" class="btn-primary">Ver Catálogo de Estudios</a>
                <a href="citas.php" class="btn-glass">Agendar Cita</a>
            </div>

            <!-- Accesos Directos -->
            <div class="max-w-4xl mx-auto">
                <p class="text-[9px] font-bold tracking-[0.3em] text-slate-400 uppercase mb-8">Explorar por Especialidad</p>
                <nav class="flex flex-wrap justify-center gap-4 md:gap-6">
                    <button onclick="jumpToTab('tab-2d')" class="hero-shortcut-btn">
                        <span class="material-symbols-outlined hero-shortcut-icon">layers</span>
                        <span class="hero-shortcut-text">2D / Radiografía</span>
                    </button>
                    <button onclick="jumpToTab('tab-3d')" class="hero-shortcut-btn">
                        <span class="material-symbols-outlined hero-shortcut-icon">3d_rotation</span>
                        <span class="hero-shortcut-text">3D / Tomografía</span>
                    </button>
                    <button onclick="jumpToTab('tab-ortho')" class="hero-shortcut-btn">
                        <span class="material-symbols-outlined hero-shortcut-icon">biotech</span>
                        <span class="hero-shortcut-text">Ortodoncia</span>
                    </button>
                    <button onclick="jumpToTab('tab-scan')" class="hero-shortcut-btn">
                        <span class="material-symbols-outlined hero-shortcut-icon">settings_overscan</span>
                        <span class="hero-shortcut-text">Escaneo 3D</span>
                    </button>
                </nav>
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
                    <p class="pilar-body">Imágenes HD con pureza digital superior que eliminan cualquier margen de error en tu planificación quirúrgica.</p>
                </div>
                <div class="clinical-pilar-card-featured">
                    <span class="pilar-number">02 / AGILIDAD</span>
                    <h3 class="pilar-title">Resultados Hoy</h3>
                    <p class="pilar-body">Sincronización instantánea con la nube. Visualiza el estudio en tu consultorio antes de que el paciente termine su visita.</p>
                </div>
                <div class="clinical-pilar-card">
                    <span class="pilar-number">03 / EVOLUCIÓN</span>
                    <h3 class="pilar-title">Digital Flow</h3>
                    <p class="pilar-body">Archivos listos para integración CAD/CAM y software de trazado. Un ecosistema diseñado para la odontología del futuro.</p>
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
                            <span class="text-cyan-400 font-bold text-[10px] tracking-[0.4em] uppercase">Tecnología Responsable</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-light text-white leading-tight mb-8">
                            Seguridad Green: <br>
                            <span class="font-bold">Hasta un 70% menos de radiación.</span>
                        </h2>
                        <p class="text-slate-400 text-lg font-light leading-relaxed max-w-xl mb-12">
                            Protegemos a tus pacientes con algoritmos de ultra-baja dosis que mantienen la máxima fidelidad diagnóstica sin riesgos innecesarios.
                        </p>
                        <a href="citas.php" class="btn-primary">
                            Priorizar mi seguridad hoy
                        </a>
                    </div>
                    <div class="w-full md:w-1/3 flex justify-center">
                        <div class="w-48 h-48 rounded-full border border-white/10 flex flex-col items-center justify-center p-8 text-center relative group">
                            <div class="absolute inset-0 rounded-full border-t-2 border-cyan-400 animate-[spin_10s_linear_infinite]"></div>
                            <span class="material-symbols-outlined text-cyan-400 text-5xl mb-2">verified_user</span>
                            <span class="text-white font-bold text-[10px] tracking-widest uppercase">Certificado Green</span>
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
                <h2 class="text-4xl md:text-5xl font-light text-slate-800 mb-6">Encuentra el <span class="font-bold text-slate-900">estudio exacto.</span></h2>
                <p class="text-slate-400 font-light mb-12">Selecciona una categoría para explorar nuestras soluciones de diagnóstico digital.</p>
                
                <div class="tab-nav-container">
                    <button id="btn-tab-2d" onclick="switchTab('tab-2d')" class="tab-btn-luxury active">Radiología 2D</button>
                    <button id="btn-tab-3d" onclick="switchTab('tab-3d')" class="tab-btn-luxury inactive">Tomografía 3D</button>
                    <button id="btn-tab-ortho" onclick="switchTab('tab-ortho')" class="tab-btn-luxury inactive">Ortodoncia</button>
                    <button id="btn-tab-scan" onclick="switchTab('tab-scan')" class="tab-btn-luxury inactive">Escaneo 3D</button>
                    <button id="btn-tab-others" onclick="switchTab('tab-others')" class="tab-btn-luxury inactive">Otros</button>
                </div>
            </div>

            <div id="catalog-container" class="relative min-h-[500px]">
                <!-- TABS CONTENT: RADIOLOGÍA 2D -->
                <div id="tab-2d" class="tab-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <h4 class="study-card-title">Panorámica Digital</h4>
                        <p class="study-card-body">Claridad absoluta en estructuras dentomaxilares. Disponible al instante en tu portal.</p>
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
                <div id="tab-3d" class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <div class="w-12 h-12 bg-cyan-50 rounded-2xl flex items-center justify-center text-cyan-600 mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">3d_rotation</span>
                        </div>
                        <h4 class="study-card-title">Tomografía Completa</h4>
                        <p class="study-card-body">Reconstrucción 3D total para casos complejos de cirugía e implantes.</p>
                        <a href="citas.php" class="study-card-link">Solicitar Tomografía →</a>
                    </div>
                    <div class="study-card-luxury">
                        <div class="w-12 h-12 bg-cyan-50 rounded-2xl flex items-center justify-center text-cyan-600 mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">join_inner</span>
                        </div>
                        <h4 class="study-card-title">ATM Funcional</h4>
                        <p class="study-card-body">Análisis dinámico de la articulación con nitidez 3D superior.</p>
                        <a href="citas.php" class="study-card-link">Agendar cita →</a>
                    </div>
                </div>

                <!-- TABS CONTENT: ORTODONCIA -->
                <div id="tab-ortho" class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
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
                <div id="tab-scan" class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <div class="w-12 h-12 bg-cyan-50 rounded-2xl flex items-center justify-center text-cyan-600 mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">settings_overscan</span>
                        </div>
                        <h4 class="study-card-title">Escaneo Intraoral</h4>
                        <p class="study-card-body">Flujo 100% digital con tecnología de vanguardia.</p>
                        <a href="citas.php" class="study-card-link">Agendar escaneo →</a>
                    </div>
                </div>

                <!-- TABS CONTENT: OTROS -->
                <div id="tab-others" class="tab-content hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-500">
                    <div class="study-card-luxury">
                        <h4 class="study-card-title">Paquetes Quirúrgicos</h4>
                        <p class="study-card-body">Combinación de estudios optimizada para procedimientos específicos.</p>
                        <a href="citas.php" class="study-card-link">Ver paquetes →</a>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <p class="text-slate-400 font-light mb-8 italic">¿No encuentras el estudio que buscas o tienes una solicitud especial?</p>
                <a href="contacto.php" class="text-slate-900 font-bold text-[10px] tracking-widest uppercase border-b-2 border-cyan-500 pb-2 hover:text-cyan-600 transition-all">Hablar con un técnico radiólogo</a>
            </div>
        </div>
    </section>

    <!-- COMPARATIVA DE ESTILOS: PROPUESTA A VS PROPUESTA B -->
    
    <!-- PROPUESTA A: DISEÑO EDITORIAL MINIMALISTA -->
    <section class="py-32 bg-white relative overflow-hidden border-b border-slate-100">
        <div class="container mx-auto px-6 mb-24">
            <span class="text-cyan-600 font-bold tracking-[0.4em] text-[10px] uppercase mb-4 block">OPCIÓN DE DISEÑO 01</span>
            <h2 class="text-5xl font-black text-slate-900 mb-4">Propuesta A: <span class="text-slate-300 font-light italic">Minimalismo Editorial</span></h2>
            <p class="text-slate-400 font-light max-w-2xl">Enfoque limpio y equilibrado, ideal para una lectura técnica y profesional con acentos cinéticos sutiles.</p>
        </div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="space-y-40">
                <!-- Item 1: Pax-i3D Smart (A - Studio Gallery) -->
                <div class="flex flex-col lg:flex-row items-center gap-16 equipment-item py-12 relative">
                    <div class="premium-line-guide"></div>
                    <div class="lg:w-7/12 relative group">
                        <div class="studio-gallery-container rounded-[4rem] p-12 relative overflow-hidden premium-reveal">
                            <div class="studio-backdrop-aura"></div>
                            <div class="studio-img-wrap relative z-10">
                                <img src="img/cbct_3d.png" class="w-full h-auto rounded-[3rem] shadow-2xl mx-auto" alt="Pax-i3D Tomografía 3D">
                            </div>
                            <div class="studio-tech-tag uppercase">CERTIFICACIÓN VATECH GLOBAL</div>
                        </div>
                    </div>
                    <div class="lg:w-5/12 equipment-text">
                        <span class="section-label premium-reveal tracking-[0.3em]">EXCELENCIA RADIOLÓGICA</span>
                        <h3 class="text-5xl font-black text-slate-900 mb-6 premium-reveal leading-tight">Pax-i3D <br><span class="text-cyan-600">Smart</span></h3>
                        <p class="text-slate-500 font-light text-lg leading-relaxed mb-8 premium-reveal">
                            Representamos la vanguardia en precisión diagnóstica. El Pax-i3D Smart redefine la seguridad clínica, permitiendo visualizar estructuras con una nitidez absoluta.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-10 premium-reveal">
                            <div class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">MÍNIMA RADIACIÓN</div>
                            <div class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">ALTA DEFINICIÓN</div>
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
                        <h3 class="text-5xl font-black text-slate-900 mb-6 premium-reveal leading-tight">Escaneo <br><span class="text-cyan-600">Digital 3D</span></h3>
                        <p class="text-slate-500 font-light text-lg leading-relaxed mb-8 premium-reveal">
                            Sustituimos las pastas tradicionales por un escaneo láser de ultra precisión que captura cada detalle en tiempo real.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-10 premium-reveal lg:justify-end">
                            <div class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">SIN MOLDES</div>
                            <div class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">COLOR REAL</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-editorial-cta">Agendar este estudio</a>
                        </div>
                    </div>
                    <div class="lg:w-7/12 relative order-1 lg:order-2 group">
                        <div class="studio-gallery-container rounded-[4rem] p-12 relative overflow-hidden premium-reveal">
                            <div class="studio-backdrop-aura"></div>
                            <div class="studio-img-wrap relative z-10">
                                <img src="img/scanner_3d.png" class="w-full h-auto rounded-[3rem] shadow-2xl mx-auto" alt="Escaneo Intraoral">
                            </div>
                            <div class="studio-tech-tag uppercase">PRECISIÓN MICRÓNICA</div>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Radiología HD (A - Studio Gallery) -->
                <div class="flex flex-col lg:flex-row items-center gap-16 equipment-item py-12 relative">
                    <div class="premium-line-guide"></div>
                    <div class="lg:w-7/12 relative group">
                        <div class="studio-gallery-container rounded-[4rem] p-12 relative overflow-hidden premium-reveal">
                            <div class="studio-backdrop-aura"></div>
                            <div class="studio-img-wrap relative z-10">
                                <img src="img/panoramico_hd.png" class="w-full h-auto rounded-[3rem] shadow-2xl mx-auto" alt="Radiología Panorámica">
                            </div>
                            <div class="studio-tech-tag uppercase">SISTEMA HD INTEGRADO</div>
                        </div>
                    </div>
                    <div class="lg:w-5/12 equipment-text">
                        <span class="section-label premium-reveal tracking-[0.3em]">VISIÓN INTEGRAL</span>
                        <h3 class="text-5xl font-black text-slate-900 mb-6 premium-reveal leading-tight">Radiología <br><span class="text-cyan-600">HD Digital</span></h3>
                        <p class="text-slate-500 font-light text-lg leading-relaxed mb-8 premium-reveal">
                            Obtenemos una perspectiva completa de tu anatomía dental en segundos con tecnología HD de baja dosis.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-10 premium-reveal">
                            <div class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">PANORÁMICA HD</div>
                            <div class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-full text-[10px] font-bold tracking-widest text-slate-400 uppercase">BAJA RADIACIÓN</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-editorial-cta">Agendar este estudio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA B: INMERSIÓN CINEMATOGRÁFICA -->
    <section class="py-32 bg-white relative overflow-hidden" style="z-index: 1;">
        <div class="container mx-auto px-6 mb-24">
            <span class="text-cyan-600 font-bold tracking-[0.4em] text-[10px] uppercase mb-4 block">OPCIÓN DE DISEÑO 02</span>
            <h2 class="text-5xl font-black text-slate-900 mb-4">Propuesta B: <span class="text-cyan-600">Inmersión Cinemática</span></h2>
            <p class="text-slate-500 font-light max-w-2xl">Experiencia envolvente de alto impacto. Diseño de vanguardia que posiciona a la clínica como un referente tecnológico absoluto.</p>
        </div>

        <div class="space-y-0">
            <!-- Item 1: Pax-i3D Smart (B - FORZADO IZQUIERDA) -->
            <div class="equipment-item-full equipment-item py-40 relative bg-white border-b border-slate-50">
                <div class="ia-bg-visual" style="left: 0; right: auto; width: 60vw;">
                    <img src="img/cbct_3d.png" class="ia-visual-img" alt="Pax-i3D Precision" style="object-position: left center;">
                    <div class="ia-gradient-mask" style="background: linear-gradient(to left, #fff 0%, #fff 20%, rgba(255,255,255,0.8) 40%, transparent 100%);"></div>
                </div>
                <div class="container mx-auto px-6 relative z-10">
                    <div class="ml-auto max-w-xl text-right">
                        <span class="section-label premium-reveal tracking-[0.3em]">CONVERGENCIA BIO-DIGITAL</span>
                        <h3 class="text-5xl font-extrabold text-slate-900 mb-6 premium-reveal">Pax-i3D <br><span class="text-cyan-600">Smart Precision</span></h3>
                        <p class="text-slate-600 font-light text-xl leading-relaxed mb-10 premium-reveal">
                            La cima de la seguridad diagnóstica. Capturamos volúmenes óseos con una claridad sin precedentes, garantizando cirugías predecibles.
                        </p>
                        <div class="flex gap-4 premium-reveal justify-end mb-8">
                            <div class="px-6 py-3 bg-white/80 backdrop-blur-md border border-slate-200 rounded-full text-[10px] font-bold tracking-widest text-slate-500 uppercase shadow-sm">ULTRA LOW DOSE</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-primary-cinematic inline-flex items-center gap-3">
                                Agendar este estudio
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2: Escaneo Digital 3D (B - DERECHA) -->
            <div class="equipment-item-full equipment-item py-40 relative bg-white border-b border-slate-50">
                <div class="ia-bg-visual" style="right: 0; left: auto; width: 60vw;">
                    <img src="img/scanner_3d.png" class="ia-visual-img" alt="Digital Workflow">
                    <div class="ia-gradient-mask" style="background: linear-gradient(to right, #fff 0%, #fff 20%, rgba(255,255,255,0.8) 40%, transparent 100%);"></div>
                </div>
                <div class="container mx-auto px-6 relative z-10">
                    <div class="max-w-xl">
                        <span class="section-label premium-reveal tracking-[0.3em]">PRECISIÓN MICRÓNICA</span>
                        <h3 class="text-5xl font-extrabold text-slate-900 mb-6 premium-reveal">Escaneo <br><span class="text-cyan-600">Intraoral 3D</span></h3>
                        <p class="text-slate-600 font-light text-xl leading-relaxed mb-10 premium-reveal">
                            Digitalizamos tu sonrisa en segundos con una precisión que permite tratamientos 100% personalizados.
                        </p>
                        <div class="flex gap-4 premium-reveal mb-8">
                            <div class="px-6 py-3 bg-white/80 backdrop-blur-md border border-slate-200 rounded-full text-[10px] font-bold tracking-widest text-slate-500 uppercase shadow-sm">DIGITAL WORKFLOW</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-primary-cinematic inline-flex items-center gap-3">
                                Agendar este estudio
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3: Radiología HD (B - FORZADO IZQUIERDA) -->
            <div class="equipment-item-full equipment-item py-40 relative bg-white border-b border-slate-50">
                <div class="ia-bg-visual" style="left: 0; right: auto; width: 60vw;">
                    <img src="img/panoramico_hd.png" class="ia-visual-img" alt="Radiología Panorámica" style="object-position: left center;">
                    <div class="ia-gradient-mask" style="background: linear-gradient(to left, #fff 0%, #fff 20%, rgba(255,255,255,0.8) 40%, transparent 100%);"></div>
                </div>
                <div class="container mx-auto px-6 relative z-10">
                    <div class="ml-auto max-w-xl text-right">
                        <span class="section-label premium-reveal tracking-[0.3em]">VISIÓN INTEGRAL HD</span>
                        <h3 class="text-5xl font-extrabold text-slate-900 mb-6 premium-reveal">Radiología <br><span class="text-cyan-600">Panorámica</span></h3>
                        <p class="text-slate-600 font-light text-xl leading-relaxed mb-10 premium-reveal">
                            Perspectiva completa en milisegundos. Resolución de alta definición para una evaluación diagnóstica superior.
                        </p>
                        <div class="flex gap-4 premium-reveal justify-end mb-8">
                            <div class="px-6 py-3 bg-white/80 backdrop-blur-md border border-slate-200 rounded-full text-[10px] font-bold tracking-widest text-slate-500 uppercase shadow-sm">HD RESOLUTION</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-primary-cinematic inline-flex items-center gap-3">
                                Agendar este estudio
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4: Inteligencia IA (B - DERECHA) -->
            <div class="equipment-item-full equipment-item py-40 relative bg-white">
                <div class="ia-bg-visual" style="right: 0; left: auto; width: 60vw;">
                    <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?q=80&w=2070" class="ia-visual-img" alt="IA Intelligence">
                    <div class="ia-gradient-mask" style="background: linear-gradient(to right, #fff 0%, #fff 20%, rgba(255,255,255,0.8) 40%, transparent 100%);"></div>
                </div>
                <div class="container mx-auto px-6 relative z-10">
                    <div class="max-w-xl">
                        <span class="section-label premium-reveal tracking-[0.3em]">INTELIGENCIA PREDICTIVA</span>
                        <h3 class="text-5xl font-extrabold text-slate-900 mb-6 premium-reveal">Diagnóstico <br><span class="text-cyan-600">con IA</span></h3>
                        <p class="text-slate-600 font-light text-xl leading-relaxed mb-10 premium-reveal">
                            Analizamos patrones microscópicos invisibles al ojo humano, detectando anomalías antes de que sean visibles.
                        </p>
                        <div class="flex gap-4 premium-reveal mb-8">
                            <div class="px-6 py-3 bg-white/80 backdrop-blur-md border border-slate-200 rounded-full text-[10px] font-bold tracking-widest text-slate-500 uppercase shadow-sm">IA ANALYSIS</div>
                        </div>
                        <div class="premium-reveal">
                            <a href="citas.php" class="btn-primary-cinematic inline-flex items-center gap-3">
                                Agendar este estudio
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: CONFIANZA Y AUTORIDAD (E-E-A-T) -->
    <?php include_once 'includes/trust-section.php'; ?>

    <!-- SECCIÓN 5: El Portal Digital (Con Efecto de Máscara Circular) -->
    <div class="portal-reveal-trigger bg-white">
        <section class="reveal-portal-container py-32 bg-slate-900 overflow-hidden relative">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
            </div>
            <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
                <span class="text-[10px] font-black tracking-[0.5em] text-cyan-400 uppercase mb-8 block">CONTROL TOTAL EN LA NUBE</span>
                <h2 class="text-4xl md:text-6xl font-light text-white mb-12 leading-tight">Tu consultorio merece <br> <span class="font-bold italic">diagnósticos sin fronteras.</span></h2>
                <p class="text-slate-400 max-w-2xl mx-auto mb-16 font-light text-lg">Accede y descarga los estudios de tus pacientes desde cualquier dispositivo con OID Cloud.</p>
                <a href="https://orthoimagendigital.com/OrthoCloud" target="_blank" 
                class="btn-primary" style="padding: 1.5rem 3rem;">
                    <span class="material-symbols-outlined text-2xl">cloud_sync</span>
                    Acceder a mi Portal OID
                </a>
            </div>
        </section>
    </div>

</main>

<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/scripts.php'; ?>

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

            // Animación del Párrafo (Line Reveal / Fade Slide)
            const p = item.querySelector('.equipment-text p');
            const pills = item.querySelectorAll('.equipment-text .flex > div'); // Selecciona los tags específicos de texto
            
            if(p) {
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
            if(activeTab) {
                activeTab.classList.remove('hidden');
                gsap.fromTo(activeTab, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5, ease: "power2.out" });
            }

            // Activar botón (si se pasó uno o si se detecta por el evento)
            const btnToActivate = targetBtn || (event ? event.currentTarget : null);
            if(btnToActivate) {
                btnToActivate.classList.add('active');
                btnToActivate.classList.remove('inactive');
            } else {
                // Si no hay botón (llamada desde jumpToTab), buscarlo por el onclick
                const foundBtn = Array.from(document.querySelectorAll('.tab-btn-luxury'))
                                     .find(b => b.getAttribute('onclick')?.includes(tabId));
                if(foundBtn) {
                    foundBtn.classList.add('active');
                    foundBtn.classList.remove('inactive');
                }
            }
        };

        // 5. Jump to Tab (Desde el Hero)
        window.jumpToTab = (tabId) => {
            const catalog = document.getElementById('catalog-section');
            if(catalog) {
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

<?php include_once 'includes/footer.php'; ?>
</main>

<?php include_once 'includes/scripts.php'; ?>

</body>
</html>
