<?php

namespace App\Livewire\Depo;

use App\Models\Depo as FindAllDepo;
use Livewire\Component;
use Livewire\WithPagination;

class Depo extends Component
{
    use WithPagination;

    public function render()
    {
        $depo = FindAllDepo::latest()->paginate(5);

        return view('livewire.depo.depo', ['depo' => $depo]);
    }
}
