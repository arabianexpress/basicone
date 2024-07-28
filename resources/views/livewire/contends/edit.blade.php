<?php

use App\Models\Contend; 
use Livewire\Attributes\Validate; 
use Livewire\Volt\Component;

new class extends Component {

    public Contend $contend; 
 
    #[Validate('required|string|max:255')]
    public string $message = '';
 
    public function mount(): void
    {
        $this->message = $this->contend->message;
    }
 
    public function update(): void
    {
        $this->authorize('update', $this->contend);
 
        $validated = $this->validate();
 
        $this->contend->update($validated);
 
        $this->dispatch('contend-updated');
    }
 
    public function cancel(): void
    {
        $this->dispatch('contend-edit-canceled');
    }  
}; ?>

<div>
<form wire:submit="update"> 
        <textarea
            wire:model="message"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
        <button class="mt-4" wire:click.prevent="cancel">Cancel</button>
    </form> 
</div>
