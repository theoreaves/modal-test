<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class ChildModal extends ModalComponent
{
    public $name;

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.child-modal');
    }

    public function closeAndUpdateHelloWorld()
    {
        $this->closeModalWithEvents([
//            'childModalEvent', // Emit global event
//            HelloWorld::getName() => 'childModalEvent',
            HelloWorld::getName() => ['childModalEvent', [10]]
            ]);
//        HelloWorld::getName() => ['childModalEvent', [10]];
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }
}
