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
            if (document.querySelector(".hero-anim-item")) {
                gsap.to(".hero-anim-item", { opacity: 1, y: 0, duration: 1.2, stagger: 0.15, ease: "power3.out" });
            }
        };

        // 4. Parallax del Video Hero
        if (document.querySelector(".hero-video-bg") && document.querySelector(".hero-video-container")) {
            gsap.to(".hero-video-bg", { 
                scrollTrigger: { 
                    trigger: ".hero-video-container", 
                    start: "top top", 
                    end: "bottom top", 
                    scrub: true 
                }, 
                y: 80 
            });
        }

        // 5. Animación de Servicios
        if (document.querySelector(".service-reveal") && document.querySelector("#estudios")) {
            gsap.to(".service-reveal", {
                scrollTrigger: {
                    trigger: "#estudios",
                    start: "top 80%",
                },
                opacity: 1,
                y: 0,
                duration: 1,
                stagger: 0.15,
                ease: "power3.out"
            });
        }

        // 6. Lógica de Menú Móvil (Hardened)
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu-overlay');
        const menuLinks = document.querySelectorAll('.mobile-nav-link');

        if (mobileBtn && mobileMenu) {
            // Estado Inicial Silencioso - Forzado
            gsap.set(mobileMenu, { x: "100%", opacity: 0, display: "none", pointerEvents: "none" });

            let isMenuOpen = false;

            const toggleMenu = (e) => {
                if (!isMenuOpen) {
                    isMenuOpen = true;
                    mobileMenu.classList.add('active');
                    document.body.classList.add('mobile-menu-open');
                    
                    mobileBtn.innerHTML = '<span class="material-symbols-outlined text-3xl">close</span>';
                    mobileBtn.style.color = "white";

                    gsap.killTweensOf(mobileMenu);
                    gsap.set(mobileMenu, { display: "flex", pointerEvents: "auto" });
                    gsap.to(mobileMenu, {
                        x: 0,
                        opacity: 1,
                        duration: 0.5,
                        ease: "expo.out"
                    });

                    if (menuLinks.length > 0) {
                        gsap.fromTo(menuLinks, 
                            { opacity: 0, y: 20 },
                            { opacity: 1, y: 0, stagger: 0.1, duration: 0.4, delay: 0.2, ease: "power2.out" }
                        );
                    }
                } else {
                    isMenuOpen = false;
                    gsap.to(mobileMenu, {
                        x: "100%",
                        opacity: 0,
                        duration: 0.4,
                        ease: "expo.in",
                        onComplete: () => {
                            mobileMenu.classList.remove('active');
                            gsap.set(mobileMenu, { display: "none", pointerEvents: "none" });
                            document.body.classList.remove('mobile-menu-open');
                            mobileBtn.innerHTML = '<span class="material-symbols-outlined text-3xl">menu</span>';
                            mobileBtn.style.color = "";
                        }
                    });
                }
            };

            mobileBtn.addEventListener('click', toggleMenu);
            menuLinks.forEach(link => link.addEventListener('click', () => {
                if (isMenuOpen) toggleMenu();
            }));
        }

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

    // 2. Animación de Entrada y Paralaje (Contenedor)
    gsap.to(".visual-anchor-container", {
        scrollTrigger: {
            trigger: "#autoridad",
            start: "top bottom",
            end: "bottom top",
            scrub: 1.5
        },
        y: 120,
        rotation: 10,
        ease: "none"
    });

    // 2.1 Efecto de Flotación (Holograma vivo)
    gsap.to(".visual-anchor", {
        y: "+=20",
        x: "+=10",
        rotation: "+=5",
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut"
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

    // 5. Cinematic Swiper Initialization (Aislado para evitar conflictos)
    try {
        if (document.querySelector('.branches-slider')) {
            const branchesSwiper = new Swiper('.branches-slider', {
                slidesPerView: 'auto',
                centeredSlides: true,
                spaceBetween: 40,
                loop: false, /* Desactivado para evitar el salto al inicio */
                speed: 600,
                grabCursor: true,
                watchSlidesProgress: true,
                navigation: {
                    nextEl: '.branches-slider-container .branch-next',
                    prevEl: '.branches-slider-container .branch-prev',
                },
                keyboard: {
                    enabled: true,
                }
            });
        }
    } catch (e) {
        console.error("Swiper init error:", e);
    }
});
</script>
