<?php
include_once 'includes/head.php';
?>

<main class="bg-white min-h-screen body.not-home">
    <?php include_once 'includes/header.php'; ?>

    <!-- 1. Hero Cinematográfico V1 -->
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=2070&auto=format&fit=crop" 
                 class="w-full h-full object-cover opacity-40 grayscale" alt="Tecnología Dental">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white"></div>
        </div>
        
        <div class="relative z-10 text-center px-6 mt-20">
            <span class="branch-label mb-4 inline-block">CATÁLOGO DE ESTUDIOS</span>
            <h1 class="text-4xl md:text-6xl font-light text-slate-800 leading-tight">
                Precisión que guía <br>
                <span class="font-bold text-cyan-600 text-reveal-line"><span class="text-reveal-content">tus tratamientos.</span></span>
            </h1>
        </div>
    </section>

    <!-- 2. Selector de Modalidad (Navegación Rápida) -->
    <nav class="sticky top-24 z-40 bg-white/80 backdrop-blur-md border-b border-slate-100 py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-center gap-8 md:gap-16">
            <a href="#cat-3d" class="nav-tab active text-[10px] font-bold tracking-widest text-cyan-600 uppercase border-b-2 border-cyan-600 pb-2">3D / Tomografía</a>
            <a href="#cat-2d" class="nav-tab text-[10px] font-bold tracking-widest text-slate-400 uppercase pb-2">2D / Radiografía</a>
            <a href="#cat-spec" class="nav-tab text-[10px] font-bold tracking-widest text-slate-400 uppercase pb-2">Especializados</a>
        </div>
    </nav>

    <!-- 3. Contenedor de Estudios -->
    <section class="py-24 max-w-7xl mx-auto px-6">
        
        <!-- Grupo 1: 3D / Tomografía -->
        <div id="cat-3d" class="mb-24">
            <div class="flex items-center gap-4 mb-12">
                <span class="w-12 h-[1px] bg-cyan-200"></span>
                <h2 class="text-2xl font-light text-slate-800 uppercase tracking-widest">Tomografía Computarizada (CBCT)</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Estudio 1 con Hover Técnico -->
                <div class="clinical-card group p-0 bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <div class="relative h-48 overflow-hidden bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="Arcada">
                        <!-- Overlay Técnico -->
                        <div class="absolute inset-0 bg-cyan-900/90 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-center p-6 text-white">
                            <span class="text-[9px] font-bold tracking-widest mb-4">SPECIFICATIONS</span>
                            <div class="text-[10px] space-y-2">
                                <div class="flex justify-between"><span>DOSIS</span><span class="font-bold">MÍNIMA</span></div>
                                <div class="flex justify-between"><span>FORMATO</span><span class="font-bold">DICOM / STL</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-light text-slate-900 mb-2">Arcada Completa</h3>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Ideal para planificación de implantes.</p>
                    </div>
                </div>

                <!-- Estudio 2 -->
                <div class="clinical-card group p-0 bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <div class="relative h-48 overflow-hidden bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="ATM">
                        <div class="absolute inset-0 bg-cyan-900/90 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-center p-6 text-white">
                            <span class="text-[9px] font-bold tracking-widest mb-4">SPECIFICATIONS</span>
                            <div class="text-[10px] space-y-2">
                                <div class="flex justify-between"><span>VISTAS</span><span class="font-bold">2 (Abierta/Cerrada)</span></div>
                                <div class="flex justify-between"><span>MÉTODO</span><span class="font-bold">Dinámico</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-light text-slate-900 mb-2">ATM Bilateral</h3>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Estudio articular de alta precisión.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Seguridad Radiológica V1 (Estilo Limpio) -->
        <div class="my-32 p-12 bg-slate-50 rounded-[2.5rem] border border-slate-100 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <span class="text-cyan-600 font-bold text-xs tracking-widest block mb-4">SEGURIDAD AL PACIENTE</span>
                <h2 class="text-3xl font-light text-slate-800 mb-6">Protocolo de Baja Dosis</h2>
                <p class="text-slate-500 font-light leading-relaxed">Nuestra tecnología nos permite obtener imágenes nítidas con una exposición mínima, priorizando siempre la salud de nuestros pacientes.</p>
            </div>
            <div class="md:w-1/2 grid grid-cols-2 gap-4">
                <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100 text-center">
                    <h4 class="text-3xl font-thin text-cyan-600">-80%</h4>
                    <p class="text-[9px] font-bold text-slate-400 uppercase">Exposición</p>
                </div>
                <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100 text-center">
                    <h4 class="text-3xl font-thin text-cyan-600">Green</h4>
                    <p class="text-[9px] font-bold text-slate-400 uppercase">Certified</p>
                </div>
            </div>
        </div>

        <!-- 5. Portal Digital V1 -->
        <div class="text-center py-12 border-t border-slate-100">
            <h3 class="text-2xl font-light text-slate-800 mb-8">¿Eres Odontólogo? Accede a tus resultados.</h3>
            <a href="#" class="btn-primary">ACCEDER AL PORTAL CLOUD</a>
        </div>

    </section>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>
</main>

<?php include_once 'includes/scripts.php'; ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.to("#main-header", { opacity: 1, y: 0, duration: 0.6 });
        
        gsap.from(".clinical-card", {
            opacity: 0,
            y: 30,
            stagger: 0.1,
            duration: 0.8,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".clinical-card",
                start: "top 90%"
            }
        });
    });
</script>
