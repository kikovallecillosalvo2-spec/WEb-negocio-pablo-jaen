<?php

namespace Tests\Feature;

use Tests\TestCase;

class NexusWebsiteTest extends TestCase
{
    /**
     * Test Página 1: Inicio (/)
     */
    public function test_home_page_loads_and_has_required_content(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('NEXUS', false);
        $response->assertSee('CAFÉ & GAMING', false);
        $response->assertSee('Tu partida empieza aquí.', false);
        $response->assertSee('Ordenadores gaming de alto rendimiento, café recién hecho y un espacio diseñado para jugar, estudiar y trabajar.', false);
        $response->assertSee('Reservar ordenador', false);
        $response->assertSee('Ver tarifas', false);
        $response->assertSee('¿Qué es Nexus?', false);
        $response->assertSee('Gaming de alto rendimiento', false);
        $response->assertSee('Café y bebidas', false);
        $response->assertSee('Internet ultrarrápido', false);
        $response->assertSee('Puestos cómodos', false);
        $response->assertSee('Periféricos profesionales', false);
        $response->assertSee('Entorno seguro', false);
        $response->assertSee('Nuestro Espacio', false);
        $response->assertSee('¿Tienes unas horas libres?', false);
        $response->assertSee('Reserva tu puesto, elige tu equipo y disfruta de una experiencia gaming sin preocuparte por el hardware.', false);
        $response->assertSee('hero-gaming.jpg', false);
    }

    /**
     * Test Página 2: Tarifas (/tarifas)
     */
    public function test_tarifas_page_loads_and_has_pricing_plans(): void
    {
        $response = $this->get('/tarifas');

        $response->assertStatus(200);
        $response->assertSee('Pase Casual', false);
        $response->assertSee('3,50 €', false);
        $response->assertSee('Monitor 144 Hz', false);
        $response->assertSee('Pase Pro', false);
        $response->assertSee('10 €', false);
        $response->assertSee('3 horas', false);
        $response->assertSee('Más elegido', false);
        $response->assertSee('Monitor 165 Hz', false);
        $response->assertSee('Bebida incluida', false);
        $response->assertSee('Pase Día Completo', false);
        $response->assertSee('20 €', false);
        $response->assertSee('Uso ilimitado durante el horario de apertura', false);
        $response->assertSee('Los precios pueden variar para eventos.', false);
        $response->assertSee('Se recomienda reservar durante fines de semana.', false);
        $response->assertSee('Las reservas están sujetas a disponibilidad.', false);
    }

    /**
     * Test Página 3: Instalaciones (/instalaciones)
     */
    public function test_instalaciones_page_loads_and_has_zones_and_hardware(): void
    {
        $response = $this->get('/instalaciones');

        $response->assertStatus(200);
        $response->assertSee('Zona Gaming', false);
        $response->assertSee('Zona Estudio & Trabajo', false);
        $response->assertSee('Coffee Bar', false);
        $response->assertSee('Procesadores de alto rendimiento', false);
        $response->assertSee('Tarjetas gráficas dedicadas', false);
        $response->assertSee('Monitores de alta frecuencia de refresco', false);
        $response->assertSee('Teclados mecánicos', false);
        $response->assertSee('Ratones gaming', false);
        $response->assertSee('Auriculares', false);
        $response->assertSee('Sillas ergonómicas', false);
        $response->assertSee('Conexión de fibra de alta velocidad', false);
    }

    /**
     * Test Página 4: Contacto (/contacto)
     */
    public function test_contacto_page_loads_and_has_details_and_form(): void
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
        $response->assertSee('Nexus Café &amp; Gaming', false);
        $response->assertSee('Calle Tecnología 42, Sevilla', false);
        $response->assertSee('Lunes - Domingo: 10:00 - 00:00', false);
        $response->assertSee('+34 600 123 456', false);
        $response->assertSee('hola@nexuscafe.test', false);
        $response->assertSee('Solicitar reserva', false);
        $response->assertSee('Google Maps', false);
        $response->assertSee('Instagram', false);
        $response->assertSee('Discord', false);
        $response->assertSee('target="_blank"', false);
        $response->assertSee('rel="noopener noreferrer"', false);
    }

    /**
     * Test Formulario de Reserva (POST /contacto)
     */
    public function test_booking_form_submission_and_validation(): void
    {
        // Prueba con campos vacíos -> debe redireccionar con errores
        $invalidResponse = $this->post('/contacto', []);
        $invalidResponse->assertSessionHasErrors(['nombre', 'email', 'fecha', 'horas', 'personas', 'puesto']);

        // Prueba con datos válidos -> debe redireccionar con éxito
        $validData = [
            'nombre' => 'Carlos Gamer',
            'email' => 'carlos@nexus.test',
            'fecha' => '2026-10-15',
            'horas' => 3,
            'personas' => 2,
            'puesto' => 'Gaming Premium Pro 165Hz',
            'mensaje' => 'Por favor puestos contiguos para jugar en duo.',
        ];

        $validResponse = $this->post('/contacto', $validData);
        $validResponse->assertRedirect('/contacto');
        $validResponse->assertSessionHas('success');
    }

    /**
     * Test Footer común y enlaces
     */
    public function test_footer_contains_required_information(): void
    {
        $response = $this->get('/');
        $response->assertSee('2026 Nexus Café & Gaming. Todos los derechos reservados.', false);
        $response->assertSee('Este sitio forma parte de un proyecto académico.', false);
        $response->assertSee('TikTok', false);
    }

    /**
     * Test estricto: Comprobar que NO hay ningún emoji en las vistas
     */
    public function test_no_emojis_in_views(): void
    {
        $views = ['/', '/tarifas', '/instalaciones', '/contacto'];

        // Expresión regular para detectar emojis Unicode
        $emojiPattern = '/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{1F700}-\x{1F77F}\x{1F780}-\x{1F7FF}\x{1F800}-\x{1F8FF}\x{1F900}-\x{1F9FF}\x{1FA00}-\x{1FA6F}\x{1FA70}-\x{1FAFF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}]/u';

        foreach ($views as $url) {
            $response = $this->get($url);
            $content = $response->getContent();
            $hasEmoji = preg_match($emojiPattern, $content, $matches);
            $this->assertFalse((bool) $hasEmoji, "Se encontró un emoji no deseado en la vista {$url}: " . ($matches[0] ?? ''));
        }
    }
}
