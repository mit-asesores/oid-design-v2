<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // 1. Scrollytelling
        const video = document.getElementById("scrolly-video");
        if (video) {
            const initScrolly = () => {
                const scrollyTL = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#intro-scrolly",
                        start: "top top",
                        end: "+=250%",
                        scrub: true,
                        pin: true,
                        anticipatePin: 1
                    }
                });
                
                // Animación del video (currentTime)
                scrollyTL.to(video, { currentTime: video.duration || 5, ease: "none" }, 0);
                
                // Animación de los pasos de texto
                const steps = ["#step-1", "#step-2", "#step-3", "#step-4"];
                steps.forEach((step, index) => {
                    const startPos = index * 0.25;
                    const endPos = (index + 1) * 0.25;
                    scrollyTL.to(step, { opacity: 1, y: 0, duration: 0.1 }, startPos + 0.05)
                             .to(step, { opacity: 0, y: -30, duration: 0.1 }, endPos - 0.05);
                });

                // Transición de salida del video y entrada del Main
                scrollyTL.to(video, { scale: 0.85, borderRadius: "60px", filter: "blur(15px)", opacity: 0, duration: 0.3 }, 0.7)
                    .to("#intro-scrolly", { autoAlpha: 0, duration: 0.3 }, 0.8)
                    .from("main", { y: 200, opacity: 0, duration: 0.4, ease: "power2.out" }, 0.7)
                    .to("main", { marginTop: "-15vh", duration: 0.2 }, 0.8)
                    .to("#main-header", { opacity: 1, y: 0, duration: 0.4, onStart: () => { window.revealHeroContent(); } }, 0.8);
            };
            
            if (video.readyState >= 1) initScrolly(); 
            else video.onloadedmetadata = initScrolly;
        }

        // 2. Micro-transitions (Se activa al terminar el scrolly)
        window.revealHeroContent = () => {
            gsap.to(".hero-anim-item", { opacity: 1, y: 0, duration: 1.2, stagger: 0.15, ease: "power3.out" });
        };

        // 3. Parallax del Video Hero
        gsap.to(".hero-video-bg", { 
            scrollTrigger: { 
                trigger: ".hero-video-container", 
                start: "top top", 
                end: "bottom top", 
                scrub: true 
            }, 
            y: 80 
        });

        // 4. Carrusel de Sucursales Inteligente
        const carousel = document.getElementById('branches-carousel');
        const nextBtn = document.getElementById('next-branch');
        const prevBtn = document.getElementById('prev-branch');
        
        if (carousel && nextBtn && prevBtn) {
            const updateActiveBranch = () => {
                const items = carousel.querySelectorAll('.branch-item');
                const carouselCenter = carousel.offsetWidth / 2;
                
                let closestItem = null;
                let minDistance = Infinity;

                items.forEach(item => {
                    const rect = item.getBoundingClientRect();
                    const carouselRect = carousel.getBoundingClientRect();
                    const itemCenter = rect.left + (rect.width / 2) - carouselRect.left;
                    const distance = Math.abs(carouselCenter - itemCenter);

                    if (distance < minDistance) {
                        minDistance = distance;
                        closestItem = item;
                    }
                });

                items.forEach(item => {
                    item.classList.remove('branch-card--active');
                });

                if (closestItem) {
                    closestItem.classList.add('branch-card--active');
                }
            };

            // Ejecutar al cargar y al desplazar
            setTimeout(updateActiveBranch, 500);
            carousel.addEventListener('scroll', updateActiveBranch);

            const step = () => {
                const firstCard = carousel.querySelector('.branch-item');
                return firstCard ? firstCard.offsetWidth + 32 : 352;
            };

            nextBtn.addEventListener('click', () => { 
                carousel.scrollLeft += step();
            });
            
            prevBtn.addEventListener('click', () => { 
                carousel.scrollLeft -= step();
            });
        }
        // Centrado Inicial: Ir a Coapa (Índice 2) de forma silenciosa
    const coapaCard = carousel.querySelectorAll('.branch-item')[2];
    if(coapaCard) {
        setTimeout(() => {
            // Calculamos la posición para centrar la tarjeta sin mover la ventana global
            const scrollPos = coapaCard.offsetLeft - (carousel.offsetWidth / 2) + (coapaCard.offsetWidth / 2);
            carousel.scrollLeft = scrollPos;
            checkCenter(); // Resaltar visualmente
        }, 100);
    }

        // 5. Animación de Servicios (Stagger)
        gsap.to(".service-reveal", {
            scrollTrigger: {
                trigger: "#servicios",
                start: "top 80%",
            },
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.15,
            ease: "power3.out"
        });

    // --- INTERACCIONES DE CONFIANZA ---
    // 1. Efecto Magnético (Brillo siguiendo al mouse)
    const trustCards = document.querySelectorAll('.trust-card-interactive');
    trustCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    // 2. Animación de Entrada con GSAP
    gsap.to(".visual-anchor", {
        scrollTrigger: {
            trigger: "#autoridad",
            start: "top bottom",
            end: "bottom top",
            scrub: 1.5
        },
        y: 100,
        rotation: 25,
        ease: "none"
    });

    gsap.to(".trust-reveal-left", {
        scrollTrigger: {
            trigger: "#autoridad",
            start: "top 80%",
        },
        opacity: 1,
        x: 0,
        duration: 1.2,
        ease: "power4.out"
    });

    gsap.to(".trust-reveal-right", {
        scrollTrigger: {
            trigger: "#autoridad",
            start: "top 80%",
        },
        opacity: 1,
        y: 0,
        duration: 1,
        stagger: 0.15,
        ease: "power3.out"
    });
    // 3. Header dinámico al hacer scroll
    const header = document.getElementById('main-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
</script>
