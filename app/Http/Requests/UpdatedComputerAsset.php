<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedComputerAsset extends FormRequest
{

    public function rules()
    {
        return [
            'id_num' => 'required',
            'computer_name' => 'required',
            'computer_type' => 'required',
            'computer_brand' => 'required',
            'computer_unit' => 'required',
            'computer_total' => 'required',
            'supplier' => 'required',
            'request_date' => 'required',
            'delivery_date' => 'required',
            'status' => 'required',
            'processor' => 'required',
            'motherboard' => '',
            'memory' => 'required',
            'display_card' => '',
            'hard_drive' => 'required',
            'optical_drive' => '',
            'network_card' => '',
            'power_supply' => '',
            'monitor' => '',
            'keyboard' => '',
            'mouse' => '',
        ];
    }
}
