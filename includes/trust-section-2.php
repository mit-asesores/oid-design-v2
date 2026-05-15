<section class="relative py-32 overflow-hidden bg-slate-50/50" id="autoridad">
    <!-- Ancla Visual 3D (Holograma) con Contenedor para Animación de Capas -->
    <div class="visual-anchor-container">
        <img src="img/holographic_molar.png" class="visual-anchor" alt="Tecnología Dental 3D">
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            <!-- Texto de Marketing (Con clases para animación GSAP) -->
            <div class="trust-reveal-left">
                <span class="section-subtitle uppercase tracking-widest text-xs font-bold text-cyan-600 mb-4 block">EL
                    ESTÁNDAR DE EXCELENCIA</span>
                <h2 class="section-title mb-8 leading-tight text-4xl md:text-5xl font-light text-slate-900">La
                    Ingeniería de la <br /><span class="text-primary font-bold">Certeza Clínica</span></h2>
                <p class="text-slate-600 font-light text-lg leading-relaxed mb-8">
                    En <span class="font-semibold text-slate-900">Ortho Imagen Digital</span>, la precisión no es
                    negociable. Fusionamos tecnología 3D de vanguardia con un criterio humano experto para entregar
                    diagnósticos infalibles que eliminan cualquier margen de error en tu tratamiento.
                </p>

                <!-- Cita de Autoridad Dinámica (Carrusel de 4 Testimoniales) -->
                <div class="mb-12 p-8 bg-white rounded-2xl border-l-4 border-primary shadow-xl border border-slate-100 relative overflow-hidden min-h-[280px] flex flex-col justify-center">
                    <!-- Icono de Comillas Decorativo -->
                    <div class="absolute top-4 right-6 opacity-5 text-primary">
                        <span class="material-symbols-outlined text-6xl">format_quote</span>
                    </div>

                    <div id="trust-carousel-v2" class="relative z-10">
                        <p id="trust-text-v2" class="text-slate-700 italic mb-6 text-lg leading-relaxed transition-all duration-500">
                            "La tecnología solo es valiosa cuando está al servicio de la salud humana. En OID, garantizamos que cada milímetro de imagen digital salve tiempo y mejore el pronóstico de nuestros pacientes."
                        </p>
                        
                        <div class="flex items-center gap-4 transition-all duration-500" id="trust-author-box-v2">
                            <div class="w-12 h-12 rounded-full bg-slate-100 overflow-hidden ring-2 ring-primary/10">
                                <img src="img/expert_avatar.png" id="trust-avatar-v2" alt="Experto" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <span class="block text-sm font-bold text-slate-900" id="trust-name-v2">Dr. Arturo Estrada</span>
                                <span class="block text-[10px] text-primary uppercase tracking-widest font-black" id="trust-role-v2">Director Médico OID</span>
                            </div>
                        </div>
                    </div>

                    <!-- Indicadores de Progreso -->
                    <div class="flex gap-1.5 mt-6">
                        <div class="trust-dot-v2 w-6 h-1 rounded-full bg-primary transition-all duration-300" data-idx="0"></div>
                        <div class="trust-dot-v2 w-2 h-1 rounded-full bg-slate-200 transition-all duration-300" data-idx="1"></div>
                        <div class="trust-dot-v2 w-2 h-1 rounded-full bg-slate-200 transition-all duration-300" data-idx="2"></div>
                        <div class="trust-dot-v2 w-2 h-1 rounded-full bg-slate-200 transition-all duration-300" data-idx="3"></div>
                    </div>
                </div>

                <!-- Estadísticas de Confianza -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-12 text-center sm:text-left">
                    <div>
                        <span class="block text-2xl font-bold text-slate-900">+50k</span>
                        <span class="text-[10px] text-slate-500 uppercase">Diagnósticos</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold text-primary">90%</span>
                        <span class="text-[10px] text-slate-500 uppercase">Menos Radiación</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold text-slate-900">100%</span>
                        <span class="text-[10px] text-slate-500 uppercase">Especialistas</span>
                    </div>
                </div>

                <div class="flex flex-col gap-6">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center text-primary mt-1">
                            <span class="material-symbols-outlined text-sm">verified_user</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm uppercase tracking-wider">Cero Margen de
                                Error</h4>
                            <p class="text-slate-500 text-sm font-light">Nuestros protocolos de alta resolución
                                garantizan planes de tratamiento quirúrgico seguros y precisos.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center text-primary mt-1">
                            <span class="material-symbols-outlined text-sm">health_and_safety</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm uppercase tracking-wider">Prioridad en tu
                                Bienestar</h4>
                            <p class="text-slate-500 text-sm font-light">Utilizamos tecnología Ultra Low Dose™ para
                                obtener imágenes HD con la mínima radiación posible.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Planmeca Interactive Scrubbing (Ingeniería en Tiempo Real) -->
            <div class="relative flex items-center justify-center group h-full">
                <div id="scrubbing-container" class="relative w-full max-w-[550px] aspect-square flex items-center justify-center cursor-ew-resize overflow-hidden rounded-3xl bg-slate-900/5 shadow-inner">
                    
                    <!-- Imagen de la Secuencia -->
                    <img id="scrubbing-image" src="video/equipo_transition_1/ezgif-frame-001.jpg" 
                         alt="Planmeca Romexis Interaction" 
                         class="w-full h-full object-contain pointer-events-none transition-transform duration-500 group-hover:scale-105">

                    <!-- Overlay de Interacción (Visual Feedback) -->
                    <div class="absolute inset-0 pointer-events-none flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="w-full h-[1px] bg-cyan-400/20 relative">
                            <div id="scrubbing-cursor" class="absolute top-1/2 left-0 -translate-y-1/2 w-4 h-4 bg-cyan-400 rounded-full shadow-[0_0_15px_#22d3ee] transition-all duration-100 ease-out"></div>
                        </div>
                    </div>

                    <!-- Overlay de Datos Romexis (Sincronizado) -->
                    <div class="absolute top-10 right-10 z-20 bg-slate-900/40 backdrop-blur-xl border border-white/20 p-4 rounded-2xl max-w-[200px] opacity-0 group-hover:opacity-100 transition-all duration-700">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-ping"></span>
                            <span class="text-[10px] font-black text-white uppercase tracking-widest">Romexis® Engine</span>
                        </div>
                        <p class="text-white/80 text-[10px] leading-tight font-light uppercase tracking-tighter">
                            Control interactivo de reconstrucción volumétrica. Desliza para explorar.
                        </p>
                    </div>

                    <!-- Certificación Técnica -->
                    <div class="absolute bottom-10 left-10 z-20 pointer-events-none opacity-40 group-hover:opacity-100 transition-opacity">
                        <div class="flex flex-col items-start">
                            <span class="text-[9px] font-black text-cyan-400 uppercase tracking-widest mb-1">Tecnología Planmeca</span>
                            <div class="flex items-center gap-3">
                                <div class="px-2 py-1 bg-white/10 backdrop-blur-md border border-white/20 rounded text-[10px] font-bold text-white uppercase">Viso™ G7</div>
                                <div class="px-2 py-1 bg-white/10 backdrop-blur-md border border-white/20 rounded text-[10px] font-bold text-white uppercase">iTero®</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<style>
#scrubbing-container:hover {
    box-shadow: 0 0 50px rgba(34, 211, 238, 0.05);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('scrubbing-container');
    const image = document.getElementById('scrubbing-image');
    const cursor = document.getElementById('scrubbing-cursor');
    const totalFrames = 40;
    const framePath = 'video/equipo_transition_1/ezgif-frame-';
    
    // Preload de imágenes para evitar parpadeo
    const preloadedImages = [];
    for (let i = 1; i <= totalFrames; i++) {
        const img = new Image();
        const frameNum = i.toString().padStart(3, '0');
        img.src = `${framePath}${frameNum}.jpg`;
        preloadedImages.push(img);
    }

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const width = rect.width;
        
        // Calcular porcentaje (0 a 1)
        let percent = x / width;
        if (percent < 0) percent = 0;
        if (percent > 1) percent = 1;

        // Mover el indicador visual del cursor
        if(cursor) {
            cursor.style.left = `${percent * 100}%`;
        }

        // Calcular el frame correspondiente (1 a 40)
        const frameIndex = Math.floor(percent * (totalFrames - 1)) + 1;
        const frameNum = frameIndex.toString().padStart(3, '0');
        
        // Actualizar el src de la imagen principal
        image.src = `${framePath}${frameNum}.jpg`;
    });
    
    // Efecto de suavizado al entrar/salir (opcional)
    container.addEventListener('mouseleave', () => {
        // Podríamos resetear al frame 1 o dejarlo donde está
        // image.src = `${framePath}001.jpg`;
    });
});
</script>

        </div>
    </div>

    <!-- Separador y Encabezado de Pilares -->
    <div class="max-w-7xl mx-auto px-6 mt-24 mb-12 relative z-10">
        <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-slate-200 to-transparent mb-16"></div>
        <div class="text-center md:text-left mb-16">
            <span class="inline-block px-3 py-1 rounded-full bg-slate-100 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-4">MÉTRICAS DE CONFIANZA</span>
            <h2 class="text-3xl font-light text-slate-900">Pilares de <span class="text-primary font-bold">Certeza Diagnóstica</span></h2>
        </div>
    </div>

    <!-- 4 Pilares de Certeza Diagnóstica (Estilo Homologado) -->
    <div class="max-w-7xl mx-auto px-6 pb-32 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Pilar 1: Tecnología -->
            <div class="bg-white p-10 rounded-[48px] shadow-xl shadow-slate-200/50 hover:shadow-cyan-500/10 transition-all duration-500 group/card border border-slate-50/50">
                <div class="w-16 h-16 rounded-[24px] bg-cyan-50 flex items-center justify-center text-cyan-500 mb-8 transition-all duration-500 group-hover/card:bg-cyan-500 group-hover/card:text-white">
                    <span class="material-symbols-outlined !text-3xl">biotech</span>
                </div>
                <h3 class="text-2xl font-light text-slate-800 mb-4">Ingeniería Quirúrgica</h3>
                <p class="text-slate-500 text-[13px] leading-relaxed font-light">
                    Eliminamos las conjeturas con tomografías que revelan estructuras invisibles, vitales para el éxito de tus implantes y cirugías.
                </p>
            </div>

            <!-- Pilar 2: Autoridad -->
            <div class="bg-white p-10 rounded-[48px] shadow-xl shadow-slate-200/50 hover:shadow-primary/10 transition-all duration-500 group/card border border-slate-50/50">
                <div class="w-16 h-16 rounded-[24px] bg-blue-50 flex items-center justify-center text-primary mb-8 transition-all duration-500 group-hover/card:bg-primary group-hover/card:text-white">
                    <span class="material-symbols-outlined !text-3xl">verified</span>
                </div>
                <h3 class="text-2xl font-light text-slate-800 mb-4">Especialistas Certificados</h3>
                <p class="text-slate-500 text-[13px] leading-relaxed font-light">
                    Cada imagen es validada por radiólogos maxilofaciales. No entregamos fotos, entregamos certezas clínicas para tu tratamiento.
                </p>
            </div>

            <!-- Pilar 3: Conectividad -->
            <div class="bg-white p-10 rounded-[48px] shadow-xl shadow-slate-200/50 hover:shadow-indigo-500/10 transition-all duration-500 group/card border border-slate-50/50">
                <div class="w-16 h-16 rounded-[24px] bg-indigo-50 flex items-center justify-center text-indigo-500 mb-8 transition-all duration-500 group-hover/card:bg-indigo-500 group-hover/card:text-white">
                    <span class="material-symbols-outlined !text-3xl">cloud_done</span>
                </div>
                <h3 class="text-2xl font-light text-slate-800 mb-4">Resultados al Instante</h3>
                <p class="text-slate-500 text-[13px] leading-relaxed font-light">
                    Acceso inmediato para tu odontólogo. Sin CD's ni esperas; tu diagnóstico fluye digitalmente a la consulta en segundos.
                </p>
            </div>

            <!-- Pilar 4: Seguridad -->
            <div class="bg-white p-10 rounded-[48px] shadow-xl shadow-slate-200/50 hover:shadow-emerald-500/10 transition-all duration-500 group/card border border-slate-50/50">
                <div class="w-16 h-16 rounded-[24px] bg-emerald-50 flex items-center justify-center text-emerald-500 mb-8 transition-all duration-500 group-hover/card:bg-emerald-500 group-hover/card:text-white">
                    <span class="material-symbols-outlined !text-3xl">health_and_safety</span>
                </div>
                <h3 class="text-2xl font-light text-slate-800 mb-4">Cuidado Ultra-Seguro</h3>
                <p class="text-slate-500 text-[13px] leading-relaxed font-light">
                    Protocolos que reducen drásticamente la radiación, priorizando tu salud sin sacrificar la nitidez diagnóstica.
                </p>
            </div>

        </div>
    </div>

    <!-- Decoración de fondo -->
    <div
        class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-cyan-50/20 to-transparent pointer-events-none">
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const dataV2 = [
        {
            text: '"La tecnología solo es valiosa cuando está al servicio de la salud humana. En OID, garantizamos que cada milímetro de imagen digital salve tiempo y mejore el pronóstico de nuestros pacientes."',
            name: 'Dr. Arturo Estrada',
            role: 'Director Médico OID',
            avatar: 'img/expert_avatar.png'
        },
        {
            text: '"Como especialistas, dependemos de la nitidez absoluta. OrthoImagen Digital nos proporciona esa claridad técnica que eleva el estándar de nuestros tratamientos ortodónticos."',
            name: 'Dr. Ricardo Silva',
            role: 'Ortodoncista Certificado',
            avatar: 'img/clinic_ajusco_lobby_1777595933587.png'
        },
        {
            text: '"La integración con OrthoCloud ha transformado mi consulta. Recibir los estudios de mis pacientes al instante y en alta resolución es un cambio de juego para la eficiencia clínica."',
            name: 'Dra. Elena Martínez',
            role: 'Cirujano Maxilofacial',
            avatar: 'img/clinic_coapa_lobby_1777595898080.png'
        },
        {
            text: '"Lo que más valoro es el compromiso con la baja radiación. Saber que mis pacientes reciben diagnósticos de precisión con protocolos Ultra Low Dose me da total tranquilidad."',
            name: 'Dr. Jorge Ramos',
            role: 'Odontopediatra Especialista',
            avatar: 'img/expert_avatar.png'
        }
    ];

    let currentV2 = 0;
    const textElV2 = document.querySelector('#trust-text-v2');
    const nameElV2 = document.querySelector('#trust-name-v2');
    const roleElV2 = document.querySelector('#trust-role-v2');
    const avatarElV2 = document.querySelector('#trust-avatar-v2');
    const authorBoxV2 = document.querySelector('#trust-author-box-v2');
    const dotsV2 = document.querySelectorAll('.trust-dot-v2');

    function rotateV2() {
        currentV2 = (currentV2 + 1) % dataV2.length;
        
        // Efecto de salida
        textElV2.style.opacity = '0';
        textElV2.style.transform = 'translateY(10px)';
        authorBoxV2.style.opacity = '0';

        setTimeout(() => {
            // Cambio de contenido
            textElV2.innerText = dataV2[currentV2].text;
            nameElV2.innerText = dataV2[currentV2].name;
            roleElV2.innerText = dataV2[currentV2].role;
            avatarElV2.src = dataV2[currentV2].avatar;

            // Efecto de entrada
            textElV2.style.opacity = '1';
            textElV2.style.transform = 'translateY(0)';
            authorBoxV2.style.opacity = '1';

            // Actualizar indicadores (dots)
            dotsV2.forEach((d, i) => {
                if(i === currentV2) {
                    d.classList.add('bg-primary', 'w-6');
                    d.classList.remove('bg-slate-200', 'w-2');
                } else {
                    d.classList.remove('bg-primary', 'w-6');
                    d.classList.add('bg-slate-200', 'w-2');
                }
            });
        }, 500);
    }

    // Iniciar rotación automática cada 6 segundos
    setInterval(rotateV2, 6000);
});
</script>