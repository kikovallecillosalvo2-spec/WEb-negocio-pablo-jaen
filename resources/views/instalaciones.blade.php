@extends('layouts.app')

@section('content')
<!-- Encabezado de página -->
<section class="page-header">
    <div class="site-container">
        <div class="page-header-content">
            <div class="section-tag">Espacio Tecnológico</div>
            <h1 class="page-title">Nuestras Instalaciones</h1>
            <p class="page-subtitle">
                Diseñado desde cero para garantizar un rendimiento técnico implacable, confort ergonómico y un ambiente social único.
            </p>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- ZONAS PRINCIPALES DEL CYBERCAFÉ              -->
<!-- ============================================ -->
<section class="section-zones">
    <div class="site-container">
        <!-- Zona 1: Zona Gaming -->
        <div class="zone-block" id="zona-gaming">
            <div class="zone-visual">
                <div class="zone-img-wrap">
                    <img src="{{ asset('images/hero-gaming.jpg') }}" alt="Zona de Gaming Competitivo con iluminación ambiental" class="zone-img">
                    <div class="zone-badge-overlay">
                        <span>Puestos Competitivos</span>
                    </div>
                </div>
            </div>
            <div class="zone-info">
                <div class="zone-tag">Zona 01</div>
                <h2 class="zone-title">Zona Gaming Competitivo</h2>
                <p class="zone-lead">
                    La joya de la corona de Nexus: un espacio de máxima concentración y adrenalina preparado para deportes electrónicos y títulos triple A de última generación.
                </p>
                <p class="zone-desc">
                    Dispone de ordenadores preparados para gaming competitivo y juegos actuales con configuraciones optimizadas a nivel de BIOS y sistema operativo para erradicar cualquier mínimo micro-stuttering o retardo en los comandos. Todos los juegos más populares (Valorant, CS2, League of Legends, Fortnite, Apex Legends, Warzone, Cyberpunk 2077) se encuentran preinstalados y actualizados de manera automática en almacenamiento NVMe Gen4.
                </p>
                <div class="zone-highlights">
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>40 Estaciones Pro</span>
                    </div>
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Mesas de 140 cm anti-reflejos</span>
                    </div>
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Climatización zonificada</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Zona 2: Zona Estudio & Trabajo (Invertido) -->
        <div class="zone-block zone-reverse" id="zona-estudio">
            <div class="zone-visual">
                <div class="zone-img-wrap">
                    <img src="{{ asset('images/study-cowork.jpg') }}" alt="Zona de estudio silencioso y trabajo digital" class="zone-img">
                    <div class="zone-badge-overlay">
                        <span>Espacio Silencioso</span>
                    </div>
                </div>
            </div>
            <div class="zone-info">
                <div class="zone-tag">Zona 02</div>
                <h2 class="zone-title">Zona Estudio & Trabajo</h2>
                <p class="zone-lead">
                    Un espacio más tranquilo para estudiar, programar o trabajar con la comodidad y herramientas de un coworking de alto nivel.
                </p>
                <p class="zone-desc">
                    Pensado para estudiantes universitarios, programadores, diseñadores gráficos y profesionales remotos que buscan escapar del ruido y las distracciones. Cuenta con aislamiento acústico pasivo, tomas eléctricas Schuko y USB-C de alta potencia en cada mesa, monitores secundarios orientables y acceso a red local de alta velocidad.
                </p>
                <div class="zone-highlights">
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Aislamiento acústico</span>
                    </div>
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Carga rápida USB-C PD 100W</span>
                    </div>
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Wi-Fi 6E de baja latencia</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Zona 3: Coffee Bar -->
        <div class="zone-block" id="coffee-bar">
            <div class="zone-visual">
                <div class="zone-img-wrap">
                    <img src="{{ asset('images/coffee-bar.jpg') }}" alt="Barra de cafetería de especialidad y bebidas" class="zone-img">
                    <div class="zone-badge-overlay">
                        <span>Barista Station</span>
                    </div>
                </div>
            </div>
            <div class="zone-info">
                <div class="zone-tag">Zona 03</div>
                <h2 class="zone-title">Coffee Bar & Lounge</h2>
                <p class="zone-lead">
                    Un rincón gastronómico donde los clientes pueden pedir café, refrescos y snacks de la mejor calidad sin perder el ritmo de la sesión.
                </p>
                <p class="zone-desc">
                    Trabajamos exclusivamente con granos de café arábica 100% de tueste natural de microfincas seleccionadas, molidos al instante en nuestra cafetera espresso profesional. Además disponemos de tés fríos, smoothies naturales, refrescos premium, bebidas energéticas y una carta de sándwiches artesanales, croissants recién horneados y snacks energéticos. Puedes pedir en barra o mediante servicio directo a tu puesto.
                </p>
                <div class="zone-highlights">
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Café 100% Arábica de especialidad</span>
                    </div>
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Servicio en mesa o puesto</span>
                    </div>
                    <div class="highlight-chip">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Opciones veganas y sin gluten</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECCIÓN: EQUIPAMIENTO REALISTA               -->
<!-- ============================================ -->
<section class="section-hardware">
    <div class="site-container">
        <div class="section-header-centered">
            <div class="section-tag">Especificaciones Técnicas</div>
            <h2 class="section-title">Equipamiento de Máximo Nivel</h2>
            <p class="section-subtitle">
                Componentes de marcas punteras en la industria para garantizar rendimiento constante, fiabilidad térmica y la menor latencia posible.
            </p>
        </div>

        <div class="hardware-grid">
            <!-- 1. Procesadores de alto rendimiento -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                        <rect x="9" y="9" width="6" height="6"></rect>
                        <line x1="9" y1="1" x2="9" y2="4"></line>
                        <line x1="15" y1="1" x2="15" y2="4"></line>
                        <line x1="9" y1="20" x2="9" y2="23"></line>
                        <line x1="15" y1="20" x2="15" y2="23"></line>
                        <line x1="20" y1="9" x2="23" y2="9"></line>
                        <line x1="20" y1="14" x2="23" y2="14"></line>
                        <line x1="1" y1="9" x2="4" y2="9"></line>
                        <line x1="1" y1="14" x2="4" y2="14"></line>
                    </svg>
                </div>
                <h3 class="hardware-name">Procesadores de alto rendimiento</h3>
                <p class="hardware-model">Intel Core i7-14700K &amp; AMD Ryzen 7 7800X3D</p>
                <p class="hardware-detail">Hasta 5.6 GHz con tecnología 3D V-Cache para frame rates masivos y multitarea pesada sin caídas.</p>
            </div>

            <!-- 2. Tarjetas gráficas dedicadas -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                        <circle cx="8" cy="12" r="3"></circle>
                        <circle cx="16" cy="12" r="3"></circle>
                        <path d="M6 19v2m4-2v2m4-2v2m4-2v2"></path>
                    </svg>
                </div>
                <h3 class="hardware-name">Tarjetas gráficas dedicadas</h3>
                <p class="hardware-model">NVIDIA GeForce RTX 4070 Ti &amp; RTX 4080 Super</p>
                <p class="hardware-detail">Ray Tracing en tiempo real, DLSS 3.5 Frame Generation y codificación por hardware AV1.</p>
            </div>

            <!-- 3. Monitores de alta frecuencia de refresco -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="2" y="3" width="20" height="14" rx="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h3 class="hardware-name">Monitores de alta frecuencia de refresco</h3>
                <p class="hardware-model">144 Hz, 165 Hz y 240 Hz Fast IPS 1ms</p>
                <p class="hardware-detail">Resolución QHD (1440p) y Full HD con compatibilidad nativa G-Sync para evitar el tearing.</p>
            </div>

            <!-- 4. Teclados mecánicos -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <line x1="6" y1="8" x2="6" y2="8.01"></line>
                        <line x1="10" y1="8" x2="10" y2="8.01"></line>
                        <line x1="14" y1="8" x2="14" y2="8.01"></line>
                        <line x1="18" y1="8" x2="18" y2="8.01"></line>
                        <line x1="6" y1="12" x2="6" y2="12.01"></line>
                        <line x1="10" y1="12" x2="10" y2="12.01"></line>
                        <line x1="14" y1="12" x2="14" y2="12.01"></line>
                        <line x1="18" y1="12" x2="18" y2="12.01"></line>
                        <line x1="8" y1="16" x2="16" y2="16"></line>
                    </svg>
                </div>
                <h3 class="hardware-name">Teclados mecánicos</h3>
                <p class="hardware-model">Switches Ópticos Lineales Red &amp; Brown</p>
                <p class="hardware-detail">Pulsación instantánea con 1.0 mm de punto de actuación, anti-ghosting total N-Key Rollover.</p>
            </div>

            <!-- 5. Ratones gaming -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="6" y="2" width="12" height="20" rx="6"></rect>
                        <line x1="12" y1="6" x2="12" y2="10"></line>
                    </svg>
                </div>
                <h3 class="hardware-name">Ratones gaming</h3>
                <p class="hardware-model">Sensores Focus Pro 26.000 DPI &amp; 1000-4000 Hz</p>
                <p class="hardware-detail">Chasis ultraligero de 58 gramos y base de teflón puro 100% PTFE sobre alfombrillas XXL.</p>
            </div>

            <!-- 6. Auriculares -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                    </svg>
                </div>
                <h3 class="hardware-name">Auriculares</h3>
                <p class="hardware-model">Sonido Espacial 7.1 &amp; Drivers 50mm Neodimio</p>
                <p class="hardware-detail">Cancelación pasiva del ruido exterior y micrófono cardioide con filtro pop para chat de voz cristalino.</p>
            </div>

            <!-- 7. Sillas ergonómicas -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"></path>
                        <path d="M3 11v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v2H7v-2a2 2 0 0 0-4 0z"></path>
                        <path d="M5 18v3"></path>
                        <path d="M19 18v3"></path>
                    </svg>
                </div>
                <h3 class="hardware-name">Sillas ergonómicas</h3>
                <p class="hardware-model">Estructura de Acero Reforzado &amp; Soporte 4D</p>
                <p class="hardware-detail">Espuma de alta densidad moldeada en frío, cojín lumbar magnético y reclinación regulable hasta 160°.</p>
            </div>

            <!-- 8. Conexión de fibra de alta velocidad -->
            <div class="hardware-card">
                <div class="hardware-icon">
                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                </div>
                <h3 class="hardware-name">Conexión de fibra de alta velocidad</h3>
                <p class="hardware-model">Doble Línea Simétrica 1 Gbps Corporativa</p>
                <p class="hardware-detail">Switches gestionados Cisco con enrutamiento prioritario QoS para paquetes de juegos y ping inferior a 5ms.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- BANNER FINAL INSTALACIONES                   -->
<!-- ============================================ -->
<section class="section-facilities-cta">
    <div class="site-container">
        <div class="facilities-cta-card">
            <div class="f-cta-content">
                <h2>¿Quieres probar nuestros puestos en persona?</h2>
                <p>Ven a conocernos a Calle Tecnología 42 o reserva tu estación con antelación para no esperar turno.</p>
            </div>
            <div class="f-cta-btn">
                <a href="{{ route('contacto') }}#reserva-form" class="btn btn-primary-neon">
                    Reservar estación
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
