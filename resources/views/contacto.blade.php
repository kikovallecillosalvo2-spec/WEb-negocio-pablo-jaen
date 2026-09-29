@extends('layouts.app')

@section('content')
<!-- Encabezado de página -->
<section class="page-header">
    <div class="site-container">
        <div class="page-header-content">
            <div class="section-tag">Contacto y Reservas</div>
            <h1 class="page-title">Ven a Jugar o Reserva tu Puesto</h1>
            <p class="page-subtitle">
                Asegura tu ordenador antes de llegar, solicita información para eventos grupales o ponte en contacto con nuestro equipo.
            </p>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- CONTENIDO PRINCIPAL: INFORMACIÓN Y FORMULARIO-->
<!-- ============================================ -->
<section class="section-contact">
    <div class="site-container">
        <div class="contact-layout-grid">
            
            <!-- Columna Izquierda: Información del Negocio y Enlaces Externos -->
            <div class="contact-info-column">
                <div class="info-card">
                    <div class="info-card-header">
                        <span class="info-badge">Establecimiento Oficial</span>
                        <h2 class="business-name">Nexus Café &amp; Gaming</h2>
                        <p class="business-desc">
                            El epicentro gaming de Sevilla. Puestos de alta gama, conexión ultrarrápida y café de especialidad abierto todos los días.
                        </p>
                    </div>

                    <div class="info-details-list">
                        <!-- Dirección -->
                        <div class="detail-row">
                            <div class="detail-icon">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Ubicación</span>
                                <p class="detail-value">Calle Tecnología 42, Sevilla</p>
                                <span class="detail-sub">Zona Nervión / San Bernardo</span>
                            </div>
                        </div>

                        <!-- Horario -->
                        <div class="detail-row">
                            <div class="detail-icon">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Horario de Apertura</span>
                                <p class="detail-value">Lunes - Domingo: 10:00 - 00:00</p>
                                <span class="detail-sub">Ininterrumpido todo el año</span>
                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div class="detail-row">
                            <div class="detail-icon">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Teléfono directo</span>
                                <p class="detail-value"><a href="tel:+34600123456" class="contact-link">+34 600 123 456</a></p>
                                <span class="detail-sub">Atención telefónica en horario de apertura</span>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="detail-row">
                            <div class="detail-icon">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="detail-content">
                                <span class="detail-label">Correo Electrónico</span>
                                <p class="detail-value"><a href="mailto:hola@nexuscafe.test" class="contact-link">hola@nexuscafe.test</a></p>
                                <span class="detail-sub">Respuesta en menos de 24 horas</span>
                            </div>
                        </div>
                    </div>

                    <!-- Enlaces Externos Requeridos -->
                    <div class="external-links-section">
                        <span class="external-heading">Enlaces y Canales Externos:</span>
                        <div class="external-buttons-grid">
                            <!-- Google Maps -->
                            <a href="https://maps.google.com/?q=Calle+Tecnologia+42+Sevilla" target="_blank" rel="noopener noreferrer" class="ext-btn btn-maps">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                    <line x1="8" y1="2" x2="8" y2="18"></line>
                                    <line x1="16" y1="6" x2="16" y2="22"></line>
                                </svg>
                                <span>Ver en Google Maps</span>
                                <svg class="external-arrow" viewBox="0 0 16 16" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 11L11 5M11 5H6M11 5V10"/>
                                </svg>
                            </a>

                            <!-- Instagram -->
                            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="ext-btn btn-instagram">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                                <span>Instagram Oficial</span>
                                <svg class="external-arrow" viewBox="0 0 16 16" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 11L11 5H6M11 5V10"/>
                                </svg>
                            </a>

                            <!-- Discord -->
                            <a href="https://discord.com" target="_blank" rel="noopener noreferrer" class="ext-btn btn-discord">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M18 6h0a14.5 14.5 0 0 0-4-1.2 12.8 12.8 0 0 0-.6 1.4 17.5 17.5 0 0 0-5.8 0A12.8 12.8 0 0 0 7 4.8 14.5 14.5 0 0 0 3 6c-2.4 3.7-3 8.3-2.6 12.8a14.8 14.8 0 0 0 5.4 2.8c.7-.9 1.3-1.9 1.8-2.9a9.6 9.6 0 0 1-2.9-1.4c.2-.2.5-.3.7-.5a12.6 12.6 0 0 0 13.2 0c.2.2.5.3.7.5a9.6 9.6 0 0 1-2.9 1.4c.5 1 1.1 2 1.8 2.9a14.8 14.8 0 0 0 5.4-2.8c.4-5.2-.6-9.7-2.6-12.8z"></path>
                                    <circle cx="8.5" cy="13.5" r="1.5"></circle>
                                    <circle cx="15.5" cy="13.5" r="1.5"></circle>
                                </svg>
                                <span>Servidor Discord</span>
                                <svg class="external-arrow" viewBox="0 0 16 16" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 11L11 5H6M11 5V10"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Formulario de Reserva Visual y Funcional -->
            <div class="contact-form-column" id="reserva-form">
                <div class="form-container-card">
                    <div class="form-header">
                        <span class="form-tag">Reserva de Puestos</span>
                        <h2 class="form-title">Solicitar Reserva</h2>
                        <p class="form-subtitle">Completa el formulario para asegurar tus puestos. Te confirmaremos disponibilidad en breve.</p>
                    </div>

                    <!-- Mensaje Flash de Éxito si se envía el formulario -->
                    @if(session('success'))
                        <div class="alert-success-banner" role="alert">
                            <div class="alert-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="alert-content">
                                <strong>¡Reserva Enviada!</strong>
                                <p>{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Errores de Validación -->
                    @if ($errors->any())
                        <div class="alert-danger-banner" role="alert">
                            <strong>Por favor revisa los siguientes campos:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contacto.submit') }}" method="POST" class="nexus-form">
                        @csrf

                        <!-- Fila 1: Nombre y Email -->
                        <div class="form-row-2">
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre Completo <span class="required">*</span></label>
                                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="form-control @error('nombre') is-invalid @enderror" placeholder="Ej. Alejandro Ramos" required>
                                @error('nombre')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Correo Electrónico <span class="required">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="tu.correo@ejemplo.com" required>
                                @error('email')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Fila 2: Fecha y Número de Horas -->
                        <div class="form-row-2">
                            <div class="form-group">
                                <label for="fecha" class="form-label">Fecha de la Reserva <span class="required">*</span></label>
                                <input type="date" id="fecha" name="fecha" value="{{ old('fecha', date('Y-m-d')) }}" class="form-control @error('fecha') is-invalid @enderror" required>
                                @error('fecha')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="horas" class="form-label">Número de Horas <span class="required">*</span></label>
                                <select id="horas" name="horas" class="form-control @error('horas') is-invalid @enderror" required>
                                    <option value="1" {{ old('horas') == '1' ? 'selected' : '' }}>1 Hora (Pase Casual)</option>
                                    <option value="2" {{ old('horas') == '2' ? 'selected' : '' }}>2 Horas</option>
                                    <option value="3" {{ old('horas') == '3' || !old('horas') ? 'selected' : '' }}>3 Horas (Pase Pro Recomendado)</option>
                                    <option value="4" {{ old('horas') == '4' ? 'selected' : '' }}>4 Horas</option>
                                    <option value="6" {{ old('horas') == '6' ? 'selected' : '' }}>6 Horas (Media Jornada)</option>
                                    <option value="12" {{ old('horas') == '12' ? 'selected' : '' }}>Día Completo (Apertura a Cierre)</option>
                                </select>
                                @error('horas')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Fila 3: Número de Personas y Tipo de Puesto -->
                        <div class="form-row-2">
                            <div class="form-group">
                                <label for="personas" class="form-label">Número de Personas <span class="required">*</span></label>
                                <select id="personas" name="personas" class="form-control @error('personas') is-invalid @enderror" required>
                                    <option value="1" {{ old('personas') == '1' ? 'selected' : '' }}>1 Jugador (Individual)</option>
                                    <option value="2" {{ old('personas') == '2' ? 'selected' : '' }}>2 Personas (Duo)</option>
                                    <option value="3" {{ old('personas') == '3' ? 'selected' : '' }}>3 Personas (Trio)</option>
                                    <option value="4" {{ old('personas') == '4' ? 'selected' : '' }}>4 Personas (Squad)</option>
                                    <option value="5" {{ old('personas') == '5' ? 'selected' : '' }}>5 Personas (Equipo Completo)</option>
                                    <option value="6" {{ old('personas') == '6' ? 'selected' : '' }}>Más de 5 (Grupo / Evento)</option>
                                </select>
                                @error('personas')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="puesto" class="form-label">Tipo de Puesto <span class="required">*</span></label>
                                <select id="puesto" name="puesto" class="form-control @error('puesto') is-invalid @enderror" required>
                                    <option value="Gaming Estándar 144Hz" {{ old('puesto') == 'Gaming Estándar 144Hz' ? 'selected' : '' }}>Gaming Estándar (144 Hz)</option>
                                    <option value="Gaming Premium Pro 165Hz" {{ old('puesto') == 'Gaming Premium Pro 165Hz' || !old('puesto') ? 'selected' : '' }}>Gaming Premium Pro (165 Hz)</option>
                                    <option value="Zona VIP Esports 240Hz" {{ old('puesto') == 'Zona VIP Esports 240Hz' ? 'selected' : '' }}>Zona VIP Esports (240 Hz)</option>
                                    <option value="Zona Estudio & Coworking" {{ old('puesto') == 'Zona Estudio & Coworking' ? 'selected' : '' }}>Zona Estudio & Coworking</option>
                                </select>
                                @error('puesto')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Campo Mensaje -->
                        <div class="form-group">
                            <label for="mensaje" class="form-label">Mensaje o Petición Especial</label>
                            <textarea id="mensaje" name="mensaje" rows="4" class="form-control @error('mensaje') is-invalid @enderror" placeholder="Indícanos si necesitas juegos concretos preinstalados, periféricos para zurdos, mesa contigua para tu equipo o cualquier otra preferencia...">{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Botón de Envío -->
                        <div class="form-submit-row">
                            <button type="submit" class="btn btn-primary-neon btn-block-submit">
                                <span>Solicitar reserva</span>
                                <svg viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                                </svg>
                            </button>
                            <p class="form-disclaimer">
                                No cobramos por adelantado. Te enviaremos un correo de confirmación con los puestos asignados.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ============================================ -->
        <!-- MAPA Y CÓMO LLEGAR                           -->
        <!-- ============================================ -->
        <div class="map-section">
            <div class="map-card">
                <div class="map-header">
                    <div class="map-title-box">
                        <h3>Cómo Llegar a Nexus Café &amp; Gaming</h3>
                        <p>Calle Tecnología 42, Sevilla • Metro San Bernardo (L1) • Autobuses C1, C2, 28, 29</p>
                    </div>
                    <a href="https://maps.google.com/?q=Calle+Tecnologia+42+Sevilla" target="_blank" rel="noopener noreferrer" class="btn btn-outline-neon btn-sm">
                        Abrir Navegación GPS
                    </a>
                </div>
                <!-- Simulación de mapa con estética oscura de alta fidelidad -->
                <div class="simulated-map-container">
                    <div class="map-overlay-grid"></div>
                    <div class="map-pin-nexus">
                        <div class="pin-pulse"></div>
                        <div class="pin-marker">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="pin-callout">
                            <strong>NEXUS CAFÉ &amp; GAMING</strong>
                            <span>Calle Tecnología 42</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
