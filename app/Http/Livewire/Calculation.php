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


    public function mount()
    {
        $this->startTime = 1;

    }

    public function render()
    {
        $this->startTime = [];


        return view('livewire.calculation');
    }

    public function updated($property)
    {
        
        $this->startTime($propety);
    }


}
