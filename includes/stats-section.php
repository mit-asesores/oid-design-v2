<section class="relative py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            <!-- Métrica 1 -->
            <div class="text-center group">
                <div class="text-4xl md:text-5xl font-bold text-primary mb-2 flex justify-center items-baseline">
                    <span class="counter" data-target="15000">+15</span>
                    <span class="text-2xl ml-1 text-cyan-600">k</span>
                </div>
                <p class="text-slate-500 text-sm font-light uppercase tracking-widest">Estudios Realizados</p>
                <div class="w-8 h-0.5 bg-cyan-100 mx-auto mt-4 group-hover:w-16 transition-all duration-500"></div>
            </div>

            <!-- Métrica 2 -->
            <div class="text-center group">
                <div class="text-4xl md:text-5xl font-bold text-primary mb-2 flex justify-center items-baseline">
                    <span class="counter" data-target="5">0</span>
                </div>
                <p class="text-slate-500 text-sm font-light uppercase tracking-widest">Sedes en CDMX</p>
                <div class="w-8 h-0.5 bg-cyan-100 mx-auto mt-4 group-hover:w-16 transition-all duration-500"></div>
            </div>

            <!-- Métrica 3 -->
            <div class="text-center group">
                <div class="text-4xl md:text-5xl font-bold text-primary mb-2 flex justify-center items-baseline">
                    <span class="counter" data-target="100">0</span>
                    <span class="text-2xl ml-1 text-cyan-600">%</span>
                </div>
                <p class="text-slate-500 text-sm font-light uppercase tracking-widest">Precisión Digital</p>
                <div class="w-8 h-0.5 bg-cyan-100 mx-auto mt-4 group-hover:w-16 transition-all duration-500"></div>
            </div>

            <!-- Métrica 4 -->
            <div class="text-center group">
                <div class="text-4xl md:text-5xl font-bold text-primary mb-2 flex justify-center items-baseline">
                    <span class="material-symbols-outlined text-4xl md:text-5xl text-red-600">emergency</span>
                </div>
                <p class="text-slate-500 text-sm font-light uppercase tracking-widest leading-tight">Alianza Estratégica <br/> Cruz Roja</p>
                <div class="w-8 h-0.5 bg-red-100 mx-auto mt-4 group-hover:w-16 transition-all duration-500"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        
        const startCounter = (el) => {
            const target = +el.getAttribute('data-target');
            const count = +el.innerText;
            const increment = target / 100;

            if (count < target) {
                el.innerText = Math.ceil(count + increment);
                setTimeout(() => startCounter(el), 20);
            } else {
                el.innerText = target;
            }
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    });
</script>
