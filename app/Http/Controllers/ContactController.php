<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function enviarCorreo(Request $request)
{
    // Validar y obtener los datos del formulario de contacto
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Enviar el correo
    Mail::to($request->email)->send(new ContactMail($data));
    
    // Redireccionar o mostrar un mensaje de éxito
    return redirect()->back()->with('success', 'El mensaje se ha enviado correctamente.');

}
}
