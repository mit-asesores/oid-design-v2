<?php 
$pageTitle = "Agendar Cita | OrthoImagenDigital";
$pageDesc = "Reserva tu estudio radiológico o tomográfico en cualquiera de nuestras sucursales con tecnología de vanguardia.";
include_once 'includes/head.php'; 
?>
<?php include_once 'includes/header.php'; ?>

<!-- SEO & AEO: SCHEMA MARKUP (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "OrthoImagenDigital",
  "description": "Centro de radiología e imagen digital dental de alta gama en CDMX.",
  "url": "https://orthoimagendigital.com/citas.php",
  "medicalSpecialty": "Radiology",
  "offers": {
    "@type": "AggregateOffer",
    "offerCount": "17",
    "priceCurrency": "MXN"
  }
}
</script>

<style>
    /* 1. LAYOUT & CORE - ORTHO-PREMIUM DESIGN SYSTEM */
    nav#main-header { z-index: 1000 !important; background: rgba(255, 255, 255, 0.8) !important; backdrop-filter: blur(20px); border-bottom: 1px solid rgba(0,0,0,0.05); }
    main#booking-app { padding-top: 160px !important; background: radial-gradient(circle at top right, #f8fafc, #f1f5f9); }
    
    .booking-step {
        /* Contenedor estructural (se eliminaron los fondos, bordes y paddings redundantes) */
        width: 100%;
        height: 100%;
        transition: all 0.9s cubic-bezier(0.34, 1.56, 0.64, 1); /* CINE-EASING */
    }

    /* 2. SELECTION CARDS - HIGH END UI */
    .selection-card, .selection-card-mini {
        background: white;
        border: 1px solid #f1f5f9;
        border-radius: 2.5rem;
        display: flex;
        align-items: center;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .selection-card {
        padding: 1.5rem;
        gap: 1.25rem;
    }

    .selection-card-mini {
        padding: 1rem 1.25rem;
        gap: 0.75rem;
    }

    .promo-card {
        background: linear-gradient(145deg, #fffbeb 0%, #ffffff 100%);
        border-color: #fde68a;
    }

    .selection-card:hover, .selection-card-mini:hover {
        border-color: #06b6d4;
        box-shadow: 0 25px 50px -12px rgba(6, 182, 212, 0.15);
        transform: translateY(-5px);
    }

    .promo-card:hover {
        border-color: #f59e0b;
        box-shadow: 0 25px 50px -12px rgba(245, 158, 11, 0.15);
    }

    /* PREMIUM STATE - THE GLOW EFFECT */
    #booking-app .selection-card.selected, 
    #booking-app .selection-card-mini.selected {
        background: linear-gradient(135deg, #0891b2 0%, #0e7490 100%) !important;
        border-color: transparent !important;
        box-shadow: 0 30px 60px -12px rgba(8, 145, 178, 0.45) !important;
        transform: scale(1.03) translateY(-5px);
    }

    #booking-app .promo-card.selected {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        box-shadow: 0 30px 60px -12px rgba(245, 158, 11, 0.45) !important;
    }
    
    #booking-app .selection-card, #booking-app .selection-card-mini,
    #booking-app .selection-card h4, #booking-app .selection-card p,
    #booking-app .selection-card-mini p {
        transition: color 0.4s ease, background 0.4s ease, transform 0.4s ease;
    }

    #booking-app .selected h4, 
    #booking-app .selected p, 
    #booking-app .selected span {
        color: white !important;
    }

    /* 3. SIDEBAR DASHBOARD STYLE */
    .summary-sidebar {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(40px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        border-radius: 3.5rem;
        padding: 2.5rem;
        box-shadow: 0 30px 60px -15px rgba(15, 23, 42, 0.06);
    }

    /* 4. CHIPS CATEGORIES (CRO IMPROVEMENT) */
    .cat-chip {
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        border: 1px solid #f1f5f9;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        transition: all 0.3s ease;
        cursor: pointer;
        background-color: white;
        color: #94a3b8;
    }
    .cat-chip:hover {
        border-color: #a5f3fc;
        color: #0891b2;
    }
    .cat-chip.active {
        background-color: #0891b2;
        border-color: #0891b2;
        color: white;
        box-shadow: 0 10px 15px -3px rgba(8, 145, 178, 0.2), 0 4px 6px -4px rgba(8, 145, 178, 0.2);
    }

    /* 5. MOBILE FAB & SPACING */
    @media (max-width: 768px) {
        .selection-card-mini { margin-bottom: 0.5rem; }
        #mobile-action-bar {
            display: flex !important;
            position: fixed;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            z-index: 100;
        }
    }

    .summary-item.completed {
        opacity: 1 !important;
    }

    .summary-item.completed .material-symbols-outlined {
        color: #0891b2 !important;
        background: #ecfeff !important;
    }

    /* 4. BUTTONS & UI */
    .btn-step-next {
        background: #0f172a;
        color: white;
        padding: 1.5rem 2rem;
        border-radius: 2rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-size: 0.75rem;
        transition: all 0.4s;
        box-shadow: 0 15px 30px -5px rgba(15, 23, 42, 0.2);
    }

    .btn-step-next:hover {
        background: #0891b2;
        transform: translateY(-2px);
        box-shadow: 0 20px 40px -10px rgba(8, 145, 178, 0.3);
    }

    /* 5. CUSTOM SCROLLBAR */
    .custom-scrollbar::-webkit-scrollbar { width: 5px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #cbd5e1; }
</style>

<main id="booking-app" class="bg-slate-50 min-h-screen pb-32 overflow-visible">

    
    <div class="max-w-[1600px] mx-auto px-6">
        <!-- Dashboard Layout -->
        <div class="grid grid-cols-12 gap-8 items-start h-auto">
            
            <!-- LEFT SIDEBAR: Current Selections -->
            <aside class="col-span-12 lg:col-span-3 summary-sidebar sticky top-[140px] z-10">
                <div class="mb-10">
                    <span class="text-[9px] font-black tracking-[0.3em] text-cyan-600 uppercase opacity-70">Experiencia Digital</span>
                    <h2 class="text-2xl font-light text-slate-800 mt-2">Tu <span class="font-bold">Cita</span></h2>
                </div>

                <!-- SOCIAL PROOF (NUEVO) -->
                <div class="mb-8 p-4 bg-slate-50/80 rounded-2xl border border-slate-100/50 flex items-center gap-3">
                    <div class="flex -space-x-2">
                        <div class="w-6 h-6 rounded-full bg-cyan-100 border-2 border-white flex items-center justify-center text-[8px] font-bold">4.9</div>
                        <div class="w-6 h-6 rounded-full bg-slate-200 border-2 border-white"></div>
                    </div>
                    <div>
                        <p class="text-[9px] font-bold text-slate-700">+50k Diagnósticos</p>
                        <div class="flex text-[8px] text-amber-400">
                            <span class="material-symbols-outlined text-[10px]">star</span>
                            <span class="material-symbols-outlined text-[10px]">star</span>
                            <span class="material-symbols-outlined text-[10px]">star</span>
                            <span class="material-symbols-outlined text-[10px]">star</span>
                            <span class="material-symbols-outlined text-[10px]">star</span>
                        </div>
                    </div>
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
                <div id="step-1" class="booking-step active-step flex flex-col h-full">
                    <div class="mb-6 flex-shrink-0">
                        <h3 class="text-2xl font-light text-slate-900 mb-1">Personaliza tu <span class="font-bold">Diagnóstico</span></h3>
                        <p class="text-slate-400 text-[9px] tracking-[0.2em] uppercase font-black">Módulo 01: Servicios de Alta Precisión</p>
                    </div>

                    <!-- 1.1 Estudios Populares -->
                    <div class="mb-8 flex-shrink-0">
                        <span class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] block mb-4">Sugerencias Clínicas</span>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="selection-card-mini promo-card group" data-study-id="st-1" onclick="toggleStudy('st-1', 950, 'Ortodóntico Completo (Caja de cartón)')">
                                <div class="absolute top-0 right-0 bg-gradient-to-l from-amber-400 to-amber-500 text-white text-[7px] font-black uppercase tracking-widest px-2 py-0.5 rounded-bl-xl shadow-sm z-10">Promo</div>
                                <div class="flex-grow min-w-0 pr-3 mt-1">
                                    <p class="text-xs font-bold text-slate-700 transition-colors line-clamp-2">Ortodóntico Completo (caja de cartón)</p>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <p class="text-[11px] font-black text-amber-600 transition-colors">$950.00</p>
                                        <p class="text-[9px] font-medium text-slate-400 line-through transition-colors">$1,250.00</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined flex-shrink-0 text-amber-300 group-hover:text-amber-500 text-lg transition-colors mt-1">sell</span>
                            </div>
                            <div class="selection-card-mini promo-card group" data-study-id="rx-p" onclick="toggleStudy('rx-p', 237.60, 'Panorámica (ortopantomografía)')">
                                <div class="absolute top-0 right-0 bg-gradient-to-l from-amber-400 to-amber-500 text-white text-[7px] font-black uppercase tracking-widest px-2 py-0.5 rounded-bl-xl shadow-sm z-10">Promo</div>
                                <div class="flex-grow min-w-0 pr-3 mt-1">
                                    <p class="text-xs font-bold text-slate-700 transition-colors line-clamp-2">Panorámica (ortopantomografía)</p>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <p class="text-[11px] font-black text-amber-600 transition-colors">$237.60</p>
                                        <p class="text-[9px] font-medium text-slate-400 line-through transition-colors">$350.00</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined flex-shrink-0 text-amber-300 group-hover:text-amber-500 text-lg transition-colors mt-1">sell</span>
                            </div>
                            <div class="selection-card-mini promo-card group" data-study-id="tm-1" onclick="toggleStudy('tm-1', 1790.00, 'Tomografía completa (USB)')">
                                <div class="absolute top-0 right-0 bg-gradient-to-l from-amber-400 to-amber-500 text-white text-[7px] font-black uppercase tracking-widest px-2 py-0.5 rounded-bl-xl shadow-sm z-10">Promo</div>
                                <div class="flex-grow min-w-0 pr-3 mt-1">
                                    <p class="text-xs font-bold text-slate-700 transition-colors line-clamp-2">Tomografía completa (USB)</p>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <p class="text-[11px] font-black text-amber-600 transition-colors">$1,790.00</p>
                                        <p class="text-[9px] font-medium text-slate-400 line-through transition-colors">$2,200.00</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined flex-shrink-0 text-amber-300 group-hover:text-amber-500 text-lg transition-colors mt-1">sell</span>
                            </div>
                            <div class="selection-card-mini promo-card group" data-study-id="sc-1" onclick="toggleStudy('sc-1', 750.00, 'Escaneo intraoral + impresión 3D')">
                                <div class="absolute top-0 right-0 bg-gradient-to-l from-amber-400 to-amber-500 text-white text-[7px] font-black uppercase tracking-widest px-2 py-0.5 rounded-bl-xl shadow-sm z-10">Promo</div>
                                <div class="flex-grow min-w-0 pr-3 mt-1">
                                    <p class="text-xs font-bold text-slate-700 transition-colors line-clamp-2">Escaneo intraoral + impresión 3D</p>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <p class="text-[11px] font-black text-amber-600 transition-colors">$750.00</p>
                                        <p class="text-[9px] font-medium text-slate-400 line-through transition-colors">$950.00</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined flex-shrink-0 text-amber-300 group-hover:text-amber-500 text-lg transition-colors mt-1">sell</span>
                            </div>
                        </div>
                    </div>

                    <!-- 1.2 Buscador Integrado (CRO IMPROVEMENT) -->
                    <div class="mb-6 flex-shrink-0">
                        <div class="relative mb-4">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                            <input type="text" id="study-search" oninput="renderStudies('all', this.value)" placeholder="Encuentra tu estudio (ej. Panorámica, Tomografía...)" 
                                   class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-4 pl-12 pr-4 text-sm focus:bg-white focus:border-cyan-200 focus:ring-4 focus:ring-cyan-500/5 transition-all outline-none">
                        </div>
                        
                        <div class="flex flex-wrap gap-2">
                            <div class="cat-chip active" onclick="filterCategory('all', this)">Todos</div>
                            <div class="cat-chip" onclick="filterCategory('radiologia', this)">Radiología</div>
                            <div class="cat-chip" onclick="filterCategory('tomografia', this)">Tomografía</div>
                            <div class="cat-chip" onclick="filterCategory('escaneo', this)">Escaneo 3D</div>
                            <div class="cat-chip" onclick="filterCategory('otros', this)">Complementos</div>
                        </div>
                    </div>
                    
                    <div id="filter-container" class="expanded">
                        <div id="studies-grid" class="grid grid-cols-1 lg:grid-cols-2 gap-4 pb-8 pt-4 px-6 -mx-6 max-h-[400px] overflow-y-auto custom-scrollbar">
                            <!-- Inyectados -->
                        </div>
                    </div>
                    
                    <p class="mt-4 text-[10px] text-slate-400 italic text-center">¿No encuentras lo que necesitas? Tu médico nos enviará la orden definitiva en tu visita.</p>
                </div>

                <!-- STEP 2: Branch Selection -->
                <div id="step-2" class="booking-step hidden opacity-0 translate-x-20 flex flex-col">
                    <div class="mb-6 flex-shrink-0">
                        <h3 class="text-2xl font-light text-slate-900 mb-1">Siguiente Paso: <span class="font-bold">Ubicación</span></h3>
                        <p class="text-slate-400 text-[9px] tracking-[0.2em] uppercase font-black">Instalaciones de Vanguardia</p>
                    </div>
                    
                    <div class="space-y-4 pb-8 pt-4 px-6 -mx-6 overflow-y-auto custom-scrollbar max-h-[500px]">
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
                                <img src="img/clinic_ajusco_lobby_1777595933587.png" alt="Sucursal OID Ajusco - Radiología e Imagen Digital" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
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
                                <img src="img/clinic_cruzroja_lobby_v2_1777595951555.png" alt="Sucursal OID Polanco Cruz Roja - Radiología e Imagen Digital" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
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
                    <div class="mb-6 flex-shrink-0">
                        <h3 class="text-2xl font-light text-slate-900 mb-1">Asegura tu <span class="font-bold">Espacio</span></h3>
                        <p class="text-slate-400 text-[9px] tracking-[0.2em] uppercase font-black">Disponibilidad en Tiempo Real</p>
                    </div>

                    <div class="space-y-8 overflow-y-auto pr-2 custom-scrollbar">
                        <div id="date-cards-container" class="flex gap-4 overflow-x-auto pb-4 custom-scrollbar">
                            <!-- Dynamic Date Cards Generated via JS -->
                        </div>

                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-4">Horarios Disponibles</p>
                            <div class="grid grid-cols-3 md:grid-cols-4 gap-3">
                                <button onclick="selectTime('09:00 AM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">09:00 AM</button>
                                <button onclick="selectTime('10:00 AM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">10:00 AM</button>
                                <button onclick="selectTime('11:00 AM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">11:00 AM</button>
                                <button onclick="selectTime('12:00 PM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">12:00 PM</button>
                                <button onclick="selectTime('01:00 PM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">01:00 PM</button>
                                <button onclick="selectTime('04:00 PM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">04:00 PM</button>
                                <button onclick="selectTime('05:00 PM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">05:00 PM</button>
                                <button onclick="selectTime('06:00 PM')" class="p-4 rounded-2xl border border-slate-100 text-xs font-bold text-slate-600 hover:border-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-all shadow-sm">06:00 PM</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STEP 4: Patient -->
                <div id="step-4" class="booking-step hidden opacity-0 translate-x-20 h-full flex flex-col">
                    <div class="mb-6 flex-shrink-0">
                        <h3 class="text-2xl font-light text-slate-900 mb-1">Tus <span class="font-bold">Datos</span></h3>
                        <p class="text-slate-400 text-[9px] tracking-[0.2em] uppercase font-black">Información para tu Registro Clínico</p>
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

                <button id="main-action-btn" onclick="nextStep()" class="w-full btn-step-next flex items-center justify-center gap-3">
                    Continuar Reservación
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </button>

                <!-- MOBILE FLOATING ACTION BAR (NUEVO) -->
                <div id="mobile-action-bar" class="hidden">
                    <button onclick="nextStep()" class="w-full h-16 bg-cyan-600 text-white rounded-full font-bold shadow-2xl flex items-center justify-center gap-3">
                        <span id="mobile-btn-text">Continuar</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
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

        if (filtered.length === 0) {
            grid.innerHTML = '<div class="col-span-full py-10 text-center"><p class="text-slate-400 text-xs italic">No encontramos estudios que coincidan con tu búsqueda.</p></div>';
            return;
        }

        grid.innerHTML = filtered.map(s => `
            <div class="selection-card-mini group ${bookingState.selectedStudies.some(sel => sel.id === s.id) ? 'selected' : ''}" 
                 data-study-id="${s.id}" 
                 onclick="toggleStudy('${s.id}', ${s.price}, '${s.name}')">
                <div class="flex-grow min-w-0 pr-3">
                    <p class="text-xs font-bold text-slate-700 transition-colors line-clamp-2">${s.name}</p>
                    <p class="text-[11px] font-medium text-cyan-600 transition-colors mt-0.5">$${s.price.toFixed(2)}</p>
                </div>
                <span class="material-symbols-outlined flex-shrink-0 text-slate-300 group-hover:text-cyan-500 text-lg transition-colors">add_circle</span>
            </div>
        `).join('');
    }

    function filterCategory(cat, element) {
        document.querySelectorAll('.cat-chip').forEach(chip => chip.classList.remove('active'));
        if (element) element.classList.add('active');
        renderStudies(cat, document.getElementById('study-search').value);
    }

    function toggleFilters() {
        const container = document.getElementById('filter-container');
        const icon = document.getElementById('filter-icon');
        if (!container || !icon) return;
        container.classList.toggle('expanded');
        icon.innerText = container.classList.contains('expanded') ? 'expand_less' : 'expand_more';
    }

    function formatDateToDDMMYYYY(dateObj) {
        const d = String(dateObj.getDate()).padStart(2, '0');
        const m = String(dateObj.getMonth() + 1).padStart(2, '0');
        const y = dateObj.getFullYear();
        return `${d}/${m}/${y}`;
    }

    function renderDateCards() {
        const container = document.getElementById('date-cards-container');
        if (!container) return;

        const months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
        const days = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

        let html = '';

        for (let i = 0; i < 3; i++) {
            const dateObj = new Date();
            dateObj.setDate(dateObj.getDate() + i);

            const dayName = days[dateObj.getDay()];
            const dayNum = String(dateObj.getDate()).padStart(2, '0');
            const monthName = months[dateObj.getMonth()];
            const formattedDate = formatDateToDDMMYYYY(dateObj); // dd/MM/yyyy

            let label = '';
            if (i === 0) label = 'Hoy';
            else if (i === 1) label = 'Mañana';
            else label = dayName;

            html += `
                <div class="min-w-[90px] p-3 rounded-2xl border-2 border-slate-100 bg-white text-center cursor-pointer opacity-60 hover:opacity-100 hover:border-cyan-200 transition-all date-card" onclick="selectDate('${formattedDate}', '${label}', '${dayNum} ${monthName}', this)">
                    <p class="text-[9px] text-slate-400 font-black uppercase tracking-widest mb-1">${label}</p>
                    <p class="text-xl font-bold text-slate-800">${dayNum} <span class="text-sm">${monthName}</span></p>
                    <p class="text-[9px] text-slate-400 mt-1">${dayName}</p>
                </div>
            `;
        }

        html += `
            <div class="min-w-[90px] p-3 rounded-2xl border-2 border-slate-100 bg-white text-center cursor-pointer opacity-60 hover:opacity-100 hover:border-cyan-200 transition-all date-card relative flex flex-col justify-center items-center overflow-hidden" onclick="document.getElementById('custom-date-picker').showPicker()">
                <input type="date" id="custom-date-picker" class="absolute w-0 h-0 opacity-0" onchange="handleCustomDate(this)">
                <span class="material-symbols-outlined text-slate-400 text-2xl mb-1 transition-colors">calendar_month</span>
                <p id="custom-date-label" class="text-[10px] font-bold text-slate-600">Elegir Fecha</p>
            </div>
        `;

        container.innerHTML = html;
        
        // Auto-select today
        const firstCard = container.querySelector('.date-card');
        if (firstCard) firstCard.click();
    }

    function handleCustomDate(input) {
        if (!input.value) return;
        const parts = input.value.split('-');
        const formattedDate = `${parts[2]}/${parts[1]}/${parts[0]}`;
        
        const dateObj = new Date(input.value + "T00:00:00");
        const days = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        const months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
        const dayName = days[dateObj.getDay()];
        const monthName = months[dateObj.getMonth()];
        const displaySub = `${parts[2]} ${monthName}`;

        const calendarCard = input.parentElement;
        selectDate(formattedDate, dayName, displaySub, calendarCard);
        calendarCard.querySelector('#custom-date-label').innerText = formattedDate;
    }

    function selectDate(dateStr, label, displaySub, element) {
        bookingState.schedule = { ...bookingState.schedule, date: dateStr, displayLabel: label, displaySub: displaySub };
        
        document.querySelectorAll('#step-3 .flex.gap-4 > div').forEach(el => {
            el.classList.remove('border-cyan-500', 'bg-cyan-50', 'opacity-100');
            el.classList.add('border-slate-100', 'bg-white', 'opacity-60');
        });
        
        element.classList.add('border-cyan-500', 'bg-cyan-50', 'opacity-100');
        element.classList.remove('border-slate-100', 'bg-white', 'opacity-60');

        const summaryEl = document.getElementById('summary-schedule');
        if (summaryEl && bookingState.schedule.time) {
            summaryEl.classList.add('completed');
            summaryEl.querySelector('p.text-sm').innerText = `${label} ${displaySub} - ${bookingState.schedule.time}`;
        }
    }

    function selectBranch(name, address) {
        bookingState.branch = { name, address };
        const summaryEl = document.getElementById('summary-branch');
        if (summaryEl) {
            summaryEl.classList.add('completed');
            const paragraphs = summaryEl.querySelectorAll('p');
            if(paragraphs.length >= 2) {
                paragraphs[0].innerText = name;
                paragraphs[1].innerText = address;
            }
        }
        document.querySelectorAll('#step-2 .selection-card').forEach(card => {
            card.classList.toggle('selected', card.querySelector('h4').innerText === name);
        });
        setTimeout(() => goToStep(3), 600);
    }

    function selectTime(time) {
        bookingState.schedule.time = time;
        const summaryEl = document.getElementById('summary-schedule');
        if (summaryEl) {
            summaryEl.classList.add('completed');
            const lbl = bookingState.schedule.displayLabel || '';
            const sub = bookingState.schedule.displaySub || bookingState.schedule.date || '';
            summaryEl.querySelector('p.text-sm').innerText = `${lbl} ${sub} - ${time}`;
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
        const mobileBtn = document.getElementById('mobile-btn-text');
        
        if (!btn) return;
        
        if (bookingState.currentStep === 4) {
            const finalTxt = `Agendar Cita Ahora`;
            btn.innerHTML = `${finalTxt} <span class="material-symbols-outlined">check_circle</span>`;
            btn.classList.add('bg-cyan-600');
            if (mobileBtn) mobileBtn.innerText = finalTxt;
        } else {
            const nextTxt = `Continuar Reservación`;
            btn.innerHTML = `${nextTxt} <span class="material-symbols-outlined">arrow_forward</span>`;
            btn.classList.remove('bg-cyan-600');
            if (mobileBtn) mobileBtn.innerText = `Continuar`;
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

        renderDateCards();
        renderStudies();
        updateOrderSummary();
    });
</script>

