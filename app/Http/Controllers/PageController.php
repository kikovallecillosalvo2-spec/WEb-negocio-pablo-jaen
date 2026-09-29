<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Página principal (Home)
     */
    public function home()
    {
        return view('home', [
            'title' => 'NEXUS Café & Gaming | Tu partida empieza aquí',
            'meta_description' => 'Cybercafé moderno en Sevilla. Ordenadores gaming de alto rendimiento, café de especialidad y ambiente gamer profesional.'
        ]);
    }

    /**
     * Página de Tarifas
     */
    public function tarifas()
    {
        return view('tarifas', [
            'title' => 'Tarifas y Bonos Gaming | NEXUS Café & Gaming',
            'meta_description' => 'Consulta nuestros precios y pases por horas para jugar en ordenadores de última generación.'
        ]);
    }

    /**
     * Página de Instalaciones
     */
    public function instalaciones()
    {
        return view('instalaciones', [
            'title' => 'Instalaciones y Equipamiento | NEXUS Café & Gaming',
            'meta_description' => 'Conoce nuestras zonas: Gaming Arena, Estudio & Trabajo y Coffee Bar con hardware de última generación.'
        ]);
    }

    /**
     * Página de Contacto y Reservas
     */
    public function contacto()
    {
        return view('contacto', [
            'title' => 'Contacto y Reservas | NEXUS Café & Gaming',
            'meta_description' => 'Reserva tu puesto gaming o infórmate sobre nuestras salas para eventos y torneos.'
        ]);
    }

    /**
     * Procesamiento del formulario de reserva
     */
    public function submitReserva(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'fecha' => 'required|date',
            'horas' => 'required|integer|min:1|max:12',
            'personas' => 'required|integer|min:1|max:10',
            'puesto' => 'required|string',
            'mensaje' => 'nullable|string|max:500',
        ], [
            'nombre.required' => 'Por favor, indícanos tu nombre.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Introduce un correo electrónico válido.',
            'fecha.required' => 'Selecciona la fecha para tu reserva.',
            'horas.required' => 'Indica el número de horas.',
            'personas.required' => 'Indica el número de personas.',
            'puesto.required' => 'Selecciona el tipo de puesto deseado.',
        ]);

        return redirect()->route('contacto')
            ->with('success', '¡Solicitud de reserva recibida con éxito! Nos pondremos en contacto contigo en ' . $validated['email'] . ' para confirmar la disponibilidad de tu puesto.')
            ->withInput();
    }
}
