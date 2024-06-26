<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:30'],
            'date' => ['required', 'date'],
            'price' => ['required'],
            'user_id' => ['required'],
            // 'start_time' => ['required'],
            // 'end_time' => ['required', 'after:start_time'],
        ];
    }
}
