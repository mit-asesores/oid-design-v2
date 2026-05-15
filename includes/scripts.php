<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // 2. Micro-transitions (Se activa al terminar el scrolly o como fallback)
        window.revealHeroContent = () => {
            if (window.heroContentRevealed) return;
            window.heroContentRevealed = true;
            
            const heroItems = document.querySelectorAll(".hero-anim-item");
            if (heroItems.length > 0) {
                gsap.to(heroItems, { 
                    opacity: 1, 
                    y: 0, 
                    duration: 1.2, 
                    stagger: 0.15, 
                    ease: "power3.out",
                    force3D: true,
                    clearProps: "transform" // Evita conflictos con parallax posterior
                });
            }
        };

        const canvas = document.getElementById("scrolly-canvas");
        if (canvas) {
            const context = canvas.getContext("2d");
            const frameCount = 40;
            const currentFrame = index => `video/index_transicion_3/ezgif-frame-${(index + 1).toString().padStart(3, '0')}.jpg`;
            
            const images = [];
            const videoFrames = { frame: 0 };

            // Preload images
            for (let i = 0; i < frameCount; i++) {
                const img = new Image();
                img.src = currentFrame(i);
                images.push(img);
            }

            const render = () => {
                if (!images[videoFrames.frame]) return;
                
                const img = images[videoFrames.frame];
                const canvasAspect = canvas.width / canvas.height;
                const imgAspect = img.width / img.height;
                
                let drawWidth, drawHeight, offsetX, offsetY;

                if (canvasAspect > imgAspect) {
                    drawWidth = canvas.width;
                    drawHeight = canvas.width / imgAspect;
                    offsetX = 0;
                    offsetY = (canvas.height - drawHeight) / 2;
                } else {
                    drawWidth = canvas.height * imgAspect;
                    drawHeight = canvas.height;
                    offsetX = (canvas.width - drawWidth) / 2;
                    offsetY = 0;
                }

                context.clearRect(0, 0, canvas.width, canvas.height);
                context.drawImage(img, offsetX, offsetY, drawWidth, drawHeight);
            };

            const resizeCanvas = () => {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                render();
            };

            window.addEventListener('resize', resizeCanvas);
            resizeCanvas();

            const initScrolly = () => {
                const scrollyTL = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#intro-scrolly",
                        start: "top top",
                        end: "+=400%",
                        scrub: 1.2,
                        pin: true,
                        anticipatePin: 1
                    }
                });
                
                // Animación de frames del canvas
                scrollyTL.to(videoFrames, { 
                    frame: frameCount - 1, 
                    snap: "frame", 
                    ease: "none", 
                    onUpdate: render 
                }, 0);
                
                // Animación de los pasos de texto
                const steps = ["#step-1", "#step-2", "#step-3", "#step-4"];
                steps.forEach((step, index) => {
                    const startPos = index * 0.25;
                    const endPos = (index + 1) * 0.25;
                    scrollyTL.to(step, { opacity: 1, y: 0, duration: 0.1 }, startPos + 0.05)
                             .to(step, { opacity: 0, y: -30, duration: 0.1 }, endPos - 0.05);
                });

                // Transición de salida y entrada del Main
                scrollyTL.to(canvas, { scale: 0.85, borderRadius: "60px", filter: "blur(15px)", opacity: 0, duration: 0.3 }, 0.8)
                    .to("#intro-scrolly", { autoAlpha: 0, duration: 0.3 }, 0.9)
                    .from("main", { y: 200, opacity: 0, duration: 0.4, ease: "power2.out" }, 0.8)
                    .to("#main-header", { opacity: 1, y: 0, duration: 0.4, onStart: () => { window.revealHeroContent(); } }, 0.8);
            };

            // Fallback: Si el usuario ya está debajo del scrolly o no hay scrolly
            if (window.scrollY > window.innerHeight) {
                window.revealHeroContent();
            }

            // Asegurar que la primera imagen esté cargada para iniciar
            images[0].onload = () => {
                render();
                initScrolly();
            };
        } else {
            // No hay canvas de scrolly, revelar inmediatamente
            window.revealHeroContent();
        }

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

    // --- CTA ASSEMBLY ANIMATION ---
    // Patrón: Timeline PAUSADA + ScrollTrigger.create() con onEnter
    // Esto es inmune al recálculo de posiciones causado por el pin del scrollytelling
    const ctaGroup = document.querySelector(".cta-visual-group");
    if (ctaGroup) {
        // Estado inicial: OCULTO
        gsap.set(".cta-aura", { opacity: 0, scale: 0.5 });
        gsap.set(".cta-image-wrapper", { opacity: 0, y: 80, scale: 0.92 });
        gsap.set(".cta-testimonial", { opacity: 0, x: 60, y: 30, scale: 0.85 });
        gsap.set(".cta-title", { opacity: 0, y: 40 });
        gsap.set(".cta-description", { opacity: 0, y: 25 });

        // Timeline PAUSADA - no se reproduce sola
        const ctaTL = gsap.timeline({ paused: true, defaults: { ease: "power3.out" } });

        ctaTL
            .to(".cta-aura", { opacity: 1, scale: 1, duration: 1.8, ease: "power2.out" })
            .to(".cta-image-wrapper", { opacity: 1, y: 0, scale: 1, duration: 1.4, ease: "power4.out" }, "-=1.4")
            .to(".cta-testimonial", { opacity: 1, x: 0, y: 0, scale: 1, duration: 1.2, ease: "back.out(1.4)" }, "-=0.8")
            .to(".cta-title", { opacity: 1, y: 0, duration: 1 }, "-=1.0")
            .to(".cta-description", { opacity: 1, y: 0, duration: 0.8 }, "-=0.7");

        // Observador visual REAL: se dispara cuando la sección entra al viewport
        let ctaHasPlayed = false;
        const ctaObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !ctaHasPlayed) {
                    ctaHasPlayed = true;
                    ctaTL.play();
                    ctaObserver.disconnect(); // Una sola vez
                }
            });
        }, { threshold: 0.15 }); // Se activa cuando el 15% de la sección es visible

        ctaObserver.observe(document.querySelector(".cta-section"));

        // Mouse Parallax Interactivo para el Testimonio
        const testimonial = ctaGroup.querySelector('.cta-testimonial');
        if (testimonial) {
            ctaGroup.addEventListener('mousemove', (e) => {
                const { left, top, width, height } = ctaGroup.getBoundingClientRect();
                const x = (e.clientX - left) / width - 0.5;
                const y = (e.clientY - top) / height - 0.5;
                gsap.to(testimonial, {
                    x: x * 35,
                    y: y * 35,
                    duration: 0.6,
                    ease: "power2.out",
                    overwrite: "auto"
                });
            });
            ctaGroup.addEventListener('mouseleave', () => {
                gsap.to(testimonial, { x: 0, y: 0, duration: 0.8, ease: "elastic.out(1, 0.5)" });
            });
        }
    }
});
</script>
