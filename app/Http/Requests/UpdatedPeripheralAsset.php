<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedPeripheralAsset extends FormRequest
{
    
    public function rules()
    {
        return [
            'id_num' => '',
            'peripheral_name' => 'required',
            'peripheral_type' => '',
            'peripheral_brand' => '',
            'peripheral_spesification' => '',
            'peripheral_unit' => 'required',
            'peripheral_total' => 'required',
            'supplier' => '',
            'request_date' => '',
            'delivery_date' => '',
            'status' => 'required',
        ];
    }
}
