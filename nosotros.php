<?php 
$page_title = "Nosotros | Ortho Imagen Digital - 20 Años de Certeza Clínica";
$page_description = "Conoce la historia de Ortho Imagen Digital, líderes en radiología dental en CDMX. Más de 20 años brindando diagnósticos precisos con tecnología de ultra baja radiación.";
include_once 'includes/head.php'; 
?>

<!-- Schema.org para Nosotros -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Ortho Imagen Digital",
  "alternateName": "OID Radiología Dental",
  "description": "Centro líder en radiología maxilofacial y diagnóstico digital en CDMX con tecnología de ultra baja radiación.",
  "url": "https://orthoimagendigital.com/nosotros",
  "logo": "https://orthoimagendigital.com/img/logo.png",
  "foundingDate": "2004",
  "medicalSpecialty": [
    "Dentistry",
    "Radiology"
  ],
  "knowsAbout": [
    "Radiología Dental HD",
    "Tomografía CBCT 3D",
    "Diagnóstico Maxilofacial",
    "Cefalometría Digital"
  ],
  "areaServed": {
    "@type": "City",
    "name": "Ciudad de México"
  },
  "memberOf": {
    "@type": "Organization",
    "name": "Cruz Roja Mexicana"
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ciudad de México",
    "addressCountry": "MX"
  }
}
</script>

<!-- 1. Fondo Dinámico (Auras) -->
<?php include_once 'includes/background-blobs.php'; ?>

<!-- 2. Navegación -->
<?php include_once 'includes/header.php'; ?>

<main class="relative">
    
    <section id="hero-nosotros" class="relative w-full h-[90vh] flex items-center justify-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 opacity-40 hero-parallax">
            <img src="img/nosotros_hero_team.png" alt="Equipo de especialistas Ortho Imagen Digital" class="w-full h-full object-cover scale-[1.8] origin-center">
        </div>
        <div class="hero-overlay !bg-gradient-to-b !from-slate-900/40 !to-slate-900/80"></div>
        
        <div class="hero-text-overlay">
            <span class="hero-badge">NUESTRA HISTORIA</span>
            <h1 class="hero-title">Dos Décadas Creando<br><span>Certeza Clínica</span></h1>
            <p class="text-base md:text-lg text-cyan-50/70 max-w-xl mx-auto mb-8 leading-relaxed mt-6">+20 años · 15 sucursales · Aliados de Cruz Roja Mexicana · +100,000 diagnósticos validados</p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center mt-8">
                <a href="index.php#sucursales" class="btn-primary">CONOCER SUCURSALES</a>
                <a href="estudios.php" class="btn-glass">VER ESTUDIOS</a>
            </div>
        </div>
    </section>

    <!-- 4. El Manifiesto (Copywriting de Élite) -->
    <section class="relative py-32 max-w-5xl mx-auto px-6 text-center overflow-visible">
        <!-- Elementos flotantes de cristal (Píldoras de Confianza) -->
        <div class="glass-floating top-20 -left-12 hidden lg:block" id="float-1">
            <div class="float-icon text-cyan-600"><span class="material-symbols-outlined">groups</span></div>
            <span class="label">TALENTO HUMANO</span>
            <span class="value">Profesionales Calificados</span>
        </div>
        <div class="glass-floating top-40 -right-12 hidden lg:block" id="float-2">
            <div class="float-icon text-blue-600"><span class="material-symbols-outlined">cloud_done</span></div>
            <span class="label">AGILIDAD DIGITAL</span>
            <span class="value">Resultados en 24h</span>
        </div>
        <div class="glass-floating bottom-20 -left-8 hidden lg:block" id="float-3">
            <div class="float-icon text-indigo-600"><span class="material-symbols-outlined">bolt</span></div>
            <span class="label">TECNOLOGÍA</span>
            <span class="value">Ultra Low Dose™</span>
        </div>
        <div class="glass-floating bottom-10 -right-16 hidden lg:block" id="float-4">
            <div class="float-icon text-slate-600"><span class="material-symbols-outlined">target</span></div>
            <span class="label">PRECISIÓN</span>
            <span class="value">Diagnóstico Digital</span>
        </div>

        <span class="section-subtitle">LO QUE NOS MUEVE</span>
        <h2 class="text-4xl md:text-5xl font-light text-slate-900 mb-12 leading-tight">
            <span class="text-reveal-line"><span class="text-reveal-content">Tu tranquilidad comienza con</span></span>
            <span class="text-reveal-line"><span class="text-reveal-content"><span class="text-cyan-600 font-normal italic">un diagnóstico que no deja dudas.</span></span></span>
        </h2>
        <div class="space-y-8 text-lg text-slate-500 font-light leading-relaxed max-w-3xl mx-auto">
            <p class="text-reveal-line">
                <span class="text-reveal-content">Sabemos lo que se siente: la incertidumbre de un estudio que no alcanzó a ver lo suficiente, la espera de resultados que llegan tarde, la radiación que preocupa. Por eso fundamos <span class="font-semibold text-slate-900">Ortho Imagen Digital</span>.</span>
            </p>
            <p class="text-reveal-line">
                <span class="text-reveal-content">Desde 2004, hemos realizado más de 100,000 diagnósticos con tecnología de ultra baja radiación. Cada imagen pasa por la validación de radiólogos maxilofaciales certificados. Y cada resultado llega a tu doctor en formato digital, en cuestión de horas — no días.</span>
            </p>
            <p class="text-reveal-line">
                <span class="text-reveal-content">Porque detrás de cada estudio hay una persona que merece respuestas claras, rápidas y seguras.</span>
            </p>
        </div>
    </section>

    <!-- 4.5 Trust Layer: Alianzas y Credibilidad -->
    <section class="py-10 bg-slate-50/30">
        <?php include 'includes/trust-bar.php'; ?>
        
        <div class="max-w-7xl mx-auto px-6 mt-20">
            <!-- Testimonio de Doctor -->
            <div class="max-w-3xl mx-auto">
                <div class="relative p-8 md:p-12 bg-white rounded-3xl border border-slate-100 shadow-sm">
                    <span class="absolute -top-4 left-8 text-6xl text-cyan-200 font-serif leading-none">"</span>
                    <blockquote class="text-lg md:text-xl text-slate-700 italic leading-relaxed mb-6">
                        Confío en OID porque sé que cada tomografía que solicito cumple con los más altos estándares de resolución y seguridad. Mis pacientes merecen esa certeza, y OID la entrega consistentemente desde hace años.
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-200 overflow-hidden">
                            <img src="img/expert_avatar.png" alt="Dr. Arturo Estrada" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="block text-sm font-bold text-slate-900">Dr. Arturo Estrada</span>
                            <span class="block text-[10px] text-primary uppercase tracking-widest">Cirujano Maxilofacial · Director Médico OID</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Nuestros Compromisos -->
    <section class="py-32 bg-slate-50/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="section-subtitle">NUESTROS COMPROMISOS</span>
                <h2 class="text-3xl md:text-4xl font-light text-slate-900 mt-4">Cuatro pilares que guían <span class="text-primary font-bold">cada diagnóstico</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="clinical-card service-reveal trust-card-interactive">
                    <div class="clinical-icon bg-cyan-500/10 text-cyan-600">
                        <span class="material-symbols-outlined text-3xl">target</span>
                    </div>
                    <span class="branch-label">MISIÓN</span>
                    <h3 class="text-xl font-light mb-4">Diagnóstico Sin Margen de Error</h3>
                    <p>Cada estudio es validado por radiólogos maxilofaciales certificados. Tu doctor recibe certeza, no suposiciones.</p>
                </div>

                <div class="clinical-card service-reveal trust-card-interactive">
                    <div class="clinical-icon bg-blue-500/10 text-blue-600">
                        <span class="material-symbols-outlined text-3xl">cloud_sync</span>
                    </div>
                    <span class="branch-label">VISIÓN</span>
                    <h3 class="text-xl font-light mb-4">Digital de Origen</h3>
                    <p>Resultados en OrthoCloud en horas, no días. Tu odontólogo accede desde cualquier dispositivo, sin CD's ni intermediarios.</p>
                </div>

                <div class="clinical-card service-reveal trust-card-interactive">
                    <div class="clinical-icon bg-indigo-500/10 text-indigo-600">
                        <span class="material-symbols-outlined text-3xl">health_and_safety</span>
                    </div>
                    <span class="branch-label">SEGURIDAD</span>
                    <h3 class="text-xl font-light mb-4">90% Menos Radiación</h3>
                    <p>Protocolos Ultra Low Dose™ que reducen drásticamente la exposición. La misma precisión, con la máxima protección para ti.</p>
                </div>

                <div class="clinical-card service-reveal trust-card-interactive">
                    <div class="clinical-icon bg-slate-500/10 text-slate-600">
                        <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                    </div>
                    <span class="branch-label">FILOSOFÍA</span>
                    <h3 class="text-xl font-light mb-4">Primero, la Persona</h3>
                    <p>15 sucursales diseñadas para tu comodidad. Atención cálida, profesional y sin prisas porque tu bienestar no es negociable.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. Banner de Cifras de Impacto -->
    <section class="py-24 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
                <div class="stat-item">
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2">+<span class="counter" data-target="20">0</span></h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Años de Historia</p>
                    <span class="text-[9px] text-slate-300 mt-1 block">Desde 2004</span>
                </div>
                <div class="stat-item">
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2">+<span class="counter" data-target="15">0</span></h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Sucursales</p>
                    <span class="text-[9px] text-slate-300 mt-1 block">CDMX y Área Metropolitana</span>
                </div>
                <div class="stat-item">
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2"><span class="counter" data-target="100">0</span>k+</h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Diagnósticos Validados</p>
                    <span class="text-[9px] text-slate-300 mt-1 block">Por radiólogos maxilofaciales</span>
                </div>
                <div class="stat-item">
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2">24/7</h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Acceso Digital</p>
                    <span class="text-[9px] text-slate-300 mt-1 block">OrthoCloud Ecosystem</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CTA Final (Nebulosa Clínica Inmersiva) -->
    <section class="relative py-40 overflow-hidden bg-slate-900">
        <!-- Fondo de Imagen con Parallax -->
        <div class="absolute inset-0 opacity-40 cta-bg-parallax">
            <img src="img/nosotros_cta_lab.png" alt="Tecnología OID" class="w-full h-full object-cover">
        </div>
        
        <!-- Gradientes de profundidad -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-slate-900"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-transparent to-slate-900/80"></div>

        <div class="scanner-line !bg-cyan-400/30" id="cta-scanner"></div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <span class="hero-badge !bg-cyan-500/20 !text-cyan-300 border-cyan-500/30 mb-8">EL FUTURO DEL DIAGNÓSTICO</span>
            <h2 class="text-3xl md:text-5xl font-light text-white leading-tight">
                Lleva la precisión de OID a <br>
                <span class="text-cyan-400 font-bold drop-shadow-[0_0_20px_rgba(34,211,238,0.5)]">tu práctica clínica</span>
            </h2>
            <p class="text-slate-300 mt-8 text-lg font-light max-w-2xl mx-auto leading-relaxed">
                Únete a los miles de especialistas que ya han transformado sus consultas con diagnósticos de ultra-alta resolución y seguridad total para sus pacientes.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center mt-12">
                <a href="index.php#sucursales" class="btn-primary !py-5 !px-10 btn-magnetic">AGENDAR MI CITA</a>
                <a href="index.php#servicios" class="btn-glass !text-primary !border-white/20 hover:!bg-white/10 btn-magnetic">VER ESTUDIOS</a>
            </div>
        </div>
    </section>

    <!-- 8. Footer -->
    <?php include_once 'includes/footer.php'; ?>
</main>

<!-- 9. Scripts Finales -->
<?php include_once 'includes/scripts.php'; ?>

<!-- Script para animaciones de la página Nosotros -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Revelar header inmediatamente en esta página
        gsap.to("#main-header", { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" });

        // 2. Efecto Parallax en el Hero (Máximo Impacto Seguro)
        gsap.fromTo(".hero-parallax img", 
            { yPercent: -25 }, // Inicio seguro con scale 1.8
            {
                yPercent: 25, // Fin seguro con scale 1.8
                scrollTrigger: {
                    trigger: "body",
                    start: "top top",
                    end: "bottom top",
                    scrub: 0.3,
                },
                ease: "none"
            }
        );
        
        // Efecto extra: Zoom sutil al scroll
        gsap.to(".hero-parallax img", {
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "50% top",
                scrub: 0.3
            },
            scale: 1.1,
            ease: "none"
        });

        // 3. Animación de las tarjetas de compromiso (Service Reveal)
        gsap.to(".service-reveal", {
            scrollTrigger: {
                trigger: ".clinical-card",
                start: "top 85%"
            },
            opacity: 1,
            y: 0,
            stagger: 0.2,
            duration: 1,
            ease: "power3.out"
        });

        // 4. Animación de Contadores
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            gsap.to(counter, {
                scrollTrigger: {
                    trigger: counter,
                    start: "top 90%"
                },
                innerText: target,
                duration: 2,
                snap: { innerText: 1 },
                ease: "power2.out"
            });
        });

        // 5. Animación de Texto de Revelación
        gsap.to(".text-reveal-content", {
            scrollTrigger: {
                trigger: ".text-reveal-line",
                start: "top 85%"
            },
            y: 0,
            opacity: 1,
            stagger: 0.1,
            duration: 1.2,
            ease: "power4.out"
        });

        // 6. Elementos flotantes Parallax sutil
        gsap.to("#float-1", {
            y: -120,
            rotation: 5,
            scrollTrigger: {
                trigger: "body",
                scrub: 1
            }
        });
        gsap.to("#float-2", {
            y: 100,
            rotation: -8,
            scrollTrigger: {
                trigger: "body",
                scrub: 1.5
            }
        });
        gsap.to("#float-3", {
            y: -80,
            rotation: -5,
            scrollTrigger: {
                trigger: "body",
                scrub: 0.8
            }
        });
        gsap.to("#float-4", {
            y: 150,
            rotation: 12,
            scrollTrigger: {
                trigger: "body",
                scrub: 2
            }
        });

        // 7. Efecto Glow interactivo en Clinical Cards
        const cards = document.querySelectorAll('.clinical-card');
        cards.forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--x', `${x}px`);
                card.style.setProperty('--y', `${y}px`);
            });
        });

        // 8. Lógica de Botones Magnéticos
        const magnets = document.querySelectorAll('.btn-magnetic');
        magnets.forEach((btn) => {
            btn.addEventListener('mousemove', function(e) {
                const size = this.getBoundingClientRect();
                const x = e.clientX - size.left - size.width / 2;
                const y = e.clientY - size.top - size.height / 2;
                gsap.to(this, {
                    x: x * 0.3,
                    y: y * 0.3,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
            btn.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    x: 0,
                    y: 0,
                    duration: 0.5,
                    ease: "elastic.out(1, 0.3)"
                });
            });
        });

        // 9. Animación Infinita de Línea de Escaneo en CTA
        gsap.to("#cta-scanner", {
            top: "100%",
            duration: 4,
            repeat: -1,
            ease: "none"
        });

        // 10. Parallax en CTA Final
        gsap.to(".cta-bg-parallax img", {
            yPercent: 15,
            ease: "none",
            scrollTrigger: {
                trigger: ".cta-bg-parallax",
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });
    });
</script>
