<?php

namespace App\Http\Livewire\Contact;

use App\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact.contact-create');
    }

    public function storeContact(){
        $this->validate([
            'name'  => 'required|min:3|max:50',
            'phone' => 'required|min:6|max:16'
        ]);

        $contact = Contact::create([
            'name'  => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetForm();
        $this->emit('contactStored', $contact);
    }

    private function resetForm(){
        $this->name  = null;
        $this->phone = null;
    }
}
