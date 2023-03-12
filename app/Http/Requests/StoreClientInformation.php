<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientInformation extends FormRequest
{
    public function rules()
    {
        return [
            'computer_name' => 'required',
            'ip_address' => 'required',
            'connection_type' => 'required',
            'room' => 'required',
            'employee_number' => 'required',
            'user_name' => 'required',
            'position' => 'required',
            'department' => 'required',
            'start_using_date' => 'required',
        ];
    }
}
