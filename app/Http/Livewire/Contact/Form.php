<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class Form extends Component
{
    public $contact;

    public function mount(){
        $this->contact = new VisitorRequest();
    }

    public function render()
    {
        return view('pages.product.components.contact');
    }

    protected function rules(){
        return[
            'contact.name' => 'required',
            'contact.email' => 'required|email',
            'contact.subject' => 'required',
            'contact.message' => 'required',
        ];
    }

    public function update(string $propertyname):void
    {
        $this->validateOnly($propertyname);
    }

    public function submit()
    {
        $this->validate();
        VisitorRequestFacade::store($this->contect->toArray());

        $this->dispatchBrowserEvent('live-alert',[
            'type'=>'success',
            'msg'=>'Create Successfully',
        ]);
        $this->contact = new VisitorRequest();
    }
}
