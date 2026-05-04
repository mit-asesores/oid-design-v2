<?php
include_once 'includes/head.php';
?>

<main class="bg-white min-h-screen body.not-home">
    <?php include_once 'includes/header.php'; ?>

    <!-- 1. Hero Inmersivo V2 -->
    <section class="cta-clinical-atmosphere !py-48">
        <div class="mesh-blob mesh-1"></div>
        <div class="mesh-blob mesh-2"></div>
        <div class="scanner-line" id="hero-scanner"></div>
        
        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            <span class="branch-label mb-6 block">INFRAESTRUCTURA DE VANGUARDIA</span>
            <h1 class="text-5xl md:text-7xl font-light text-slate-800 leading-tight">
                Pureza Digital y <br>
                <span class="holographic-text font-bold">Conectividad Instantánea.</span>
            </h1>
            <p class="mt-8 text-lg text-slate-500 font-light max-w-2xl mx-auto">
                No solo entregamos imágenes; proporcionamos la base de datos perfecta para diagnósticos asistidos y planificación 3D.
            </p>
        </div>
    </section>

    <!-- 2. Pilares de Innovación con Hover de Detalles -->
    <section class="py-24 bg-slate-50/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="clinical-card group p-10 bg-white rounded-[3rem] border border-slate-100 shadow-sm hover:shadow-2xl transition-all relative overflow-hidden">
                    <span class="text-cyan-600 font-bold text-sm block mb-4">01 / CALIDAD</span>
                    <h3 class="text-2xl font-light mb-4">HD Purity</h3>
                    <p class="text-slate-500 text-sm font-light mb-8">Nuestros sensores capturan cada detalle con una pureza digital superior.</p>
                    
                    <!-- Datos Técnicos Revelados -->
                    <div class="pt-6 border-t border-slate-100 flex gap-4 text-[10px] font-bold text-cyan-600">
                        <span>RESI: 0.1MM</span>
                        <span>FORMAT: DICOM</span>
                    </div>
                </div>

                <div class="clinical-card group p-10 bg-white rounded-[3rem] border border-slate-100 shadow-sm hover:shadow-2xl transition-all relative overflow-hidden">
                    <span class="text-cyan-600 font-bold text-sm block mb-4">02 / VELOCIDAD</span>
                    <h3 class="text-2xl font-light mb-4">Instant Sync</h3>
                    <p class="text-slate-500 text-sm font-light mb-8">El estudio está en tu portal antes de que el paciente salga de la clínica.</p>
                    
                    <div class="pt-6 border-t border-slate-100 flex gap-4 text-[10px] font-bold text-cyan-600">
                        <span>SYNC: < 15 MIN</span>
                        <span>CLOUD READY</span>
                    </div>
                </div>

                <div class="clinical-card group p-10 bg-white rounded-[3rem] border border-slate-100 shadow-sm hover:shadow-2xl transition-all relative overflow-hidden">
                    <span class="text-cyan-600 font-bold text-sm block mb-4">03 / FUTURO</span>
                    <h3 class="text-2xl font-light mb-4">AI Ready</h3>
                    <p class="text-slate-500 text-sm font-light mb-8">Arquitectura preparada para la próxima era de diagnóstico asistido.</p>
                    
                    <div class="pt-6 border-t border-slate-100 flex gap-4 text-[10px] font-bold text-cyan-600">
                        <span>AUTO-TRACE</span>
                        <span>VOLUMETRIC</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Seguridad Radiológica Inmersiva (Estilo 2026) -->
    <section class="py-32 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-slate-900 rounded-[4rem] p-16 lg:p-24 relative">
                <div class="mesh-blob mesh-1 opacity-20 scale-150"></div>
                <div class="relative z-10 flex flex-col lg:flex-row items-center gap-16">
                    <div class="lg:w-1/2">
                        <span class="text-cyan-400 font-bold text-xs tracking-[0.4em] block mb-8">PROTOCOLO GREEN</span>
                        <h2 class="text-4xl md:text-5xl font-light text-white leading-tight mb-8">Protección inteligente <br> <span class="italic text-cyan-400">para cada paciente.</span></h2>
                        <p class="text-slate-400 font-light text-lg mb-10 leading-relaxed">
                            Reducimos la exposición a la radiación en un 80% mediante tecnología de pulsos de ultra-alta velocidad. Seguridad clínica sin compromiso.
                        </p>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 rounded-full border border-cyan-500/30 flex items-center justify-center text-cyan-400">
                                <span class="material-symbols-outlined">health_and_safety</span>
                            </div>
                            <span class="text-sm font-bold text-white tracking-widest uppercase">Certificado de Baja Emisión</span>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="relative p-1 bg-gradient-to-br from-cyan-500/20 to-transparent rounded-[3rem]">
                            <img src="https://images.unsplash.com/photo-1579154235884-3889bc0aa43b?q=80&w=2070&auto=format&fit=crop" 
                                 class="rounded-[3rem] grayscale opacity-60" alt="Seguridad">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Portal Digital V2 (Diseño CTA) -->
    <section class="cta-clinical-atmosphere !py-32">
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <span class="branch-label mb-8 block">CONEXIÓN TOTAL</span>
            <h2 class="text-4xl font-light text-slate-800 mb-12 italic">Tu clínica, expandida en la nube.</h2>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#" class="btn-primary btn-magnetic">ACCESO DOCTORES</a>
                <a href="#" class="btn-glass btn-magnetic">VER PROTOCOLOS</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>
</main>

<?php include_once 'includes/scripts.php'; ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.to("#main-header", { opacity: 1, y: 0, duration: 0.6 });
        
        gsap.to("#hero-scanner", {
            top: "100%",
            duration: 5,
            repeat: -1,
            ease: "none"
        });

        // Botones Magnéticos
        const magnets = document.querySelectorAll('.btn-magnetic');
        magnets.forEach((btn) => {
            btn.addEventListener('mousemove', function(e) {
                const size = this.getBoundingClientRect();
                const x = e.clientX - size.left - size.width / 2;
                const y = e.clientY - size.top - size.height / 2;
                gsap.to(this, { x: x * 0.3, y: y * 0.3, duration: 0.3, ease: "power2.out" });
            });
            btn.addEventListener('mouseleave', function() {
                gsap.to(this, { x: 0, y: 0, duration: 0.5, ease: "elastic.out(1, 0.3)" });
            });
        });
    });
</script>
