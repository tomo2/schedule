<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'care',
        'date',
        'start_time',
        'end_time',
        // 'price',
    ];

    // なぜかsをつけないとうまく表示されない!!!!

    // protected function date(): Attribute
    // {
    //     return new Attribute(
    //         get: fn() => Carbon::parse($this->date)->format('Y年m月d日')
    //     );
    // }

    // protected function startTime(): Attribute
    // {
    //     return new Attribute(
    //         get: fn() => Carbon::parse($this->start_time)->format('H時i分')
    //     );
    // }

    // protected function endTime(): Attribute
    // {
    //     return new Attribute(
    //         get: fn() => Carbon::parse($this->end_time)->format('H時i分')
    //     );
    // }
}
