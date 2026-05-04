<!-- Testimonials Section: Validación Social y Humana -->
<section id="testimonios" class="py-24 bg-slate-50/30 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-[10px] font-black tracking-[0.5em] text-cyan-600 uppercase mb-4 block">EXPERIENCIAS REALES</span>
            <h2 class="text-4xl md:text-5xl font-light text-slate-900">La confianza de quienes <br><span class="italic text-cyan-600 font-normal">ya nos eligieron</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonio 1: Paciente -->
            <div class="bg-white p-10 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,104,118,0.05)] border border-slate-100 flex flex-col h-full hover:translate-y-[-5px] transition-all duration-500">
                <div class="flex gap-1 mb-6">
                    <?php for($i=0; $i<5; $i++): ?>
                        <span class="material-symbols-outlined text-yellow-400 text-lg">star</span>
                    <?php endfor; ?>
                </div>
                <p class="text-slate-600 italic font-light leading-relaxed mb-8 flex-grow">
                    "Me preocupaba mucho la radiación por un tratamiento largo que estoy iniciando. En Ortho Imagen me explicaron lo de Ultra Low Dose y me sentí súper segura. Las instalaciones son impecables."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 font-bold">MG</div>
                    <div>
                        <h4 class="text-slate-900 font-bold text-sm">María G.</h4>
                        <span class="text-slate-400 text-[10px] uppercase tracking-widest">Paciente Verificada</span>
                    </div>
                </div>
            </div>

            <!-- Testimonio 2: Especialista -->
            <div class="bg-white p-10 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,104,118,0.05)] border border-slate-100 flex flex-col h-full hover:translate-y-[-5px] transition-all duration-500">
                <div class="flex gap-1 mb-6">
                    <?php for($i=0; $i<5; $i++): ?>
                        <span class="material-symbols-outlined text-yellow-400 text-lg">star</span>
                    <?php endfor; ?>
                </div>
                <p class="text-slate-600 italic font-light leading-relaxed mb-8 flex-grow">
                    "Como ortodoncista, la precisión es mi herramienta de trabajo. La nitidez de los trazados 3D de OID no tiene comparación. Mis planes de tratamiento son mucho más certeros ahora."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primary-fixed/20 flex items-center justify-center text-primary font-bold">RS</div>
                    <div>
                        <h4 class="text-slate-900 font-bold text-sm">Dr. Ricardo S.</h4>
                        <span class="text-slate-400 text-[10px] uppercase tracking-widest">Especialista Referente</span>
                    </div>
                </div>
            </div>

            <!-- Testimonio 3: Tecnología/Rapidez -->
            <div class="bg-white p-10 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,104,118,0.05)] border border-slate-100 flex flex-col h-full hover:translate-y-[-5px] transition-all duration-500">
                <div class="flex gap-1 mb-6">
                    <?php for($i=0; $i<5; $i++): ?>
                        <span class="material-symbols-outlined text-yellow-400 text-lg">star</span>
                    <?php endfor; ?>
                </div>
                <p class="text-slate-600 italic font-light leading-relaxed mb-8 flex-grow">
                    "Increíble que mi dentista recibió los resultados por OrthoCloud antes de que yo saliera de la clínica. Me ahorré vueltas y tiempo valioso. 100% recomendados."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-secondary-fixed/20 flex items-center justify-center text-secondary font-bold">JL</div>
                    <div>
                        <h4 class="text-slate-900 font-bold text-sm">Javier L.</h4>
                        <span class="text-slate-400 text-[10px] uppercase tracking-widest">Paciente Verificado</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
