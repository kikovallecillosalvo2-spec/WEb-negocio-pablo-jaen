@extends('layouts.app')

@section('content')
<!-- ============================================ -->
<!-- HERO PRINCIPAL                               -->
<!-- ============================================ -->
<section class="hero-section">
    <div class="hero-backdrop-glow"></div>
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-pulse"></span>
                <span class="badge-text">Cybercafé Next-Gen en Sevilla</span>
            </div>
            
            <h1 class="hero-title">
                <span class="title-brand">NEXUS</span>
                <span class="title-subbrand">CAFÉ & GAMING</span>
            </h1>
            
            <p class="hero-highlight">Tu partida empieza aquí.</p>
            
            <p class="hero-description">
                Ordenadores gaming de alto rendimiento, café recién hecho y un espacio diseñado para jugar, estudiar y trabajar.
            </p>
            
            <div class="hero-cta-group">
                <a href="{{ route('contacto') }}#reserva-form" class="btn btn-primary-neon">
                    <span>Reservar ordenador</span>
                    <svg viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="{{ route('tarifas') }}" class="btn btn-outline-neon">
                    <span>Ver tarifas</span>
                    <svg viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                    </svg>
                </a>
            </div>

            <!-- Datos destacados rápidos -->
            <div class="hero-stats-strip">
                <div class="stat-item">
                    <span class="stat-number">240Hz</span>
                    <span class="stat-label">Monitores Fast IPS</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">&lt; 5ms</span>
                    <span class="stat-label">Latencia de Red</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">1 Gbps</span>
                    <span class="stat-label">Fibra Simétrica</span>
                </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-image-card">
                <div class="image-frame-corner corner-tl"></div>
                <div class="image-frame-corner corner-tr"></div>
                <div class="image-frame-corner corner-bl"></div>
                <div class="image-frame-corner corner-br"></div>
                <img src="{{ asset('images/hero-gaming.jpg') }}" alt="Sala principal de Nexus Café y Gaming con iluminación ambiental" class="hero-img">
                <div class="hero-image-overlay">
                    <div class="overlay-tag">
                        <span class="tag-status"></span>
                        <span>Estaciones VIP Disponibles</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECCIÓN: ¿QUÉ ES NEXUS?                      -->
<!-- ============================================ -->
<section class="section-concept">
    <div class="site-container">
        <div class="concept-grid">
            <div class="concept-media">
                <div class="media-stack">
                    <img src="{{ asset('images/esports-arena.jpg') }}" alt="Fila de puestos gaming de competición en Nexus" class="concept-img main-img">
                    <div class="floating-badge">
                        <div class="badge-icon">
                            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div class="badge-content">
                            <strong>Reserva Inmediata</strong>
                            <span>Sin esperas de cola</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="concept-text">
                <div class="section-tag">El Concepto</div>
                <h2 class="section-title">¿Qué es Nexus?</h2>
                <p class="concept-lead">
                    NEXUS nace para transformar el clásico concepto de cybercafé en un santuario tecnológico de máxima calidad, pensado tanto para el jugador competitivo como para el profesional digital.
                </p>
                <p class="concept-body">
                    Hemos fusionado dos mundos: la potencia técnica de una arena de deportes electrónicos de primer nivel y la atmósfera relajante de una cafetería de especialidad. Ya sea para escalar rangos en tu juego favorito, editar vídeo con aceleración por GPU, preparar entregas de proyectos o simplemente disfrutar de un espresso de tueste natural en un ambiente vanguardista, en Nexus tienes tu espacio reservado.
                </p>
                <div class="concept-points">
                    <div class="point-item">
                        <div class="point-marker"></div>
                        <div class="point-info">
                            <h4>Hardware sin concesiones</h4>
                            <p>Equipos actualizados a la última arquitectura gráfica NVIDIA RTX y procesadores de máxima frecuencia.</p>
                        </div>
                    </div>
                    <div class="point-item">
                        <div class="point-marker"></div>
                        <div class="point-info">
                            <h4>Ambiente acústico cuidado</h4>
                            <p>Zonas diferenciadas con insonorización para mantener el equilibrio entre euforia competitiva y concentración.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECCIÓN: CARACTERÍSTICAS (SIN EMOJIS)        -->
<!-- ============================================ -->
<section class="section-features">
    <div class="site-container">
        <div class="section-header-centered">
            <div class="section-tag">Ventajas Exclusivas</div>
            <h2 class="section-title">Diseñado para la Victoria y el Confort</h2>
            <p class="section-subtitle">
                Cuidamos cada detalle de la experiencia para que disfrutes de un rendimiento impecable desde el primer minuto.
            </p>
        </div>

        <div class="features-grid">
            <!-- Tarjeta 1: Gaming de alto rendimiento -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                        <path d="M6 12h4m-2-2v4"></path>
                        <line x1="15" y1="11" x2="15" y2="11.01"></line>
                        <line x1="18" y1="13" x2="18" y2="13.01"></line>
                    </svg>
                </div>
                <h3 class="feature-title">Gaming de alto rendimiento</h3>
                <p class="feature-description">
                    Estaciones equipadas con tarjetas gráficas RTX Serie 40 y procesadores de última generación para superar los 240 FPS estables en cualquier título competitivo.
                </p>
            </div>

            <!-- Tarjeta 2: Café y bebidas -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <line x1="6" y1="1" x2="6" y2="4"></line>
                        <line x1="10" y1="1" x2="10" y2="4"></line>
                        <line x1="14" y1="1" x2="14" y2="4"></line>
                    </svg>
                </div>
                <h3 class="feature-title">Café y bebidas</h3>
                <p class="feature-description">
                    Carta de cafés de especialidad con tueste artesanal, bebidas energéticas oficiales, kombuchas frías y snacks dulces y salados servidos directamente en tu puesto.
                </p>
            </div>

            <!-- Tarjeta 3: Internet ultrarrápido -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
                <h3 class="feature-title">Internet ultrarrápido</h3>
                <p class="feature-description">
                    Línea de fibra óptica redundante de 1 Gbps simétrica por puesto, con conmutación inteligente y ping menor a 5 ms a servidores europeos.
                </p>
            </div>

            <!-- Tarjeta 4: Puestos cómodos -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"></path>
                        <path d="M3 11v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v2H7v-2a2 2 0 0 0-4 0z"></path>
                        <path d="M5 18v3"></path>
                        <path d="M19 18v3"></path>
                    </svg>
                </div>
                <h3 class="feature-title">Puestos cómodos</h3>
                <p class="feature-description">
                    Sillas ergonómicas de grado profesional con soporte lumbar multiaxial regulable y mesas amplias con alfombrillas completas de microfibra de alta precisión.
                </p>
            </div>

            <!-- Tarjeta 5: Periféricos profesionales -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                    </svg>
                </div>
                <h3 class="feature-title">Periféricos profesionales</h3>
                <p class="feature-description">
                    Teclados mecánicos con switches lineales ópticos, ratones ultraligeros con sensor óptico de 26.000 DPI y auriculares con audio espacial 7.1 certificado.
                </p>
            </div>

            <!-- Tarjeta 6: Entorno seguro -->
            <div class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <circle cx="12" cy="11" r="2"></circle>
                        <path d="M12 13v3"></path>
                    </svg>
                </div>
                <h3 class="feature-title">Entorno seguro</h3>
                <p class="feature-description">
                    Sistema de congelación profunda de software tras cada sesión: tus credenciales, datos de Steam, Riot o Discord se borran de inmediato al cerrar sesión.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECCIÓN: NUESTRO ESPACIO                     -->
<!-- ============================================ -->
<section class="section-spaces">
    <div class="site-container">
        <div class="section-header-centered">
            <div class="section-tag">Galería de Instalaciones</div>
            <h2 class="section-title">Nuestro Espacio</h2>
            <p class="section-subtitle">
                Recorre las instalaciones de Nexus: un entorno vanguardista con puestos optimizados para cada necesidad.
            </p>
        </div>

        <div class="spaces-gallery-grid">
            <div class="gallery-card card-large">
                <img src="{{ asset('images/hero-gaming.jpg') }}" alt="Zona de juego principal con iluminación neón verde y puestos de competición" class="gallery-img">
                <div class="gallery-info">
                    <span class="gallery-category">Arena Principal</span>
                    <h3 class="gallery-title">Zona Gaming Competitiva</h3>
                    <p class="gallery-caption">Puestos individuales y para escuadras completas listos para torneos y juego diario.</p>
                </div>
            </div>

            <div class="gallery-card">
                <img src="{{ asset('images/coffee-bar.jpg') }}" alt="Barra de café y bebidas de Nexus" class="gallery-img">
                <div class="gallery-info">
                    <span class="gallery-category">Barista Bar</span>
                    <h3 class="gallery-title">Coffee & Drinks Lounge</h3>
                    <p class="gallery-caption">Café recién molido, refrescos y aperitivos para recargar energía.</p>
                </div>
            </div>

            <div class="gallery-card">
                <img src="{{ asset('images/pc-station.jpg') }}" alt="Puesto gaming individual de alta gama con teclado mecánico y doble pantalla" class="gallery-img">
                <div class="gallery-info">
                    <span class="gallery-category">Estación VIP</span>
                    <h3 class="gallery-title">Puestos Pro 240Hz</h3>
                    <p class="gallery-caption">Rendimiento extremo sin caídas de frames para tiradores y MOBA.</p>
                </div>
            </div>

            <div class="gallery-card">
                <img src="{{ asset('images/study-cowork.jpg') }}" alt="Zona silenciosa de estudio y trabajo con iluminación agradable" class="gallery-img">
                <div class="gallery-info">
                    <span class="gallery-category">Coworking</span>
                    <h3 class="gallery-title">Zona Estudio & Trabajo</h3>
                    <p class="gallery-caption">Espacio tranquilo con tomas de corriente y conexión Wi-Fi 6 para portátiles.</p>
                </div>
            </div>

            <div class="gallery-card card-large">
                <img src="{{ asset('images/cybercafe-lounge.jpg') }}" alt="Área social y de descanso de Nexus Café" class="gallery-img">
                <div class="gallery-info">
                    <span class="gallery-category">Comunidad</span>
                    <h3 class="gallery-title">Área Social y Descanso</h3>
                    <p class="gallery-caption">Comenta las jugadas, tómate un descanso o sigue streams en pantalla gigante.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECCIÓN: LLAMADA A LA ACCIÓN (CTA)           -->
<!-- ============================================ -->
<section class="section-cta">
    <div class="site-container">
        <div class="cta-banner">
            <div class="cta-glow"></div>
            <div class="cta-content">
                <div class="section-tag tag-neon">Reserva Anticipada</div>
                <h2 class="cta-title">¿Tienes unas horas libres?</h2>
                <p class="cta-text">
                    Reserva tu puesto, elige tu equipo y disfruta de una experiencia gaming sin preocuparte por el hardware.
                </p>
                <div class="cta-actions">
                    <a href="{{ route('contacto') }}#reserva-form" class="btn btn-primary-neon btn-large">
                        <span>Reservar ahora</span>
                        <svg viewBox="0 0 20 20" fill="currentColor" width="20" height="20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="{{ route('tarifas') }}" class="btn btn-secondary-dark btn-large">
                        <span>Consultar todos los planes</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
