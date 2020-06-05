<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class ContactUpdate extends Component
{
    public $name;
    public $phone;
    public $contactId;

    protected $listeners = [
        'getContact' => 'showContact'
    ];

    public function render()
    {
        return view('livewire.contact.contact-update');
    }

    public function showContact($contact){
        $this->name      = $contact['name'];
        $this->phone     = $contact['phone'];
        $this->contactId = $contact['id'];
    }
}
