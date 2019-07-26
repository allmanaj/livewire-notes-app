<div class="h-full">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="py-1 border border-t-0 border-l-0 border-r-0">
        <button wire:click="addNote" class="ml-4 border text-center py-1 px-3 text-sm hover:bg-yellow">New Note</button>
    </div>
    <div class="flex flex-row h-full">
        <div class="h-full border border-l-0 border-b-0 border-t-0 w-1/5">
            @foreach($notes as $key => $note)
                @livewire('note-item', $note, key($key))
            @endforeach
        </div>
        <div class="flex-grow">
            @livewire('note-editor', $notes[$selected])
        </div>
    </div>
</div>
