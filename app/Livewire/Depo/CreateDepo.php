<?php

namespace App\Livewire\Depo;

use App\Models\Depo;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateDepo extends Component
{
    public $title = 'Menu Depo';
    public $name = '';

    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('depo')->ignore($this->name),
            ],
        ];
    }

    public function save() {
        $this->validate();
        Depo::create(
            $this->only(['name'])
        );

        session()->flash('status', 'Depo successfully created');

        $this->redirect('/depo');
    }
    public function render()
    {
        return view('livewire.depo.create-depo');
    }
}
