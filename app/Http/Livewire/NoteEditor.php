<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteEditor extends Component
{

    public $content;

    public function mount($note)
    {
        $this->content = $note;
    }
    public function render()
    {
        return view('livewire.note-editor');
    }
}
