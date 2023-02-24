<?php

namespace App\Http\Livewire;

use App\Models\Gejala;
use App\Models\TesStore;
use Livewire\Component;
use Livewire\WithPagination;

class Simi extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.simi', [
            'items' => Gejala::paginate(5),
            'check' => TesStore::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
