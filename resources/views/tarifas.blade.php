@extends('layouts.app')

@section('content')
<!-- Encabezado de página -->
<section class="page-header">
    <div class="site-container">
        <div class="page-header-content">
            <div class="section-tag">Tarifas Transparentes</div>
            <h1 class="page-title">Planes y Precios Gaming</h1>
            <p class="page-subtitle">
                Tarifas flexibles diseñadas tanto para partidas rápidas como para maratones intensivos. Elige tu pase y comienza a jugar al instante.
            </p>
        </div>
    </div>
</section>

<!-- Sección de Tarjetas de Precios Principales -->
<section class="section-pricing">
    <div class="site-container">
        <div class="pricing-grid">
            <!-- Plan 1: Pase Casual -->
            <div class="pricing-card">
                <div class="card-tier-header">
                    <span class="plan-badge">Individual</span>
                    <h2 class="plan-name">Pase Casual</h2>
                    <p class="plan-summary">Ideal para partidas sueltas, desconectar o terminar trabajos puntuales.</p>
                </div>

                <div class="plan-price-box">
                    <div class="price-value">
                        <span class="currency">3,50 €</span>
                        <span class="period">/ hora</span>
                    </div>
                    <span class="price-caption">Cobro por fracción horaria</span>
                </div>

                <div class="plan-features-divider"></div>

                <ul class="plan-features-list">
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>PC Gaming</span>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Monitor 144 Hz</span>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Internet de alta velocidad</span>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Auriculares</span>
                    </li>
                </ul>

                <div class="card-footer-action">
                    <a href="{{ route('contacto') }}?plan=casual#reserva-form" class="btn btn-outline-neon btn-full">
                        Elegir Pase Casual
                    </a>
                </div>
            </div>

            <!-- Plan 2: Pase Pro (DESTACADO: Más elegido) -->
            <div class="pricing-card card-featured">
                <div class="featured-ribbon">
                    <span>Más elegido</span>
                </div>

                <div class="card-tier-header">
                    <span class="plan-badge badge-pro">Experiencia Competitiva</span>
                    <h2 class="plan-name">Pase Pro</h2>
                    <p class="plan-summary">El preferido para sesiones de rangos competitivos y torneos con amigos.</p>
                </div>

                <div class="plan-price-box">
                    <div class="price-value">
                        <span class="currency">10 €</span>
                        <span class="period">/ 3 horas</span>
                    </div>
                    <span class="price-caption">Equivale a 3,33 €/hora con extras</span>
                </div>

                <div class="plan-features-divider"></div>

                <ul class="plan-features-list">
                    <li class="feature-item">
                        <svg class="check-icon icon-neon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <strong>PC Gaming Premium</strong>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon icon-neon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <strong>Monitor 165 Hz</strong>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon icon-neon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <strong>Periféricos gaming</strong>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon icon-neon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <strong>Auriculares</strong>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon icon-neon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <strong>Bebida incluida</strong>
                    </li>
                </ul>

                <div class="card-footer-action">
                    <a href="{{ route('contacto') }}?plan=pro#reserva-form" class="btn btn-primary-neon btn-full">
                        Elegir Pase Pro
                    </a>
                </div>
            </div>

            <!-- Plan 3: Pase Día Completo -->
            <div class="pricing-card">
                <div class="card-tier-header">
                    <span class="plan-badge">Pase Completo</span>
                    <h2 class="plan-name">Pase Día Completo</h2>
                    <p class="plan-summary">Sin límites de tiempo durante todo el horario de apertura.</p>
                </div>

                <div class="plan-price-box">
                    <div class="price-value">
                        <span class="currency">20 €</span>
                        <span class="period">/ día</span>
                    </div>
                    <span class="price-caption">Válido de 10:00 a 00:00</span>
                </div>

                <div class="plan-features-divider"></div>

                <ul class="plan-features-list">
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Uso ilimitado durante el horario de apertura</span>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>PC Gaming Premium</span>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Bebida</span>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>WiFi</span>
                    </li>
                    <li class="feature-item">
                        <svg class="check-icon" viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Periféricos</span>
                    </li>
                </ul>

                <div class="card-footer-action">
                    <a href="{{ route('contacto') }}?plan=dia#reserva-form" class="btn btn-outline-neon btn-full">
                        Elegir Día Completo
                    </a>
                </div>
            </div>
        </div>

        <!-- ============================================ -->
        <!-- INFORMACIÓN ADICIONAL                        -->
        <!-- ============================================ -->
        <div class="pricing-notice-box">
            <div class="notice-header">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <h3>Información Adicional</h3>
            </div>
            <ul class="notice-list">
                <li>
                    <span class="notice-bullet"></span>
                    <span><strong>Los precios pueden variar para eventos.</strong> Durante competiciones especiales, lanzamientos o bootcamps comunitarios pueden aplicarse condiciones singulares.</span>
                </li>
                <li>
                    <span class="notice-bullet"></span>
                    <span><strong>Se recomienda reservar durante fines de semana.</strong> Debido a la alta afluencia de viernes a domingo, aconsejamos reservar con al menos 24 horas de antelación.</span>
                </li>
                <li>
                    <span class="notice-bullet"></span>
                    <span><strong>Las reservas están sujetas a disponibilidad.</strong> La confirmación definitiva se realiza una vez revisado el aforo y la asignación del equipo en el local.</span>
                </li>
            </ul>
        </div>

        <!-- ============================================ -->
        <!-- BONOS Y PREGUNTAS FRECUENTES                 -->
        <!-- ============================================ -->
        <div class="bonos-section" id="bonos">
            <div class="section-header-centered">
                <div class="section-tag">Ahorro y Flexibilidad</div>
                <h2 class="section-title">Bonos de Horas Acumulables</h2>
                <p class="section-subtitle">¿Vienes con frecuencia? Compra un paquete de horas y disfrútalas cuando tú decidas, sin fecha de caducidad.</p>
            </div>

            <div class="bonos-grid">
                <div class="bono-card">
                    <div class="bono-badge">Bono Básico</div>
                    <h3 class="bono-title">Bono 10 Horas</h3>
                    <div class="bono-price">30,00 €</div>
                    <p class="bono-rate">3,00 € por hora</p>
                    <p class="bono-desc">Válido en cualquier puesto estándar o coworking. Guarda tus horas en tu perfil de cliente.</p>
                </div>

                <div class="bono-card bono-accent">
                    <div class="bono-badge badge-pro">Más Ahorro</div>
                    <h3 class="bono-title">Bono 25 Horas</h3>
                    <div class="bono-price">65,00 €</div>
                    <p class="bono-rate">2,60 € por hora</p>
                    <p class="bono-desc">Acceso prioritario a puestos Premium 240Hz, descuento del 15% en cafetería y sin caducidad.</p>
                </div>

                <div class="bono-card">
                    <div class="bono-badge">Equipos & Clanes</div>
                    <h3 class="bono-title">Pack Boot Camp (5 Puestos)</h3>
                    <div class="bono-price">85,00 €</div>
                    <p class="bono-rate">4 horas para 5 jugadores</p>
                    <p class="bono-desc">Mesa reservada para escuadra competitiva con 5 bebidas y soporte técnico dedicado.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
