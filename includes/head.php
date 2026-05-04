<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrthoImagenDigital | Diagnóstico Dental de Alta Precisión y Baja Radiación</title>
    
    <!-- AI-SEO & Semantic Metadata -->
    <meta name="description" content="Líder en radiología dental en México con tecnología Planmeca Ultra Low Dose. Diagnósticos 3D HD, tomografías y radiografías con la mínima radiación. Alianza estratégica con la Cruz Roja Mexicana.">
    <meta name="keywords" content="radiología dental méxico, tomografía dental 3d, radiografía panorámica digital, planmeca ultra low dose, diagnóstico maxilofacial precisión">
    <link rel="canonical" href="https://orthoimagendigital.com/" />
    
    <!-- Open Graph / AI Search Resumes -->
    <meta property="og:title" content="OrthoImagenDigital: Claridad Clínica con Seguridad Total">
    <meta property="og:description" content="Descubre el diagnóstico dental del futuro. Imágenes HD, entrega digital inmediata por OrthoCloud y el respaldo de la Cruz Roja Mexicana.">
    <meta property="og:image" content="img/screen.png">
    <meta property="og:url" content="https://orthoimagendigital.com/">
    <meta property="og:type" content="website">

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">
    
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
        .visual-anchor {
            position: absolute;
            top: 10% !important;
            right: -10% !important;
            width: 70% !important;
            opacity: 0.25 !important;
            filter: blur(1px);
            z-index: 0;
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-surface-bright font-sans text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
