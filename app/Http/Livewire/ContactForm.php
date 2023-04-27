<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactForm extends Component
{
    public $nombre;
    public $email;
    public $mensaje;

    protected $rules = [
        'nombre' => 'required|min:3',
        'email' => 'required|email',
        'mensaje' => 'required|min:5',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to('contacto@taurotransporte.cl')->send(new ContactFormMail([
            'nombre' => $this->name,
            'email' => $this->email,
            'mensaje' => $this->message,
        ]));

        session()->flash('success', 'Mensaje enviado correctamente.');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
