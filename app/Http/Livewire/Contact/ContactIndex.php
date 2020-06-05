<?php

namespace App\Http\Livewire\Contact;

use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'contactStored' => 'handleContactStore'
    ];

    public function render()
    {
        return view('livewire.contact.contact-index', [
            'data' => Contact::latest()->get()
        ]);
    }

    public function getContact($id){
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function handleContactStore($contact){
        session()->flash('message', 'Contact '.$contact['name'].' was stored!');
    }
}
