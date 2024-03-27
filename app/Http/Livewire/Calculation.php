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

    public $totalPrice;


    public function render()
    {
        return view('calculation');
    }
}
