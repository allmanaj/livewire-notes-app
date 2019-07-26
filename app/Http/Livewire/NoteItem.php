<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteItem extends Component
{

    public $note;

    public function mount($note)
    {
        $this->note = $note;
    }

    public function render()
    {
        return view('livewire.note-item');
    }
}
