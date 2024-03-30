<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculation extends Component
{

    public $price;


    public function mount()
    {
        $this->price = 12;
    }


    public function number()
    {
        $this->price = 10;
    }

    public function render()
    {
        return view('livewire.calculation');
    }
}
