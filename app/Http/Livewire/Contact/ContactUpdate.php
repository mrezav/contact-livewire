<?php

namespace App\Http\Livewire\Contact;

use App\Contact;
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

    public function updateContact(){
        $this->validate([
            'name'  => 'required|min:3|max:50',
            'phone' => 'required|min:6|max:16'
        ]);

        if($this->contactId){
            $contact = Contact::find($this->contactId);
            $contact->update([
                'name' => $this->name,
                'phone' => $this->phone
            ]);

            $this->resetForm();
            $this->emit('contactUpdated', $contact);
        }
    }

    private function resetForm(){
        $this->name  = null;
        $this->phone = null;
    }
}
