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
    // 月末の曜日
    public $lastWeek;
    // 先月末の日にち
    public $endLastMonth;
    


    public $currentMonth;
    public $day;
    public $lastMonth;
    public $nextMonth;
    public $calendar;


    // 初期画面
    public function mount()
    {
        // Carbonインスタンス
        $dt = new Carbon();

        $this->currentDate = $dt->today(); // 今日の日付
        $this->firstDay = $dt->copy()->startOfMonth()->format('d'); // 月初の日にち
        $this->lastDay = $dt->copy()->endOfMonth()->format('d'); // 月末の日にち
        $this->firstWeek = $dt->copy()->startOfMonth()->dayOfWeek; // 月初の曜日
        $this->lastWeek = $dt->copy()->endOfMonth()->dayOfWeek; // 月末の曜日
        $this->endLastMonth = $dt->copy()->addMonth(-1)->endOfMonth()->format('d'); // 先月末の日にち


        $this->currentMonth = [];
        $this->lastMonth = [];
        $this->nextMonth = [];
        $this->calendar = [];

        // 先月末の表示される分
        for($day = 0; $day < $this->firstWeek; $day++){
            $this->lastMonth[] = "空白";
        }

        // 来月の表示される分
        for($day = 0; $day + $this->lastWeek < 6; $day++){
            $this->nextMonth[] = "空白";
        }

        // 今月の日付を全て繰り返す
        for($i = 0; $i < $this->lastDay; $i++){
            $this->day = $dt->copy()->startOfMonth()->addDays($i)->format('d日');
            array_push($this->currentMonth, $this->day);
        }
        

        $this->calendar = array_merge($this->lastMonth, $this->currentMonth, $this->nextMonth);
        
        
        
        // dd($this->firstDay, $this->lastDay, $this->firstWeek, $this->lastWeek, $this->endLastMonth, $this->currentMonth, $this->lastMonth, $this->nextMonth, $this->calendar);
    }

    // ボタン操作後の画面
    public function getDate($date)
    {
        // Carbonインスタンス
        $dt = new Carbon();

        $this->currentDate = $date; // 選択した日付
        $this->firstDay = $dt->parse($this->currentDate)->copy()->startOfMonth()->format('Y-m-d'); // 選択月の月初の日にち
        $this->lastDay = $dt->parse($this->currentDate)->copy()->endOfMonth()->format('d'); // 選択された日付の月末の日

        $this->firstWeek = $dt->parse($this->currentDate)->copy()->startOfMonth()->dayOfWeek; // 月初の曜日
        $this->lastWeek = $dt->parse($this->currentDate)->copy()->endOfMonth()->dayOfWeek; // 月末の曜日

        // 3つの配列を空にする。
        $this->calendar = [];
        $this->currentMonth = []; 
        $this->lastMonth = [];
        $this->nextMonth = [];


        // 先月末の表示される分
        for($day = 0; $day < $this->firstWeek; $day++){
            $this->lastMonth[] = "空白";
        }

        // 来月の表示される分
        for($day = 0; $day + $this->lastWeek < 6; $day++){
            $this->nextMonth[] = "空白";
        }

        
        for($i = 0; $i < $this->lastDay; $i++){
            // 選択した日付を全て繰り返す
            $this->day = Carbon::parse($this->firstDay)->addDays($i)->format('d日');
            array_push($this->currentMonth, $this->day);
        }

        $this->calendar = array_merge($this->lastMonth, $this->currentMonth, $this->nextMonth);


        // dd($this->firstDay, $this->lastDay, $this->currentMonth);
    }

    
    public function render()
    {
        return view('livewire.calendar');
    }
}
