<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script id="tailwind-config">
          tailwind.config = {
            darkMode: "class",
            theme: {
              extend: {
                "colors": {
                        "primary-container": "#00bcd4",
                        "secondary-fixed-dim": "#78dc77",
                        "surface-bright": "#f8f9fa",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#00731e",
                        "on-tertiary-fixed-variant": "#474747",
                        "tertiary-fixed": "#e4e2e1",
                        "outline-variant": "#bbc9cc",
                        "secondary-container": "#91f78e",
                        "surface-container-low": "#f3f4f5",
                        "on-primary-container": "#004650",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#94f990",
                        "surface": "#f8f9fa",
                        "on-secondary-fixed-variant": "#005313",
                        "inverse-on-surface": "#f0f1f2",
                        "on-primary": "#ffffff",
                        "surface-variant": "#e1e3e4",
                        "on-background": "#191c1d",
                        "surface-tint": "#006876",
                        "primary-fixed": "#a1efff",
                        "error-container": "#ffdad6",
                        "primary-fixed-dim": "#44d8f1",
                        "on-error": "#ffffff",
                        "on-primary-fixed": "#001f25",
                        "surface-dim": "#d9dadb",
                        "on-surface-variant": "#3c494c",
                        "surface-container-high": "#e7e8e9",
                        "on-secondary-fixed": "#002204",
                        "on-surface": "#191c1d",
                        "inverse-primary": "#44d8f1",
                        "outline": "#6c797c",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed": "#1b1c1c",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "primary": "#006876",
                        "surface-container-highest": "#e1e3e4",
                        "background": "#f8f9fa",
                        "on-tertiary-container": "#403f3f",
                        "on-primary-fixed-variant": "#004e59",
                        "surface-container": "#edeeef",
                        "tertiary-fixed-dim": "#c8c6c6",
                        "tertiary-container": "#acabab",
                        "secondary": "#006e1c",
                        "inverse-surface": "#2e3132",
                        "tertiary": "#5f5e5e"
                },
                "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                },
                "fontFamily": {
                        "headline": ["Inter"],
                        "body": ["Inter"],
                        "label": ["Manrope"]
                }
              },
            },
          }
    </script>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body class="bg-background font-body text-on-background selection:bg-primary-fixed selection:text-on-primary-fixed <?php echo (basename($_SERVER['PHP_SELF']) != 'index.php') ? 'not-home' : ''; ?>">
