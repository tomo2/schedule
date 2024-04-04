<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class Edit extends Component
{   
    public $price;
    
    public $care;

    public function mount()
    {
        $this->price = 12;
    }


    public function render()
    {
        return view('livewire.edit');
    }


    public function number13() { $this->care = 368; }
    public function number14() { $this->care = 386; }
    public function number15() { $this->care = 567; }
    public function number16() { $this->care = 581; }
    public function number17() { $this->care = 655; }
    public function number18() { $this->care = 666; }


    public function number23() { $this->care = 421; }
    public function number24() { $this->care = 442; }
    public function number25() { $this->care = 670; }
    public function number26() { $this->care = 686; }
    public function number27() { $this->care = 773; }
    public function number28() { $this->care = 787; }

    public function number33() { $this->care = 477; }
    public function number34() { $this->care = 500; }
    public function number35() { $this->care = 773; }
    public function number36() { $this->care = 792; }
    public function number37() { $this->care = 896; }
    public function number38() { $this->care = 911; }

    public function number43() { $this->care = 530; }
    public function number44() { $this->care = 557; }
    public function number45() { $this->care = 876; }
    public function number46() { $this->care = 897; }
    public function number47() { $this->care = 1018; }
    public function number48() { $this->care = 1036; }

    public function number53() { $this->care = 585; }
    public function number54() { $this->care = 614; }
    public function number55() { $this->care = 979; }
    public function number56() { $this->care = 1003; }
    public function number57() { $this->care = 1142; }
    public function number58() { $this->care = 1162; }
}
