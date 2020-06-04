<?php

namespace App\Http\Livewire\Contact;

use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    // public $data;

    protected $listeners = [
        'contactStored' => 'handleContactStore'
    ];

    public function render()
    {
        // $this->data = Contact::latest()->get();
        return view('livewire.contact.contact-index', [
            'data' => Contact::latest()->get()
        ]);
    }

    public function handleContactStore($contact){

    }
}
