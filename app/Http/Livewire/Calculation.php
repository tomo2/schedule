<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculation extends Component
{

    public $care = [1,2,3,4,5];
    //
    public $startTime;
    public $endTime;
    public $totalTime;

    public $totalPrice = 1;

    public $name = '';

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.calculation');
    }

    public function sample()
    {
        $this->name = 2;
    }

}
