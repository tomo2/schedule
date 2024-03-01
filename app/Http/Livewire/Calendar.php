<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Calendar extends Component
{
    // 今日の日付
    public $currentDate;
    // 月初の日にち
    public $firstDay;
    // 今月末の日にち
    public $lastDay;
    // 月初の曜日
    public $firstWeek;
    // 先月末の日にち
    public $endLastMonth;
    // 選択された日付の月末
    public $choiceMonthLastDay;
    
    public $currentWeek;
    public $day;


    // 初期画面
    public function mount()
    {
        // Carbonインスタンス
        $dt = new Carbon();

        $this->currentDate = $dt->today(); // 今日の日付
        $this->firstDay = $dt->copy()->startOfMonth()->format('d'); // 月初の日にち
        $this->lastDay = $dt->copy()->endOfMonth()->format('d'); // 月末の日にち
        $this->firstWeek = $dt->copy()->startOfMonth()->dayOfWeek; // 月初の曜日
        $this->endLastMonth = $dt->copy()->addMonth(-1)->endOfMonth()->format('d'); // 先月末の日にち


        $this->currentMonth = [];
        
        for($i = 0; $i < $this->lastDay; $i++){
            // 今月の日付を全て繰り返す
            $this->day = $dt->copy()->startOfMonth()->addDays($i)->format('m月d日');
            array_push($this->currentMonth, $this->day);
        }
        // dd($this->firstDay, $this->lastDay, $this->firstWeek, $this->endLastMonth, $this->currentMonth);
    }

    // ボタン操作後の画面
    public function getDate($date)
    {
        // Carbonインスタンス
        $dt = new Carbon();

        $this->currentDate = $date; // 選択した日付
        $this->firstDay = $dt->parse($this->currentDate)->copy()->startOfMonth()->format('Y-m-d'); // 選択月の月初の日にち

        $this->lastDay = $dt->parse($this->currentDate)->copy()->endOfMonth()->format('d'); // 選択された日付の月末

        $this->currentMonth = [];
        
        for($i = 0; $i < $this->lastDay; $i++){
            // 今月の日付を全て繰り返す
            $this->day = Carbon::parse($this->firstDay)->addDays($i)->format('m月d日');
            array_push($this->currentMonth, $this->day);
        }
    }

    
    public function render()
    {
        return view('livewire.calendar');
    }
}
