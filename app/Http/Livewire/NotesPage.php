<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotesPage extends Component
{

    public $notes = [];
    public $selected = 0;

    public function mount()
    {
        $this->notes[] = "Hello There!";
    }

    public function addNote()
    {
        $this->notes[] = "";
        $this->selected = count($this->notes);
    }

    public function render()
    {
        return view('livewire.notes-page');
    }
}
