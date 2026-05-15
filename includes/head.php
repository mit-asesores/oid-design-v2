<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php 
        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
        $full_url = $protocol . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $canonical_url = isset($custom_canonical) ? $custom_canonical : explode('?', $full_url)[0];
    ?>
    <title><?php echo isset($page_title) ? $page_title : 'OrthoImagenDigital | Diagnóstico Dental de Alta Precisión'; ?></title>
    
    <!-- AI-SEO & Semantic Metadata -->
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Líder en radiología dental en México con tecnología Planmeca Ultra Low Dose. Diagnósticos 3D HD, tomografías y radiografías con la mínima radiación.'; ?>">
    <meta name="keywords" content="radiología dental méxico, tomografía dental 3d, radiografía panorámica digital, planmeca ultra low dose, diagnóstico maxilofacial precisión">
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    
    <!-- Open Graph / AI Search Resumes -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'OrthoImagenDigital: Claridad Clínica con Seguridad Total'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Descubre el diagnóstico dental del futuro. Imágenes HD, entrega digital inmediata por OrthoCloud.'; ?>">
    <meta property="og:image" content="img/screen.png">
    <meta property="og:url" content="https://orthoimagendigital.com/">
    <meta property="og:type" content="website">

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    
    <!-- Google Fonts & Icons (Restoring original weights and Fill axis) -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Tailwind CDN with ORIGINAL tokens -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
          tailwind.config = {
            theme: {
              extend: {
                fontFamily: {
                    sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    headline: ['"Plus Jakarta Sans"', 'sans-serif'],
                    body: ['"Plus Jakarta Sans"', 'sans-serif'],
                    label: ['Manrope', 'sans-serif']
                },
                colors: {
                    "primary": "#006876",
                    "primary-container": "#00bcd4",
                    "primary-fixed": "#a1efff",
                    "primary-fixed-dim": "#44d8f1",
                    "secondary": "#006e1c",
                    "secondary-fixed": "#94f990",
                    "secondary-fixed-dim": "#78dc77",
                    "tertiary": "#5f5e5e",
                    "surface-bright": "#f8f9fa",
                    "on-surface": "#191c1d",
                    "on-surface-variant": "#3c494c",
                    "outline-variant": "#bbc9cc",
                    "cyan": {
                        50: '#ecfeff',
                        100: '#cffafe',
                        500: '#06b6d4',
                        600: '#0891b2',
                        900: '#164e63',
                    }
                }
              },
            },
          }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .aura-blob {
            filter: blur(100px);
            opacity: 0.15;
            z-index: -1;
            will-change: transform;
        }
        /* Restaurar efectos de tarjetas que perdieron profundidad */
        .clinical-card, .glass-card {
            background: rgba(255, 255, 255, 0.6) !important;
            backdrop-filter: blur(20px) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
        }
        /* Visual Anchor contained in main.css */

        /* --- CINEMATIC BRANCHES (DYNAMIC FOCUS) --- */
        .branches-slider .swiper-slide {
            width: 420px; /* Ancho fijo para mantener la proporción */
            transition: all 0.8s cubic-bezier(0.2, 0, 0, 1);
        }

        /* --- COMPACT PREMIUM BRANCH CARDS --- */
        .branch-card-premium {
            display: flex;
            flex-direction: column;
            background: white;
            border-radius: 32px;
            overflow: hidden;
            height: 560px; /* Mucho más equilibrado */
            box-shadow: 0 15px 35px rgba(0,0,0,0.04);
            border: 1px solid rgba(0, 104, 118, 0.05);
            transition: all 0.4s ease;
        }

        .branch-img-container {
            width: 100%;
            height: 220px; /* Reducido para dar peso a la info */
            overflow: hidden;
            position: relative;
            background: #0f172a;
        }

        .branch-content-area {
            padding: 30px 25px; /* Más compacto */
            flex: 1;
            display: flex;
            flex-direction: column;
            background: #ffffff;
        }

        .branch-tag {
            font-size: 8px;
            font-weight: 800;
            letter-spacing: 0.12em;
            color: #006876;
            text-transform: uppercase;
            background: rgba(0, 104, 118, 0.05);
            padding: 3px 10px;
            border-radius: 100px;
            display: inline-block;
            margin-bottom: 12px;
        }

        .branch-title {
            font-size: 20px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 20px;
        }

        .branch-info-row {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
            align-items: flex-start;
        }

        .branch-icon {
            color: #006876;
            font-size: 18px !important;
        }

        .branch-text {
            font-size: 13px;
            line-height: 1.5;
            color: #64748b;
        }

        .branch-horarios-label {
            font-size: 9px;
            font-weight: 800;
            color: #94a3b8;
            margin-top: auto;
            margin-bottom: 4px;
        }

        .branch-horarios-value {
            font-size: 12px;
            color: #475569;
            font-weight: 500;
            margin-bottom: 20px;
        }

        /* --- MAGNETIC AURA EFFECT --- */
        .branches-slider {
            padding: 60px 0 100px 0 !important; 
            overflow: hidden !important; /* Evita que las slides estallen el viewport */
        }

        .swiper-slide {
            transition: all 0.6s cubic-bezier(0.2, 0, 0, 1);
            opacity: 0.5;
            filter: blur(2px);
        }

        .swiper-slide-active {
            opacity: 1;
            filter: blur(0);
        }

        .swiper-slide-active .branch-card-premium {
            transform: translateY(-20px);
            box-shadow: 0 40px 80px rgba(0, 104, 118, 0.15);
        }

        /* El Aura */
        .swiper-slide-active::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            background: radial-gradient(circle, rgba(0, 104, 118, 0.15) 0%, transparent 70%);
            z-index: -1;
            filter: blur(40px);
            animation: aura-pulse 4s infinite alternate ease-in-out;
        }

        @keyframes aura-pulse {
            from { opacity: 0.4; transform: translate(-50%, -50%) scale(1); }
            to { opacity: 0.8; transform: translate(-50%, -50%) scale(1.1); }
        }

        /* --- SOCIAL PROOF & RATING --- */
        .branch-rating {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 6px 12px;
            border-radius: 100px;
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 700;
            color: #0f172a;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            z-index: 10;
        }

        .branch-rating span {
            color: #f59e0b; /* Gold star */
            font-size: 14px !important;
        }

        /* --- AMENITIES --- */
        .branch-amenities {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
        }

        .amenity-tag {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 10px;
            font-weight: 600;
            color: #64748b;
            background: #f1f5f9;
            padding: 4px 10px;
            border-radius: 6px;
        }

        /* --- DUAL ACTION BUTTONS --- */
        .branch-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: auto;
        }

        .btn-action-premium {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px;
            border-radius: 14px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-booking {
            background: #006876;
            color: white;
            box-shadow: 0 15px 30px rgba(0, 104, 118, 0.2);
        }

        .btn-booking:hover {
            background: #004d57;
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0, 104, 118, 0.3);
        }

        .btn-location {
            background: white;
            color: #64748b;
            border: 1px solid #e2e8f0;
        }

        .btn-location:hover {
            background: #f8fafc;
            border-color: #006876;
            color: #006876;
            transform: translateY(-3px);
        }

        /* --- SWIPER NAVIGATION CONTROLS --- */
        .swiper-nav-premium {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: white;
            border: 1px solid rgba(0, 104, 118, 0.1);
            color: #006876;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
        .swiper-nav-premium:hover {
            background: #006876;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 104, 118, 0.2);
        }
        .swiper-nav-premium.swiper-button-disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        /* --- FOOTER PREMIUM REFINEMENT --- */
        .footer-clinical {
            background: #f8fafc;
            padding: 100px 0 50px;
            position: relative;
            border-top: 1px solid rgba(0, 104, 118, 0.05);
        }

        .footer-title {
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #006876;
            margin-bottom: 30px;
        }

        .footer-nav-link {
            font-size: 14px;
            font-weight: 300;
            color: #64748b;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-nav-link:hover {
            color: #006876;
            transform: translateX(5px);
        }

        .social-link {
            width: 45px;
            height: 45px;
            border-radius: 15px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .social-link:hover {
            background: #006876;
            color: white;
            transform: translateY(-5px) rotate(8deg);
        }

        .footer-copy {
            font-size: 10px;
            color: #94a3b8;
            letter-spacing: 0.2em;
            text-align: center;
            font-weight: 600;
        }

        html, body {
            max-width: 100% !important;
            overflow-x: hidden !important;
        }

        /* --- MOBILE MENU REFINEMENTS --- */
        html.mobile-menu-open, body.mobile-menu-open {
            overflow: hidden !important;
            height: 100vh !important;
            width: 100%;
        }
        
        #mobile-menu-overlay {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease;
        }

        #mobile-menu-overlay.active {
            transform: translateX(0);
            opacity: 1;
        }

        .mobile-nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .mobile-nav-link:active {
            color: #006876;
        }

        /* Adjustments for smaller screens */
        @media (max-width: 768px) {
            .branches-slider .swiper-slide {
                width: 320px;
            }
            .branch-card-premium {
                height: 520px;
            }
        }
        .icon-tint {
            background-color: currentColor;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            -webkit-mask-size: contain;
            mask-size: contain;
            -webkit-mask-position: center;
            mask-position: center;
            width: 100%;
            height: 100%;
            display: block;
        }
    </style>

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body class="bg-surface-bright font-sans text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed overflow-x-hidden">
    <div id="page-wrapper" class="w-full overflow-x-hidden relative">
