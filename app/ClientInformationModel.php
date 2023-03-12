<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientInformationModel extends Model
{
    //
    // use SoftDeletes;

    protected $table = 'client_information';
}
