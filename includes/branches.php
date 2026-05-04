<?php
/**
 * Módulo de Sucursales (Carousel Infinito)
 */
$branches = [
    [
        'id' => 'satelite',
        'name' => 'Satélite',
        'address' => 'Av. Sor Juana Inés de la Cruz 123, Cd. Satélite',
        'phone' => '55 1234 5678',
        'hours' => 'Lun-Vie: 9:00 - 20:00 | Sáb: 9:00 - 14:00',
        'category' => 'SUCURSAL',
        'image' => 'img/img_promexis.jpeg'
    ],
    [
        'id' => 'cantil',
        'name' => 'Cantil',
        'address' => 'Av. Aztecas 270, Coyoacán',
        'phone' => '55 2345 6789',
        'hours' => 'Lun-Vie: 10:00 - 19:00 | Sáb: 10:00 - 15:00',
        'category' => 'SUCURSAL',
        'image' => 'img/img_promexis.jpeg'
    ],
    [
        'id' => 'coapa',
        'name' => 'Coapa',
        'address' => 'Calz. del Hueso 456, Villa Coapa',
        'phone' => '55 3456 7890',
        'hours' => '24/7 Diagnóstico Urgente',
        'category' => 'MATRIZ',
        'image' => 'img/img_promexis.jpeg'
    ],
    [
        'id' => 'pedregal',
        'name' => 'Pedregal',
        'address' => 'Anillo Perif. 1234, Jardines del Pedregal',
        'phone' => '55 4567 8901',
        'hours' => 'Lun-Vie: 9:00 - 18:00',
        'category' => 'SUCURSAL',
        'image' => 'img/img_promexis.jpeg'
    ],
    [
        'id' => 'roma',
        'name' => 'Roma Norte',
        'address' => 'Álvaro Obregón 789, Col. Roma',
        'phone' => '55 5678 9012',
        'hours' => 'Lun-Sáb: 8:00 - 21:00',
        'category' => 'SUCURSAL',
        'image' => 'img/img_promexis.jpeg'
    ]
];
?>

<section id="sucursales" class="branches-section">
    <div class="branches-container">
        
        <div class="branches-header">
            <h2 class="section-title text-center">Nuestras Sucursales</h2>
            <p class="section-desc text-center mx-auto">Más cerca de ti con tecnología de vanguardia en cada ubicación.</p>
        </div>

        <div class="carousel-wrapper">
            <div class="branch-carousel" id="branches-carousel">
                <?php foreach ($branches as $branch): ?>
                    <div class="branch-item" data-branch="<?php echo $branch['id']; ?>">
                        <div class="clinical-card">
                            <img src="<?php echo $branch['image']; ?>" alt="<?php echo $branch['name']; ?>" class="branch-img">
                            <span class="branch-label"><?php echo $branch['category']; ?></span>
                            <h3 class="branch-title"><?php echo $branch['name']; ?></h3>
                            
                            <div class="branch-info-list">
                                <div class="branch-info-badge">
                                    <span class="material-symbols-outlined">call</span>
                                    <span><?php echo $branch['phone']; ?></span>
                                </div>
                                <div class="branch-info-badge">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span><?php echo $branch['hours']; ?></span>
                                </div>
                                <div class="branch-info-badge">
                                    <span class="material-symbols-outlined">location_on</span>
                                    <span><?php echo $branch['address']; ?></span>
                                </div>
                            </div>

                            <a href="#" class="branch-cta">
                                VER EN MAPA <span class="material-symbols-outlined">map</span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Controles -->
            <button class="carousel-nav prev" id="prev-branch">
                <span class="material-symbols-outlined">arrow_back_ios</span>
            </button>
            <button class="carousel-nav next" id="next-branch">
                <span class="material-symbols-outlined">arrow_forward_ios</span>
            </button>
        </div>
    </div>
</section>
