/**
 * NEXUS CAFÉ & GAMING
 * Script de interactividad: menú responsive, control de fechas y preselección de planes
 */

document.addEventListener('DOMContentLoaded', () => {
    // -------------------------------------------------------------------------
    // 1. CONTROL DEL MENÚ MÓVIL
    // -------------------------------------------------------------------------
    const mobileToggleBtn = document.getElementById('mobile-toggle-btn');
    const mobileCloseBtn = document.getElementById('mobile-close-btn');
    const mobileNavigation = document.getElementById('mobile-navigation');
    const mobileBackdrop = document.getElementById('mobile-backdrop');

    function openMobileMenu() {
        if (!mobileNavigation) return;
        mobileNavigation.classList.add('open');
        mobileNavigation.setAttribute('aria-hidden', 'false');
        if (mobileToggleBtn) {
            mobileToggleBtn.setAttribute('aria-expanded', 'true');
        }
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        if (!mobileNavigation) return;
        mobileNavigation.classList.remove('open');
        mobileNavigation.setAttribute('aria-hidden', 'true');
        if (mobileToggleBtn) {
            mobileToggleBtn.setAttribute('aria-expanded', 'false');
        }
        document.body.style.overflow = '';
    }

    if (mobileToggleBtn) {
        mobileToggleBtn.addEventListener('click', openMobileMenu);
    }

    if (mobileCloseBtn) {
        mobileCloseBtn.addEventListener('click', closeMobileMenu);
    }

    if (mobileBackdrop) {
        mobileBackdrop.addEventListener('click', closeMobileMenu);
    }

    // Cerrar menú móvil con tecla Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileNavigation && mobileNavigation.classList.contains('open')) {
            closeMobileMenu();
        }
    });

    // -------------------------------------------------------------------------
    // 2. RESTRICCIÓN DE FECHAS EN EL FORMULARIO (MÍNIMO HOY)
    // -------------------------------------------------------------------------
    const fechaInput = document.getElementById('fecha');
    if (fechaInput) {
        const today = new Date().toISOString().split('T')[0];
        fechaInput.min = today;
    }

    // -------------------------------------------------------------------------
    // 3. PARÁMETROS URL EN FORMULARIO DE RESERVA (EJ. ?plan=pro)
    // -------------------------------------------------------------------------
    const urlParams = new URLSearchParams(window.location.search);
    const planParam = urlParams.get('plan');
    const puestoSelect = document.getElementById('puesto');
    const horasSelect = document.getElementById('horas');

    if (planParam && puestoSelect && horasSelect) {
        if (planParam === 'casual') {
            puestoSelect.value = 'Gaming Estándar 144Hz';
            horasSelect.value = '1';
        } else if (planParam === 'pro') {
            puestoSelect.value = 'Gaming Premium Pro 165Hz';
            horasSelect.value = '3';
        } else if (planParam === 'dia') {
            puestoSelect.value = 'Gaming Premium Pro 165Hz';
            horasSelect.value = '12';
        }
    }

    // -------------------------------------------------------------------------
    // 4. EFECTO HEADER STICKY AL HACER SCROLL
    // -------------------------------------------------------------------------
    const siteHeader = document.getElementById('site-header');
    if (siteHeader) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                siteHeader.style.borderBottomColor = 'rgba(16, 245, 118, 0.2)';
                siteHeader.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.8)';
            } else {
                siteHeader.style.borderBottomColor = '#1e293b';
                siteHeader.style.boxShadow = 'none';
            }
        });
    }
});
