<?php include_once 'includes/head.php'; ?>
<?php include_once 'includes/header.php'; ?>

<style>
    /* 1. LAYOUT & CORE */
    nav#main-header { z-index: 1000 !important; background: white !important; box-shadow: 0 2px 15px rgba(0,0,0,0.05); }
    main#booking-app { padding-top: 140px !important; }
    
    .booking-step {
        @apply bg-white rounded-[3.5rem] p-10 shadow-2xl shadow-slate-200/50 flex flex-col border border-slate-50 relative overflow-hidden transition-all duration-700;
    }

    #studies-grid { min-height: auto; max-height: none; }
    
    #filter-container.expanded {
        max-height: 5000px !important;
        opacity: 1 !important;
        margin-top: 1.5rem !important;
        pointer-events: auto !important;
    }

    /* 2. SELECTION CARDS BASE */
    .selection-card, .selection-card-mini {
        @apply bg-white border border-slate-100 rounded-3xl p-4 flex items-center gap-4 cursor-pointer transition-all duration-300 hover:shadow-xl hover:shadow-cyan-500/10 hover:border-cyan-200;
    }

    /* PREMIUM STATE - Especificidad Máxima */
    #booking-app .selection-card.selected, 
    #booking-app .selection-card-mini.selected {
        background: linear-gradient(135deg, #0891b2 0%, #0e7490 100%) !important;
        border-color: transparent !important;
        transform: scale(1.02);
        box-shadow: 0 20px 40px -10px rgba(8, 145, 178, 0.5) !important;
        z-index: 10;
    }
    
    #booking-app .selected h4, 
    #booking-app .selected p, 
    #booking-app .selected span {
        color: white !important;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }

    #booking-app .selected .bg-slate-50,
    #booking-app .selected .bg-cyan-50,
    #booking-app .selected .bg-white {
        background-color: rgba(255, 255, 255, 0.2) !important;
        color: white !important;
    }

    #booking-app .selected .material-symbols-outlined {
        color: white !important;
    }

    /* 3. NAVIGATION & UI */
    .step-nav-item { @apply flex flex-col items-center gap-1 text-slate-400 hover:text-cyan-500 cursor-pointer transition-all; }
    .step-nav-item.active { @apply text-cyan-600; }
    .step-nav-item.active span:first-child { @apply scale-110; }

    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
</style>

<main id="booking-app" class="bg-slate-50 min-h-screen pb-32 overflow-visible">

    
    <div class="max-w-[1600px] mx-auto px-6">
        <!-- Dashboard Layout -->
        <div class="grid grid-cols-12 gap-8 items-start h-auto">
            
            <!-- LEFT SIDEBAR: Current Selections -->
            <aside class="col-span-12 lg:col-span-3 bg-white/40 backdrop-blur-2xl rounded-[3rem] p-8 border border-white/50 h-fit shadow-xl shadow-slate-200/20 flex flex-col sticky top-[140px] z-10">
                <div class="mb-10">
                    <span class="text-[9px] font-black tracking-[0.3em] text-cyan-600 uppercase opacity-70">Booking Journey</span>
                    <h2 class="text-2xl font-light text-slate-800 mt-2">Tu <span class="font-bold">Cita</span></h2>
                </div>

                <div class="space-y-6 flex-grow">
                    <!-- Branch Summary -->
                    <div id="summary-branch" class="summary-item opacity-40 transition-all duration-500">
                        <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest block mb-2">Sucursal Seleccionada</span>
                        <div class="flex items-center gap-3 bg-white/30 p-3 rounded-2xl border border-transparent transition-all">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center transition-colors">
                                <span class="material-symbols-outlined text-slate-400 text-xl">location_on</span>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-700">No seleccionada</p>
                                <p class="text-[10px] text-slate-400">Pendiente paso 2</p>
                            </div>
                        </div>
                    </div>

                    <!-- Date/Time Summary -->
                    <div id="summary-schedule" class="summary-item opacity-40 transition-all duration-500">
                        <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest block mb-2">Fecha y Hora</span>
                        <div class="flex items-center gap-3 bg-white/30 p-3 rounded-2xl border border-transparent transition-all">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center transition-colors">
                                <span class="material-symbols-outlined text-slate-400 text-xl">calendar_today</span>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-700">Por definir</p>
                                <p class="text-[10px] text-slate-400">Pendiente paso 3</p>
                            </div>
                        </div>
                    </div>

                    <!-- Patient Summary -->
                    <div id="summary-patient" class="summary-item opacity-40 transition-all duration-500">
                        <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest block mb-2">Perfil Paciente</span>
                        <div class="flex items-center gap-3 bg-white/30 p-3 rounded-2xl border border-transparent transition-all">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center transition-colors">
                                <span class="material-symbols-outlined text-slate-400 text-xl">person</span>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-700">Sin datos</p>
                                <p class="text-[10px] text-slate-400">Pendiente paso 4</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-6 border-t border-slate-100/50">
                    <p class="text-[9px] text-slate-300 text-center uppercase tracking-widest font-bold">© 2024 OrthoImagenDigital</p>
                </div>
            </aside>
            <!-- MAIN CANVAS: Steps -->
            <div class="col-span-12 lg:col-span-6 bg-white rounded-[3rem] p-10 shadow-xl shadow-slate-200/50 min-h-[700px] relative overflow-hidden flex flex-col">
                
                <!-- STEP 1: Study Selection -->
                <div id="step-1" class="booking-step active-step flex flex-col h-full overflow-hidden">
                    <div class="mb-6 flex-shrink-0">
                        <h3 class="text-3xl font-light text-slate-900 mb-1">Selección <span class="font-bold">Clínica</span></h3>
                        <p class="text-slate-400 text-[10px] tracking-widest uppercase font-black">Paso 1: Elige tus servicios</p>
                    </div>

                    <!-- 1.1 Estudios Populares (SIEMPRE VISIBLES) -->
                    <div class="mb-8 flex-shrink-0">
                        <span class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] block mb-4">Sugerencias Rápidas</span>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                            <div class="selection-card-mini group" data-study-id="st-1" onclick="toggleStudy('st-1', 950, 'Ortodóntico Completo')">
                                <div class="flex-grow">
                                    <p class="text-[10px] font-bold text-slate-700 group-hover:text-cyan-700">Ortodóntico</p>
                                    <p class="text-[10px] font-light text-cyan-600">$950.00</p>
                                </div>
                                <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500 text-sm">add_circle</span>
                            </div>
                            <div class="selection-card-mini group" data-study-id="rx-p" onclick="toggleStudy('rx-p', 237.60, 'Panorámica Digital')">
                                <div class="flex-grow">
                                    <p class="text-[10px] font-bold text-slate-700 group-hover:text-cyan-700">Panorámica</p>
                                    <p class="text-[10px] font-light text-cyan-600">$237.60</p>
                                </div>
                                <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500 text-sm">add_circle</span>
                            </div>
                            <div class="selection-card-mini group" data-study-id="tm-1" onclick="toggleStudy('tm-1', 1790.00, 'Tomografía Completa')">
                                <div class="flex-grow">
                                    <p class="text-[10px] font-bold text-slate-700 group-hover:text-cyan-700">Tomografía</p>
                                    <p class="text-[10px] font-light text-cyan-600">$1,790.00</p>
                                </div>
                                <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500 text-sm">add_circle</span>
                            </div>
                            <div class="selection-card-mini group" data-study-id="sc-1" onclick="toggleStudy('sc-1', 750.00, 'Escaneo Intraoral')">
                                <div class="flex-grow">
                                    <p class="text-[10px] font-bold text-slate-700 group-hover:text-cyan-700">Escaneo 3D</p>
                                    <p class="text-[10px] font-light text-cyan-600">$750.00</p>
                                </div>
                                <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500 text-sm">add_circle</span>
                            </div>
                        </div>
                    </div>

                    <!-- 1.2 Buscador y Panel de Filtros -->
                    <div class="bg-slate-50 rounded-[2.5rem] p-4 mb-6 flex-shrink-0 border border-slate-100 shadow-sm transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="relative flex-grow">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                                <input type="text" id="study-search" placeholder="Busca por nombre o categoría..." 
                                       class="w-full bg-white border-none rounded-2xl py-3 pl-11 pr-4 text-xs shadow-sm focus:ring-2 focus:ring-cyan-500 transition-all">
                            </div>
                            <button onclick="toggleFilters()" class="px-6 h-11 rounded-2xl bg-white shadow-sm flex items-center gap-3 text-slate-500 hover:text-cyan-600 transition-all border border-slate-100 group">
                                <span class="text-[10px] font-black uppercase tracking-widest">Filtrar</span>
                                <div class="w-6 h-6 rounded-lg bg-slate-50 flex items-center justify-center group-hover:bg-cyan-50 transition-colors">
                                    <span id="filter-icon" class="material-symbols-outlined text-lg">expand_more</span>
                                </div>
                            </button>
                        </div>

                        <!-- PANEL COLAPSABLE: Categorías + Listado de Estudios -->
                        <div id="filter-container" class="max-h-0 opacity-0 overflow-hidden transition-all duration-700 ease-in-out">
                            <!-- Categorías -->
                            <div class="pt-8 pb-6 border-b border-slate-100 mb-6">
                                <div class="flex justify-between items-start px-2">
                                    <div class="category-btn active" onclick="filterCategory('all')">
                                        <div class="cat-circle">
                                            <span class="material-symbols-outlined text-xl">grid_view</span>
                                        </div>
                                        <span class="cat-label">Todos</span>
                                    </div>
                                    <div class="category-btn" onclick="filterCategory('radiologia')">
                                        <div class="cat-circle">
                                            <span class="material-symbols-outlined text-xl">radiology</span>
                                        </div>
                                        <span class="cat-label">Radiología</span>
                                    </div>
                                    <div class="category-btn" onclick="filterCategory('tomografia')">
                                        <div class="cat-circle">
                                            <span class="material-symbols-outlined text-xl">3d_rotation</span>
                                        </div>
                                        <span class="cat-label">Tomografía</span>
                                    </div>
                                    <div class="category-btn" onclick="filterCategory('escaneo')">
                                        <div class="cat-circle">
                                            <span class="material-symbols-outlined text-xl">biotech</span>
                                        </div>
                                        <span class="cat-label">Escaneo</span>
                                    </div>
                                    <div class="category-btn" onclick="filterCategory('otros')">
                                        <div class="cat-circle">
                                            <span class="material-symbols-outlined text-xl">more_horiz</span>
                                        </div>
                                        <span class="cat-label">Otros</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Listado Dinámico (Expansión natural sin scroll interno) -->
                            <div id="studies-grid" class="grid grid-cols-1 lg:grid-cols-2 gap-4 pb-4">
                                <!-- Aquí se inyectan los estudios dinámicamente -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STEP 2: Branch Selection -->
                <div id="step-2" class="booking-step hidden opacity-0 translate-x-20 flex flex-col">
                    <div class="mb-10 flex-shrink-0">
                        <h3 class="text-4xl font-light text-slate-900 mb-2">Selecciona <span class="font-bold">Sucursal</span></h3>
                        <p class="text-slate-400 text-sm">Contamos con ubicaciones estratégicas para tu comodidad.</p>
                    </div>
                    
                    <div class="space-y-4 pb-8 overflow-y-auto pr-2 custom-scrollbar max-h-[500px]">
                        <!-- COAPA -->
                        <div class="selection-card group p-0 overflow-hidden flex h-40 transition-all border border-slate-100 hover:border-cyan-500" data-branch-id="coapa" onclick="selectBranch('COAPA', 'Plaza Market Place Local 13, Prol. División del Norte')">
                            <div class="w-1/3 h-full overflow-hidden flex-shrink-0">
                                <img src="img/clinic_coapa_lobby_1777595898080.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="flex-grow p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="text-xl font-bold text-slate-800">COAPA</h4>
                                        <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500">location_on</span>
                                    </div>
                                    <p class="text-[11px] text-slate-400 line-clamp-1">Plaza Market Place Local 13, Prol. División del Norte</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-50 group-hover:border-white/20">
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Lunes a Viernes</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 7:30 pm</p>
                                    </div>
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Sábado</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 1:30 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CANTIL -->
                        <div class="selection-card group p-0 overflow-hidden flex h-40 transition-all border border-slate-100 hover:border-cyan-500" data-branch-id="cantil" onclick="selectBranch('CANTIL', 'Plaza Cantil Local 21, Av Aztecas 270')">
                            <div class="w-1/3 h-full overflow-hidden flex-shrink-0">
                                <img src="img/clinic_cantil_lobby_1777595909910.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="flex-grow p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="text-xl font-bold text-slate-800">CANTIL</h4>
                                        <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500">location_on</span>
                                    </div>
                                    <p class="text-[11px] text-slate-400 line-clamp-1">Plaza Cantil Local 21, Av Aztecas 270 Col. Los Reyes</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-50 group-hover:border-white/20">
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Lunes a Viernes</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 7:30 pm</p>
                                    </div>
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Sábado</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 1:30 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TLAHUAC -->
                        <div class="selection-card group p-0 overflow-hidden flex h-40 transition-all border border-slate-100 hover:border-cyan-500" data-branch-id="tlahuac" onclick="selectBranch('TLAHUAC', 'Av Tláhuac 3636, Local 302')">
                            <div class="w-1/3 h-full overflow-hidden flex-shrink-0">
                                <img src="img/clinic_tlahuac_lobby_1777595922754.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="flex-grow p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="text-xl font-bold text-slate-800">TLAHUAC</h4>
                                        <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500">location_on</span>
                                    </div>
                                    <p class="text-[11px] text-slate-400 line-clamp-1">Av Tláhuac 3636, Local 302, Col. Pueblo de Culhuacán</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-50 group-hover:border-white/20">
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Lunes a Viernes</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 7:30 pm</p>
                                    </div>
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Sábado</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 1:30 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- AJUSCO -->
                        <div class="selection-card group p-0 overflow-hidden flex h-40 transition-all border border-slate-100 hover:border-cyan-500" data-branch-id="ajusco" onclick="selectBranch('AJUSCO', 'Carretera Picacho Ajusco 160')">
                            <div class="w-1/3 h-full overflow-hidden flex-shrink-0">
                                <img src="img/clinic_ajusco_lobby_1777595933587.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="flex-grow p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="text-xl font-bold text-slate-800">AJUSCO</h4>
                                        <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500">location_on</span>
                                    </div>
                                    <p class="text-[11px] text-slate-400 line-clamp-1">Carretera Picacho Ajusco 160, Plaza Sur, Local 9</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-50 group-hover:border-white/20">
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Lunes a Viernes</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 7:30 pm</p>
                                    </div>
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Sábado</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 1:30 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CRUZ ROJA -->
                        <div class="selection-card group p-0 overflow-hidden flex h-40 transition-all border border-slate-100 hover:border-cyan-500" data-branch-id="cruzroja" onclick="selectBranch('CRUZ ROJA', 'Av. Ejército Nacional Mexicano 1032')">
                            <div class="w-1/3 h-full overflow-hidden flex-shrink-0">
                                <img src="img/clinic_cruzroja_lobby_v2_1777595951555.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="flex-grow p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="text-xl font-bold text-slate-800">CRUZ ROJA</h4>
                                        <span class="material-symbols-outlined text-slate-300 group-hover:text-cyan-500">location_on</span>
                                    </div>
                                    <p class="text-[11px] text-slate-400 line-clamp-1">Av. Ejército Nacional Mexicano 1032, Col. Polanco I Secc</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-50 group-hover:border-white/20">
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Lunes a Viernes</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 7:30 pm</p>
                                    </div>
                                    <div>
                                        <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest group-hover:text-white/60">Sábado</p>
                                        <p class="text-[10px] font-bold text-slate-600 group-hover:text-white">09:00 am a 1:30 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STEP 3: Schedule -->
                <div id="step-3" class="booking-step hidden opacity-0 translate-x-20 flex flex-col">
                    <div class="mb-10 flex-shrink-0">
                        <h3 class="text-4xl font-light text-slate-900 mb-2">Tu <span class="font-bold">Agenda</span></h3>
                        <p class="text-slate-400 text-sm">Selecciona el día y horario que mejor te acomode.</p>
                    </div>

                    <div class="space-y-8 overflow-y-auto pr-2 custom-scrollbar">
                        <div class="flex gap-4 overflow-x-auto pb-4 custom-scrollbar">
                            <div class="min-w-[120px] p-5 rounded-3xl border-2 border-cyan-500 bg-cyan-50 text-center cursor-pointer transition-all hover:shadow-lg opacity-100" onclick="selectDate('30 Abr', 'Hoy', this)">
                                <p class="text-[9px] text-cyan-600 font-black uppercase tracking-widest mb-1">Hoy</p>
                                <p class="text-2xl font-bold text-slate-800">30 Abr</p>
                                <p class="text-[10px] text-slate-400 mt-1">Jueves</p>
                            </div>
                            <div class="min-w-[120px] p-5 rounded-3xl border-2 border-slate-100 bg-white text-center cursor-pointer opacity-60 hover:opacity-100 hover:border-cyan-200 transition-all" onclick="selectDate('01 May', 'Mañana', this)">
                                <p class="text-[9px] text-slate-400 font-black uppercase tracking-widest mb-1">Mañana</p>
                                <p class="text-2xl font-bold text-slate-800">01 May</p>
                                <p class="text-[10px] text-slate-400 mt-1">Viernes</p>
                            </div>
                            <div class="min-w-[120px] p-5 rounded-3xl border-2 border-slate-100 bg-white text-center cursor-pointer opacity-60 hover:opacity-100 hover:border-cyan-200 transition-all" onclick="selectDate('02 May', 'Sábado', this)">
                                <p class="text-[9px] text-slate-400 font-black uppercase tracking-widest mb-1">Sábado</p>
                                <p class="text-2xl font-bold text-slate-800">02 May</p>
                                <p class="text-[10px] text-slate-400 mt-1">Sábado</p>
                            </div>
                        </div>

                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-4">Horarios Disponibles</p>
                            <div class="grid grid-cols-3 md:grid-cols-4 gap-3">
                                <button onclick="selectTime('09:00 AM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">09:00 AM</button>
                                <button onclick="selectTime('10:00 AM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">10:00 AM</button>
                                <button onclick="selectTime('11:00 AM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">11:00 AM</button>
                                <button onclick="selectTime('12:00 PM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">12:00 PM</button>
                                <button onclick="selectTime('01:00 PM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">01:00 PM</button>
                                <button onclick="selectTime('04:00 PM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">04:00 PM</button>
                                <button onclick="selectTime('05:00 PM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">05:00 PM</button>
                                <button onclick="selectTime('06:00 PM', '30 Abr')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">06:00 PM</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STEP 4: Patient -->
                <div id="step-4" class="booking-step hidden opacity-0 translate-x-20 h-full flex flex-col">
                    <div class="mb-10 flex-shrink-0">
                        <h3 class="text-4xl font-light text-slate-900 mb-2">Tus <span class="font-bold">Datos</span></h3>
                        <p class="text-slate-400 text-sm">Información necesaria para tu registro clínico.</p>
                    </div>

                    <form id="patient-form" class="space-y-6 overflow-y-auto pr-2 custom-scrollbar pb-6" oninput="updatePatientSummary()">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Nombre Completo</label>
                                <div class="relative group">
                                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-cyan-500 transition-colors">person</span>
                                    <input type="text" id="p-name" placeholder="Ej. Jonathan Wick" class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-4 pl-12 pr-4 text-sm focus:bg-white focus:border-cyan-100 focus:ring-4 focus:ring-cyan-500/5 transition-all outline-none">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Teléfono Móvil</label>
                                <div class="relative group">
                                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-cyan-500 transition-colors">smartphone</span>
                                    <input type="tel" id="p-phone" placeholder="55 1234 5678" class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-4 pl-12 pr-4 text-sm focus:bg-white focus:border-cyan-100 focus:ring-4 focus:ring-cyan-500/5 transition-all outline-none">
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Correo Electrónico</label>
                            <div class="relative group">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-cyan-500 transition-colors">mail</span>
                                <input type="email" id="p-email" placeholder="jonathan@example.com" class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-4 pl-12 pr-4 text-sm focus:bg-white focus:border-cyan-100 focus:ring-4 focus:ring-cyan-500/5 transition-all outline-none">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Notas Adicionales (Opcional)</label>
                            <div class="relative group">
                                <span class="material-symbols-outlined absolute left-4 top-4 text-slate-300 group-focus-within:text-cyan-500 transition-colors">description</span>
                                <textarea id="p-notes" rows="3" placeholder="Cuéntanos algún detalle importante para tu cita..." class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-4 pl-12 pr-4 text-sm focus:bg-white focus:border-cyan-100 focus:ring-4 focus:ring-cyan-500/5 transition-all outline-none resize-none"></textarea>
                            </div>
                        </div>

                        <div class="pt-4 flex items-start gap-3">
                            <input type="checkbox" id="privacy" class="mt-1 w-5 h-5 rounded border-slate-200 text-cyan-600 focus:ring-cyan-500 cursor-pointer">
                            <label for="privacy" class="text-xs text-slate-400 leading-relaxed cursor-pointer hover:text-slate-600 transition-colors">
                                Acepto el <a href="#" class="text-cyan-600 font-bold underline hover:text-cyan-700">Aviso de Privacidad</a> y autorizo el tratamiento de mis datos para fines clínicos.
                            </label>
                        </div>
                    </form>
                </div>

            </div> <!-- CIERRE DEL MAIN CANVAS (col-span-6) -->

            <!-- RIGHT SIDEBAR: Order Summary -->
            <aside class="col-span-12 lg:col-span-3 flex flex-col gap-4 sticky top-[140px] h-fit">
                
                <div class="bg-white rounded-[2.5rem] p-6 border border-slate-100 shadow-sm">
                    <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Resumen de Orden</h4>
                    
                    <div id="selected-list" class="space-y-3 mb-6 max-h-[300px] overflow-y-auto pr-2 custom-scrollbar">
                        <p class="text-xs text-slate-400 italic">No hay estudios seleccionados</p>
                    </div>

                    <div class="space-y-2 pt-4 border-t border-slate-100">
                        <div class="flex justify-between text-[11px]">
                            <span class="text-slate-400">Subtotal</span>
                            <span id="subtotal-val" class="font-bold text-slate-700">$0.00</span>
                        </div>
                        <div class="flex justify-between text-[11px]">
                            <span class="text-slate-400">IVA (16%)</span>
                            <span id="tax-val" class="font-bold text-slate-700">$0.00</span>
                        </div>
                        <div class="flex justify-between text-xl pt-2">
                            <span class="font-light text-slate-800">Total</span>
                            <span id="total-val" class="font-bold text-cyan-600">$0.00</span>
                        </div>
                    </div>
                </div>

                <button id="main-action-btn" onclick="nextStep()" class="w-full bg-slate-900 text-white py-5 rounded-3xl font-bold text-[10px] tracking-widest uppercase hover:bg-cyan-600 transition-all flex items-center justify-center gap-3 shadow-xl shadow-slate-200">
                    Siguiente Paso
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </button>
            </aside>

        </div>

        <!-- BOTTOM NAVIGATION: Stepper -->
        <nav class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-white/80 backdrop-blur-2xl px-10 py-6 rounded-full border border-white shadow-2xl z-50 flex items-center gap-12">
            <div class="step-nav-item active" onclick="goToStep(1)">
                <span class="material-symbols-outlined">layers</span>
                <span class="text-[9px] font-bold uppercase tracking-tighter">Estudios</span>
            </div>
            <div class="step-nav-item" onclick="goToStep(2)">
                <span class="material-symbols-outlined">location_on</span>
                <span class="text-[9px] font-bold uppercase tracking-tighter">Sucursal</span>
            </div>
            <div class="step-nav-item" onclick="goToStep(3)">
                <span class="material-symbols-outlined">calendar_today</span>
                <span class="text-[9px] font-bold uppercase tracking-tighter">Agenda</span>
            </div>
            <div class="step-nav-item" onclick="goToStep(4)">
                <span class="material-symbols-outlined">person</span>
                <span class="text-[9px] font-bold uppercase tracking-tighter">Paciente</span>
            </div>
        </nav>

    </div>

</main>

<style>
    .selection-card {
        @apply bg-white border border-slate-100 rounded-3xl p-4 flex items-center gap-4 cursor-pointer transition-all hover:shadow-xl hover:shadow-cyan-500/10 hover:border-cyan-200;
    }
    
    .step-nav-item {
        @apply flex flex-col items-center gap-1 text-slate-400 hover:text-cyan-500 cursor-pointer transition-all;
    }
    
    .step-nav-item.active {
        @apply text-cyan-600;
    }

    .step-nav-item.active span:first-child {
        @apply scale-110;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #e2e8f0;
        border-radius: 10px;
    }
</style>

<?php include_once 'includes/footer.php'; ?>

<script>
    // GLOBAL STATE & DATABASE
    let bookingState = {
        currentStep: 1,
        selectedStudies: [],
        branch: null,
        schedule: null,
        patient: null,
        pricing: { subtotal: 0, tax: 0, total: 0 }
    };

    const allStudies = [
        { id: 'rx-p', name: 'Panorámica Digital', price: 237.60, category: 'radiologia', icon: 'radiology', desc: 'Ortopantomografía de alta definición.' },
        { id: 'rx-1', name: 'Lateral de Cráneo 8x10', price: 297.00, category: 'radiologia', icon: 'radiology', desc: 'Estudio cefalométrico lateral.' },
        { id: 'rx-2', name: 'Lateral de Cráneo 10x12', price: 336.00, category: 'radiologia', icon: 'radiology', desc: 'Estudio cefalométrico ampliado.' },
        { id: 'rx-3', name: 'PA de Cráneo', price: 297.00, category: 'radiologia', icon: 'radiology', desc: 'Proyección Postero-Anterior.' },
        { id: 'rx-4', name: 'AP de Cráneo', price: 297.00, category: 'radiologia', icon: 'radiology', desc: 'Proyección Antero-Posterior.' },
        { id: 'rx-5', name: 'Rx ATM Comparativa', price: 354.00, category: 'radiologia', icon: 'radiology', desc: 'Articulación Temporomandibular.' },
        { id: 'rx-6', name: 'Senos Paranasales', price: 297.00, category: 'radiologia', icon: 'radiology', desc: 'Proyección de Waters/Caldwell.' },
        { id: 'tm-1', name: 'Tomografía Completa (USB)', price: 1790.00, category: 'tomografia', icon: '3d_rotation', desc: 'CBCT volumen completo 3D.' },
        { id: 'tm-2', name: 'Tomografía por Cuadrante', price: 850.00, category: 'tomografia', icon: '3d_rotation', desc: 'Enfoque en área específica.' },
        { id: 'tm-3', name: 'Tomografía Maxilar', price: 1200.00, category: 'tomografia', icon: '3d_rotation', desc: 'Maxilar superior completo.' },
        { id: 'tm-4', name: 'Tomografía Mandibular', price: 1200.00, category: 'tomografia', icon: '3d_rotation', desc: 'Mandíbula completa.' },
        { id: 'sc-1', name: 'Escaneo Intraoral + Impresión 3D', price: 750.00, category: 'escaneo', icon: 'biotech', desc: 'Digitalización y modelo físico.' },
        { id: 'sc-2', name: 'Modelos Digitales STL', price: 450.00, category: 'escaneo', icon: 'biotech', desc: 'Exportación de archivos para diseño.' },
        { id: 'st-1', name: 'Ortodóntico Completo', price: 950.00, category: 'otros', icon: 'layers', desc: 'Carpeta completa de diagnóstico.' },
        { id: 'st-2', name: 'Serie Periapical (14)', price: 885.00, category: 'radiologia', icon: 'grid_view', desc: 'Mapeo dental completo.' },
        { id: 'st-3', name: 'Periapical Individual', price: 110.00, category: 'radiologia', icon: 'filter_frames', desc: 'Enfoque en una sola pieza.' },
        { id: 'ot-1', name: 'Fotografías Clínicas', price: 350.00, category: 'otros', icon: 'photo_camera', desc: 'Set completo extra e intraoral.' },
        { id: 'ot-2', name: 'Carpeta Digital OID', price: 0.00, category: 'otros', icon: 'cloud_done', desc: 'Acceso a portal OrthoCloud.' }
    ];

    // FUNCTIONS (GLOBAL SCOPE)
    function toggleStudy(id, price, name) {
        const index = bookingState.selectedStudies.findIndex(s => s.id === id);
        if (index > -1) {
            bookingState.selectedStudies.splice(index, 1);
        } else {
            bookingState.selectedStudies.push({ id, price, name });
        }
        updateOrderSummary();
    }

    function updateOrderSummary() {
        const list = document.getElementById('selected-list');
        const subtotalEl = document.getElementById('subtotal-val');
        const taxEl = document.getElementById('tax-val');
        const totalEl = document.getElementById('total-val');

        if (!list) return;

        if (bookingState.selectedStudies.length === 0) {
            list.innerHTML = '<p class="text-xs text-slate-400 italic">No hay estudios seleccionados</p>';
            bookingState.pricing = { subtotal: 0, tax: 0, total: 0 };
        } else {
            list.innerHTML = bookingState.selectedStudies.map(s => `
                <div class="flex justify-between items-center bg-slate-50 p-3 rounded-xl border border-slate-100 animate-in fade-in slide-in-from-right-2 duration-300">
                    <div>
                        <p class="text-[11px] font-bold text-slate-700">${s.name}</p>
                        <p class="text-[10px] text-cyan-600">$${s.price.toFixed(2)}</p>
                    </div>
                    <button onclick="toggleStudy('${s.id}', ${s.price}, '${s.name}')" class="text-slate-300 hover:text-red-400 transition-colors">
                        <span class="material-symbols-outlined text-sm">delete</span>
                    </button>
                </div>
            `).join('');

            const subtotal = bookingState.selectedStudies.reduce((acc, s) => acc + s.price, 0);
            const tax = subtotal * 0.16;
            const total = subtotal + tax;
            bookingState.pricing = { subtotal, tax, total };
        }

        subtotalEl.innerText = `$${bookingState.pricing.subtotal.toFixed(2)}`;
        taxEl.innerText = `$${bookingState.pricing.tax.toFixed(2)}`;
        totalEl.innerText = `$${bookingState.pricing.total.toFixed(2)}`;

        // Sync visual classes
        document.querySelectorAll('.selection-card, .selection-card-mini').forEach(card => {
            const studyId = card.getAttribute('data-study-id');
            const isSelected = bookingState.selectedStudies.some(s => s.id === studyId);
            
            if (isSelected) {
                card.classList.add('selected');
                const icon = card.querySelector('span.material-symbols-outlined');
                if (icon && (icon.innerText === 'add_circle' || icon.innerText === 'add')) icon.innerText = 'check_circle';
            } else {
                card.classList.remove('selected');
                const icon = card.querySelector('span.material-symbols-outlined');
                if (icon && icon.innerText === 'check_circle') icon.innerText = 'add_circle';
            }
        });
    }

    function renderStudies(filter = 'all', search = '') {
        const grid = document.getElementById('studies-grid');
        if (!grid) return;

        const filtered = allStudies.filter(s => {
            const matchCat = filter === 'all' || s.category === filter;
            const matchSearch = s.name.toLowerCase().includes(search.toLowerCase());
            return matchCat && matchSearch;
        });

        grid.innerHTML = filtered.map(s => `
            <div class="selection-card group ${bookingState.selectedStudies.some(sel => sel.id === s.id) ? 'selected' : ''}" 
                 data-study-id="${s.id}" 
                 onclick="toggleStudy('${s.id}', ${s.price}, '${s.name}')">
                <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-slate-400 group-hover:bg-cyan-500 group-hover:text-white transition-all flex-shrink-0">
                    <span class="material-symbols-outlined text-lg">${s.icon}</span>
                </div>
                <div class="flex-grow min-w-0">
                    <h4 class="text-[11px] font-bold text-slate-800 leading-tight truncate">${s.name}</h4>
                    <p class="text-[9px] text-slate-400 truncate">${s.desc}</p>
                </div>
                <div class="text-right flex-shrink-0">
                    <p class="text-sm font-bold text-slate-900">$${s.price.toFixed(2)}</p>
                    <span class="text-[8px] font-black text-cyan-500 tracking-widest uppercase">Seleccionar</span>
                </div>
            </div>
        `).join('');
    }

    function filterCategory(cat) {
        document.querySelectorAll('.category-btn').forEach(btn => {
            if (btn.getAttribute('onclick').includes(`'${cat}'`)) btn.classList.add('active');
            else btn.classList.remove('active');
        });
        renderStudies(cat, document.getElementById('study-search').value);
    }

    function toggleFilters() {
        const container = document.getElementById('filter-container');
        const icon = document.getElementById('filter-icon');
        if (!container || !icon) return;
        container.classList.toggle('expanded');
        icon.innerText = container.classList.contains('expanded') ? 'expand_less' : 'expand_more';
    }

    function selectDate(date, label, element) {
        bookingState.schedule = { ...bookingState.schedule, date: `${label} ${date}` };
        
        // Visual feedback for dates
        document.querySelectorAll('#step-3 .flex.gap-4 > div').forEach(el => {
            el.classList.remove('border-cyan-500', 'bg-cyan-50', 'opacity-100');
            el.classList.add('border-slate-100', 'bg-white', 'opacity-60');
        });
        
        element.classList.add('border-cyan-500', 'bg-cyan-50', 'opacity-100');
        element.classList.remove('border-slate-100', 'bg-white', 'opacity-60');

        // Update summary if needed
        const summaryEl = document.getElementById('summary-schedule');
        if (summaryEl && bookingState.schedule.time) {
            summaryEl.classList.add('completed');
            summaryEl.querySelector('p.text-sm').innerText = `${label} ${date} - ${bookingState.schedule.time}`;
        }
    }

    function selectBranch(name, address) {
        bookingState.branch = { name, address };
        const summaryEl = document.getElementById('summary-branch');
        if (summaryEl) {
            summaryEl.classList.add('completed');
            summaryEl.querySelector('p.text-sm').innerText = name;
            summaryEl.querySelector('p.text-[11px]').innerText = address;
        }
        document.querySelectorAll('#step-2 .selection-card').forEach(card => {
            card.classList.toggle('selected', card.querySelector('h4').innerText === name);
        });
        setTimeout(() => goToStep(3), 600);
    }

    function selectTime(time, date) {
        bookingState.schedule = { time, date };
        const summaryEl = document.getElementById('summary-schedule');
        if (summaryEl) {
            summaryEl.classList.add('completed');
            summaryEl.querySelector('p.text-sm').innerText = `${date} - ${time}`;
        }
        document.querySelectorAll('#step-3 button').forEach(btn => {
            btn.classList.toggle('bg-cyan-500', btn.innerText === time);
            btn.classList.toggle('text-white', btn.innerText === time);
        });
        setTimeout(() => goToStep(4), 600);
    }

    function updatePatientSummary() {
        const name = document.getElementById('p-name')?.value;
        const summaryEl = document.getElementById('summary-patient');
        if (name && name.length > 3 && summaryEl) {
            summaryEl.classList.add('completed');
            summaryEl.querySelector('p.text-sm').innerText = name;
        }
    }

    // Step Nav Functions
    function goToStep(step) {
        if (step === bookingState.currentStep) return;
        const currentEl = document.getElementById(`step-${bookingState.currentStep}`);
        const nextEl = document.getElementById(`step-${step}`);
        const direction = step > bookingState.currentStep ? 1 : -1;

        gsap.to(currentEl, {
            opacity: 0,
            x: -50 * direction,
            duration: 0.4,
            onComplete: () => {
                currentEl.classList.add('hidden');
                nextEl.classList.remove('hidden');
                gsap.fromTo(nextEl, { opacity: 0, x: 50 * direction }, { opacity: 1, x: 0, duration: 0.6 });
            }
        });

        document.querySelectorAll('.step-nav-item').forEach((item, idx) => {
            item.classList.toggle('active', idx + 1 === step);
        });

        bookingState.currentStep = step;
        updateMainButton();
    }

    function nextStep() {
        if (bookingState.currentStep < 4) {
            goToStep(bookingState.currentStep + 1);
        } else {
            alert("¡Cita agendada con éxito! (Simulación)");
        }
    }

    function updateMainButton() {
        const btn = document.getElementById('main-action-btn');
        if (!btn) return;
        if (bookingState.currentStep === 4) {
            btn.innerHTML = `Confirmar y Finalizar <span class="material-symbols-outlined">check_circle</span>`;
            btn.classList.add('bg-cyan-600');
        } else {
            btn.innerHTML = `Siguiente Paso <span class="material-symbols-outlined">arrow_forward</span>`;
            btn.classList.remove('bg-cyan-600');
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
            gsap.to("#main-header", { opacity: 1, y: 0, duration: 1, ease: "power4.out", delay: 0.2 });
        }

        document.getElementById('study-search').addEventListener('input', (e) => {
            const activeBtn = document.querySelector('.category-btn.active');
            const activeCat = activeBtn ? activeBtn.getAttribute('onclick').match(/'([^']+)'/)[1] : 'all';
            renderStudies(activeCat, e.target.value);
        });

        renderStudies();
        updateOrderSummary();
    });
</script>

