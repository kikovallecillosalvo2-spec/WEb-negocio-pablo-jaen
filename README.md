# NEXUS CAFÉ & GAMING — Plataforma Web Oficial

> **Proyecto Académico de Desarrollo Web con Laravel, Blade y CSS Moderno.**  
> Aplicación web profesional, temática cyberpunk/esports con estética dark y acentos neón verde lima, desarrollada para un cybercafé vanguardista de alto rendimiento.

---

## 1. Concepto del Negocio

**NEXUS CAFÉ & GAMING** es un cybercafé moderno situado en Sevilla que combina la potencia tecnológica de una arena de deportes electrónicos de máximo nivel con el confort y la atmósfera de una cafetería de especialidad.

### Servicios ofrecidos:
- **Alquiler de ordenadores gaming por horas**: Monitores Fast IPS de 144Hz a 240Hz, tarjetas gráficas NVIDIA RTX Serie 40 y procesadores de última generación.
- **Zona Estudio & Trabajo**: Espacio tranquilo e insonorizado para estudiantes universitarios, programadores y diseñadores gráficos con tomas de carga USB-C PD 100W y Wi-Fi 6E.
- **Coffee Bar de especialidad**: Cafés 100% arábica de tueste natural molidos al instante, refrescos, bebidas energéticas y snacks dulces/salados servidos directamente en el puesto.
- **Reserva anticipada de puestos**: Formulario web interactivo con validación para solicitar puestos individuales, dúos o salas completas para escuadras de competición.
- **Consulta de tarifas y bonos**: Información detallada de precios por hora, pase pro y día completo con bonos acumulables.
- **Atención y contacto**: Ubicación física, horario ininterrumpido y canales comunitarios en redes sociales.

---

## 2. Requisitos Técnicos Cumplidos

| Requisito | Estado | Implementación en el Proyecto |
| :--- | :---: | :--- |
| **Framework Laravel** | Cumplido | Arquitectura MVC limpia basada en Laravel 12 con PHP 8.2+. |
| **Motor de Plantillas Blade** | Cumplido | Vistas `.blade.php` con herencia de plantillas (`@extends`, `@section`, `@yield`). |
| **Layout común** | Cumplido | `resources/views/layouts/app.blade.php` como contenedor maestro con metaetiquetas, tipografías y enlaces a CSS/JS. |
| **Header compartido** | Cumplido | `resources/views/partials/header.blade.php` con menú activo dinámico (`request()->is(...)`), logotipo y menú hamburguesa responsive. |
| **Footer compartido** | Cumplido | `resources/views/partials/footer.blade.php` con descripción, enlaces rápidos, redes sociales, copyright y aviso académico. |
| **Mínimo 3 rutas y vistas** | Cumplido | 4 páginas completas + 1 ruta POST para tramitar reservas: `/`, `/tarifas`, `/instalaciones`, `/contacto` y `POST /contacto`. |
| **CSS propio** | Cumplido | `public/css/nexus.css`: Hoja de estilos personalizada de más de 800 líneas, sin frameworks pesados, con CSS Grid, Flexbox, variables CSS y animaciones neón. |
| **Imágenes locales** | Cumplido | Imágenes almacenadas localmente en `public/images/` (`hero-gaming.jpg`, `pc-station.jpg`, `coffee-bar.jpg`, `study-cowork.jpg`, etc.). |
| **Enlaces externos** | Cumplido | Redes sociales y Google Maps configurados con `target="_blank"` y `rel="noopener noreferrer"`. |
| **Sin Lorem Ipsum** | Cumplido | 100% de textos originales, redactados con tono realista, técnico y comercial. |
| **Cero Emojis** | Cumplido | Ausencia total de emojis según la restricción del proyecto; reemplazados por iconos vectoriales SVG limpios y badges CSS de alta resolución. |
| **Diseño Responsive** | Cumplido | Totalmente adaptable a móviles, tablets y monitores panorámicos de escritorio mediante Media Queries y menú drawer en JavaScript nativo. |

---

## 3. Estructura de Páginas y Rutas

### Página 1 — Inicio (`/` ➜ `home.blade.php`)
- **Hero Principal**: Título "NEXUS CAFÉ & GAMING", eslogan *"Tu partida empieza aquí"*, subtítulo con propuesta de valor, botones *"Reservar ordenador"* y *"Ver tarifas"*, métricas rápidas (240Hz, <5ms latencia, 1 Gbps) e imagen local de alta calidad.
- **Sección "¿Qué es Nexus?"**: Explicación del concepto fusionado de arena esports + café de especialidad.
- **Sección de Características**: 6 tarjetas con iconografía SVG (Gaming de alto rendimiento, Café y bebidas, Internet ultrarrápido, Puestos cómodos, Periféricos profesionales, Entorno seguro).
- **Sección "Nuestro Espacio"**: Galería visual de las instalaciones con imágenes locales de los equipos, el coffee bar y la zona coworking.
- **Sección de Llamada a la Acción (CTA)**: Bloque destacado *"¿Tienes unas horas libres?"* con botón directo a reserva.

### Página 2 — Tarifas (`/tarifas` ➜ `tarifas.blade.php`)
- **Tarjetas de Planes**:
  - **Pase Casual**: 3,50 €/hora (PC Gaming, Monitor 144 Hz, Internet de alta velocidad, Auriculares).
  - **Pase Pro (Destacado "Más elegido")**: 10 €/3 horas (PC Gaming Premium, Monitor 165 Hz, Periféricos gaming, Auriculares, Bebida incluida) con realce visual verde lima.
  - **Pase Día Completo**: 20 € (Uso ilimitado en horario de apertura, PC Gaming Premium, Bebida, WiFi, Periféricos).
- **Información Adicional Requerida**:
  - *Los precios pueden variar para eventos.*
  - *Se recomienda reservar durante fines de semana.*
  - *Las reservas están sujetas a disponibilidad.*
- **Sección de Bonos de Horas**: Bono 10 horas, Bono 25 horas y Pack Boot Camp para escuadras de 5 personas.

### Página 3 — Instalaciones (`/instalaciones` ➜ `instalaciones.blade.php`)
- **Zonas del Cybercafé**:
  - **Zona Gaming**: 40 puestos para esports competitivo y juegos actuales preinstalados en discos NVMe Gen4.
  - **Zona Estudio & Trabajo**: Espacio silencioso con conectividad USB-C PD 100W y monitores auxiliares.
  - **Coffee Bar**: Cafetería de especialidad con café 100% arábica de tueste natural y servicio en mesa.
- **Equipamiento Realista**:
  - Procesadores de alto rendimiento (Intel Core i7-14700K y AMD Ryzen 7 7800X3D).
  - Tarjetas gráficas dedicadas (NVIDIA GeForce RTX 4070 Ti y RTX 4080 Super).
  - Monitores de alta frecuencia de refresco (144 Hz, 165 Hz y 240 Hz Fast IPS 1ms).
  - Teclados mecánicos con switches ópticos lineales.
  - Ratones gaming ultraligeros con sensores de 26.000 DPI.
  - Auriculares con sonido espacial 7.1 y aislamiento acústico.
  - Sillas ergonómicas de grado profesional con soporte lumbar multiaxial.
  - Conexión de fibra de alta velocidad (doble línea simétrica corporativa de 1 Gbps con ping < 5ms).

### Página 4 — Contacto y Reservas (`/contacto` ➜ `contacto.blade.php`)
- **Datos del Establecimiento**:
  - Nexus Café & Gaming
  - Dirección: Calle Tecnología 42, Sevilla
  - Horario: Lunes - Domingo: 10:00 - 00:00
  - Teléfono: +34 600 123 456
  - Correo electrónico: hola@nexuscafe.test
- **Formulario de Reserva**:
  - Nombre completo
  - Correo electrónico
  - Fecha de reserva
  - Número de horas
  - Número de personas
  - Tipo de puesto
  - Mensaje adicional
  - Botón *"Solicitar reserva"*
  - Validación con mensajes de error amigables y mensaje flash de éxito tras el envío.
- **Canales y Enlaces Externos**:
  - Google Maps con simulación cartográfica en modo oscuro y botón GPS.
  - Instagram oficial (`target="_blank"` y `rel="noopener noreferrer"`).
  - Servidor de Discord comunitario (`target="_blank"` y `rel="noopener noreferrer"`).
  - Cuenta de TikTok (`target="_blank"` y `rel="noopener noreferrer"`).

---

## 4. Guía de Ejecución Local

### Prerrequisitos:
- PHP 8.2 o superior con extensiones habilitadas (`curl`, `fileinfo`, `mbstring`, `openssl`, `pdo_sqlite`, `sqlite3`, `zip`).
- Composer.

### Pasos para iniciar el servidor:
1. Clonar o abrir el directorio del proyecto en la terminal.
2. Si no existe el archivo `.env`, duplicar `.env.example`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Iniciar el servidor local integrado de Laravel:
   ```bash
   php artisan serve
   ```
4. Abrir el navegador en la dirección indicada:
   ```
   http://127.0.0.1:8000
   ```

---

## 5. Batería de Pruebas Automatizadas

El proyecto incluye una suite de pruebas PHPUnit en `tests/Feature/NexusWebsiteTest.php` que valida automáticamente:
1. Carga correcta con código HTTP 200 de las 4 páginas.
2. Presencia de todos los textos, títulos y especificaciones exigidos.
3. Validación del formulario de reservas (campos obligatorios y redirección con éxito).
4. Cumplimiento de enlaces externos (`target="_blank"` y `rel="noopener noreferrer"`).
5. **Comprobación estricta de ausencia de emojis** en el código generado mediante expresiones regulares Unicode.

Para ejecutar los tests:
```bash
php artisan test
```
*Resultado: 9 passed (77 assertions) — 100% de éxito.*
