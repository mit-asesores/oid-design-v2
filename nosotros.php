<?php include_once 'includes/head.php'; ?>

<!-- 1. Fondo Dinámico (Auras) -->
<?php include_once 'includes/background-blobs.php'; ?>

<!-- 2. Navegación -->
<?php include_once 'includes/header.php'; ?>

<main class="relative">
    
    <section id="hero-nosotros" class="relative w-full h-[90vh] flex items-center justify-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 opacity-40 hero-parallax">
            <img src="img/human_experience.png" alt="Ortho Imagen Digital Equipo" class="w-full h-full object-cover scale-[1.8] origin-center">
        </div>
        <div class="hero-overlay !bg-gradient-to-b !from-slate-900/40 !to-slate-900/80"></div>
        
        <div class="hero-text-overlay">
            <span class="hero-badge">NUESTRA HISTORIA</span>
            <h1 class="hero-title">El Arte de la <br><span>Precisión Humana</span></h1>
        </div>
    </section>

    <!-- 4. El Manifiesto (Copywriting de Élite) -->
    <section class="relative py-32 max-w-5xl mx-auto px-6 text-center overflow-visible">
        <!-- Elementos flotantes de cristal (Píldoras de Confianza) -->
        <div class="glass-floating top-20 -left-12 hidden lg:block" id="float-1">
            <div class="float-icon">✓</div>
            <span class="label">TALENTO HUMANO</span>
            <span class="value">Profesionales Calificados</span>
        </div>
        <div class="glass-floating top-40 -right-12 hidden lg:block" id="float-2">
            <div class="float-icon">✓</div>
            <span class="label">INNOVACIÓN</span>
            <span class="value">Tecnología de Vanguardia</span>
        </div>
        <div class="glass-floating bottom-20 -left-8 hidden lg:block" id="float-3">
            <div class="float-icon">✓</div>
            <span class="label">AGILIDAD</span>
            <span class="value">Resultados Rápidos</span>
        </div>
        <div class="glass-floating bottom-10 -right-16 hidden lg:block" id="float-4">
            <div class="float-icon">✓</div>
            <span class="label">PRECISIÓN</span>
            <span class="value">Diagnóstico Digital</span>
        </div>

        <span class="section-subtitle">LO QUE NOS MUEVE</span>
        <h2 class="text-4xl md:text-5xl font-light text-slate-900 mb-12 leading-tight">
            <span class="text-reveal-line"><span class="text-reveal-content">No solo capturamos imágenes;</span></span>
            <span class="text-reveal-line"><span class="text-reveal-content"><span class="text-cyan-600 font-normal italic">revelamos certezas.</span></span></span>
        </h2>
        <div class="space-y-8 text-lg text-slate-500 font-light leading-relaxed max-w-3xl mx-auto">
            <p class="text-reveal-line">
                <span class="text-reveal-content">Ortho Imagen Digital nació de una necesidad fundamental: la de proporcionar a odontólogos y pacientes la claridad necesaria para tomar decisiones de salud con absoluta confianza.</span>
            </p>
            <p class="text-reveal-line">
                <span class="text-reveal-content">A lo largo de dos décadas, hemos evolucionado de un centro de radiología tradicional a una infraestructura digital de vanguardia. Pero nuestra esencia sigue siendo la misma: entender que detrás de cada estudio hay una persona buscando tranquilidad.</span>
            </p>
        </div>
    </section>

    <!-- 5. Nuestros Compromisos (Misión y Visión Evolucionada) -->
    <section class="py-32 bg-slate-50/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Compromiso 1: Misión -->
                <div class="clinical-card service-reveal">
                    <div class="clinical-icon bg-cyan-500/10 text-cyan-600">
                        <span class="material-symbols-outlined text-3xl">verified</span>
                    </div>
                    <span class="branch-label">MISIÓN</span>
                    <h3 class="text-xl font-light mb-4">Certeza para tu Salud</h3>
                    <p>Diseñamos cada estudio para que tú y tu doctor tengan la respuesta exacta, eliminando dudas y asegurando el mejor camino para tu sonrisa.</p>
                </div>

                <!-- Compromiso 2: Visión -->
                <div class="clinical-card service-reveal">
                    <div class="clinical-icon bg-blue-500/10 text-blue-600">
                        <span class="material-symbols-outlined text-3xl">visibility</span>
                    </div>
                    <span class="branch-label">VISIÓN</span>
                    <h3 class="text-xl font-light mb-4">Tecnología que te cuida</h3>
                    <p>Lideramos la innovación digital para que tus diagnósticos sean más rápidos, precisos y accesibles desde cualquier lugar del mundo.</p>
                </div>

                <!-- Compromiso 3: Valores (Salud) -->
                <div class="clinical-card service-reveal">
                    <div class="clinical-icon bg-indigo-500/10 text-indigo-600">
                        <span class="material-symbols-outlined text-3xl">health_and_safety</span>
                    </div>
                    <span class="branch-label">SEGURIDAD</span>
                    <h3 class="text-xl font-light mb-4">Cuidado Absoluto</h3>
                    <p>Tu bienestar es lo primero. Utilizamos protocolos de mínima radiación para protegerte sin sacrificar ni un milímetro de precisión.</p>
                </div>

                <!-- Compromiso 4: Valores (Empatía) -->
                <div class="clinical-card service-reveal">
                    <div class="clinical-icon bg-slate-500/10 text-slate-600">
                        <span class="material-symbols-outlined text-3xl">groups</span>
                    </div>
                    <span class="branch-label">FILOSOFÍA</span>
                    <h3 class="text-xl font-light mb-4">Empatía Real</h3>
                    <p>Entendemos el valor de tu tranquilidad. Por eso, cada paciente es tratado con la calidez y el respeto humano que nos define.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. Banner de Cifras de Impacto -->
    <section class="py-24 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
                <div>
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2">+<span class="counter" data-target="20">0</span></h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Años de Historia</p>
                </div>
                <div>
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2">+<span class="counter" data-target="15">0</span></h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Sucursales</p>
                </div>
                <div>
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2"><span class="counter" data-target="100">0</span>k</h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Diagnósticos</p>
                </div>
                <div>
                    <h4 class="text-5xl font-thin text-cyan-600 mb-2">24/7</h4>
                    <p class="text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase">Acceso en Nube</p>
                </div>
            </div>
            <p class="text-center text-slate-400 text-xs mt-12 font-light italic">"Confianza respaldada por miles de diagnósticos precisos cada año"</p>
        </div>
    </section>

    <!-- 7. CTA Final (Nebulosa Clínica) -->
    <section class="cta-clinical-atmosphere">
        <div class="mesh-blob mesh-1"></div>
        <div class="mesh-blob mesh-2"></div>
        <div class="scanner-line" id="cta-scanner"></div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-light text-slate-800 leading-tight">
                Únete a la nueva era del <br>
                <span class="holographic-text font-bold">diagnóstico dental</span>
            </h2>
            <div class="flex flex-col sm:flex-row gap-6 justify-center mt-12">
                <a href="#" class="btn-primary btn-magnetic">AGENDAR MI CITA</a>
                <a href="index.php" class="btn-glass btn-magnetic">VER SERVICIOS</a>
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
    });
</script>
