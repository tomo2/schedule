<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculation extends Component
{

    public $price;

    public $region;
    
    public $care;

    public function mount()
    {
        $this->price = 0;
        // 地域別計算
        $this->region = 10.72;
    }


    public function render()
    {
        return view('livewire.calculation');
    }


    // number 介護度、時間
    public function number13() { floor($this->price = 368 * $this->region); }
    public function number14() { floor($this->price = 386 * $this->region); }
    public function number15() { floor($this->price = 567 * $this->region); }
    public function number16() { floor($this->price = 581 * $this->region); }
    public function number17() { floor($this->price = 655 * $this->region); }
    public function number18() { floor($this->price = 666 * $this->region); }

    public function number23() { floor($this->price = 421 * $this->region); }
    public function number24() { floor($this->price = 442 * $this->region); }
    public function number25() { floor($this->price = 670 * $this->region); }
    public function number26() { floor($this->price = 686 * $this->region); }
    public function number27() { floor($this->price = 773 * $this->region); }
    public function number28() { floor($this->price = 787 * $this->region); }

    public function number33() { floor($this->price = 477 * $this->region); }
    public function number34() { floor($this->price = 500 * $this->region); }
    public function number35() { floor($this->price = 773 * $this->region); }
    public function number36() { floor($this->price = 792 * $this->region); }
    public function number37() { floor($this->price = 896 * $this->region); }
    public function number38() { floor($this->price = 911 * $this->region); }

    public function number43() { floor($this->price = 530 * $this->region); }
    public function number44() { floor($this->price = 557 * $this->region); }
    public function number45() { floor($this->price = 876 * $this->region); }
    public function number46() { floor($this->price = 897 * $this->region); }
    public function number47() { floor($this->price = 1018 * $this->region); }
    public function number48() { floor($this->price = 1036 * $this->region); }

    public function number53() { floor($this->price = 585 * $this->region); }
    public function number54() { floor($this->price = 614 * $this->region); }
    public function number55() { floor($this->price = 979 * $this->region); }
    public function number56() { floor($this->price = 1003 * $this->region); }
    public function number57() { floor($this->price = 1142 * $this->region); }
    public function number58() { floor($this->price = 1162 * $this->region); }
}
