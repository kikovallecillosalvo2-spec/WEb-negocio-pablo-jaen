<header class="site-header" id="site-header">
    <div class="header-container">
        <!-- Logo de NEXUS Café & Gaming -->
        <a href="{{ route('home') }}" class="brand-logo" aria-label="NEXUS Café y Gaming - Inicio">
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
        </a>

        <!-- Menú de Navegación de Escritorio -->
        <nav class="desktop-navigation" aria-label="Navegación principal">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tarifas') }}" class="nav-link {{ request()->is('tarifas*') ? 'active' : '' }}">
                        Tarifas
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('instalaciones') }}" class="nav-link {{ request()->is('instalaciones*') ? 'active' : '' }}">
                        Instalaciones
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contacto') }}" class="nav-link {{ request()->is('contacto*') ? 'active' : '' }}">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Botón de acción destacado -->
        <div class="header-action">
            <a href="{{ route('contacto') }}#reserva-form" class="btn btn-neon-header">
                <span class="btn-text">Reservar</span>
                <svg class="btn-arrow" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            
            <!-- Botón menú hamburguesa para móviles -->
            <button type="button" class="mobile-toggle-btn" id="mobile-toggle-btn" aria-label="Abrir menú de navegación" aria-expanded="false" aria-controls="mobile-navigation">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
        </div>
    </div>

    <!-- Menú desplegable para dispositivos móviles -->
    <div class="mobile-navigation" id="mobile-navigation" aria-hidden="true">
        <div class="mobile-nav-backdrop" id="mobile-backdrop"></div>
        <div class="mobile-nav-panel">
            <div class="mobile-nav-header">
                <div class="logo-typography">
                    <span class="logo-name">NEXUS</span>
                    <span class="logo-tagline">CAFÉ & GAMING</span>
                </div>
                <button type="button" class="mobile-close-btn" id="mobile-close-btn" aria-label="Cerrar menú">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <ul class="mobile-nav-menu">
                <li class="mobile-nav-item">
                    <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->is('/') ? 'active' : '' }}">
                        Inicio
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ route('tarifas') }}" class="mobile-nav-link {{ request()->is('tarifas*') ? 'active' : '' }}">
                        Tarifas
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ route('instalaciones') }}" class="mobile-nav-link {{ request()->is('instalaciones*') ? 'active' : '' }}">
                        Instalaciones
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ route('contacto') }}" class="mobile-nav-link {{ request()->is('contacto*') ? 'active' : '' }}">
                        Contacto
                    </a>
                </li>
            </ul>
            <div class="mobile-nav-footer">
                <a href="{{ route('contacto') }}#reserva-form" class="btn btn-neon-block">
                    Reservar Puesto
                </a>
            </div>
        </div>
    </div>
</header>
