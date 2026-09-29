<footer class="site-footer">
    <div class="footer-top">
        <div class="footer-container">
            <!-- Columna de Marca y Descripción -->
            <div class="footer-brand-column">
                <div class="footer-brand">
                    <div class="logo-symbol">
                        <svg class="hexagon-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <polygon points="20,3 36,12 36,28 20,37 4,28 4,12" stroke="currentColor" stroke-width="2.5" fill="rgba(16, 245, 118, 0.08)"/>
                            <path d="M14 26V14L26 26V14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="logo-typography">
                        <span class="logo-name">NEXUS</span>
                        <span class="logo-tagline">CAFÉ & GAMING</span>
                    </div>
                </div>
                <p class="footer-description">
                    El punto de encuentro definitivo para gamers, creadores y estudiantes en Sevilla. Hardware de alta gama, fibra simétrica de baja latencia y el mejor café de especialidad.
                </p>
                <div class="footer-status-pill">
                    <span class="status-dot"></span>
                    <span class="status-label">Abierto hoy: 10:00 - 00:00</span>
                </div>
            </div>

            <!-- Columna de Enlaces de Navegación -->
            <div class="footer-nav-column">
                <h3 class="footer-title">Navegación</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}" class="footer-link">Inicio</a></li>
                    <li><a href="{{ route('tarifas') }}" class="footer-link">Tarifas y Pases</a></li>
                    <li><a href="{{ route('instalaciones') }}" class="footer-link">Instalaciones</a></li>
                    <li><a href="{{ route('contacto') }}" class="footer-link">Contacto y Reservas</a></li>
                </ul>
            </div>

            <!-- Columna de Instalaciones y Servicios -->
            <div class="footer-services-column">
                <h3 class="footer-title">Experiencias</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('instalaciones') }}#zona-gaming" class="footer-link">Zona Gaming Competitiva</a></li>
                    <li><a href="{{ route('instalaciones') }}#zona-estudio" class="footer-link">Zona Estudio & Coworking</a></li>
                    <li><a href="{{ route('instalaciones') }}#coffee-bar" class="footer-link">Coffee Bar Especialidad</a></li>
                    <li><a href="{{ route('tarifas') }}#bonos" class="footer-link">Bonos de Horas</a></li>
                </ul>
            </div>

            <!-- Columna de Redes Sociales y Contacto Rápido -->
            <div class="footer-social-column">
                <h3 class="footer-title">Comunidad</h3>
                <p class="footer-subtext">Únete a nuestros torneos semanales y eventos exclusivos en la comunidad.</p>
                <div class="social-links-grid">
                    <!-- Instagram -->
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Visitar Instagram de Nexus Café">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                        <span>Instagram</span>
                    </a>
                    <!-- Discord -->
                    <a href="https://discord.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Unirse al servidor de Discord de Nexus Café">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M18 6h0a14.5 14.5 0 0 0-4-1.2 12.8 12.8 0 0 0-.6 1.4 17.5 17.5 0 0 0-5.8 0A12.8 12.8 0 0 0 7 4.8 14.5 14.5 0 0 0 3 6c-2.4 3.7-3 8.3-2.6 12.8a14.8 14.8 0 0 0 5.4 2.8c.7-.9 1.3-1.9 1.8-2.9a9.6 9.6 0 0 1-2.9-1.4c.2-.2.5-.3.7-.5a12.6 12.6 0 0 0 13.2 0c.2.2.5.3.7.5a9.6 9.6 0 0 1-2.9 1.4c.5 1 1.1 2 1.8 2.9a14.8 14.8 0 0 0 5.4-2.8c.4-5.2-.6-9.7-2.6-12.8z"></path>
                            <path d="M8.5 13.5c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5 1.5.7 1.5 1.5-.7 1.5-1.5 1.5z"></path>
                            <path d="M15.5 13.5c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5 1.5.7 1.5 1.5-.7 1.5-1.5 1.5z"></path>
                        </svg>
                        <span>Discord</span>
                    </a>
                    <!-- TikTok -->
                    <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Ver TikTok de Nexus Café">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
                        </svg>
                        <span>TikTok</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Barra inferior de copyright y aviso académico -->
    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <p class="copyright-text">
                &copy; 2026 Nexus Café & Gaming. Todos los derechos reservados.
            </p>
            <div class="academic-badge">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                </svg>
                <span>Este sitio forma parte de un proyecto académico.</span>
            </div>
        </div>
    </div>
</footer>
