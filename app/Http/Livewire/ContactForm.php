<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function submitForm()
    {
        $this->validate();

        Mail::to('contacto@taurotransporte.cl')->send(new ContactFormMail([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]));

        session()->flash('success', 'Mensaje enviado correctamente.');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
