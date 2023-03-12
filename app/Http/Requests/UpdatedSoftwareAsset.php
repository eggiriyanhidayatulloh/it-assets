<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedSoftwareAsset extends FormRequest
{
   
    public function rules()
    {
        return [
            'id_num' => 'required',
            'software_name' => 'required',
            'software_type' => 'required',
            'software_brand' => 'required',
            'software_unit' => 'required',
            'software_total' => 'required',
            'serial_number' => 'required',
            'supplier' => 'required',
            'request_date' => 'required',
            'delivery_date' => 'required',
            'status' => 'required',
        ];
    }
}
