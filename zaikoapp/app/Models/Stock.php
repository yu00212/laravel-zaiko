<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'purchase_date' => 'required|date|date_format:Y-m-d',
        'deadline' => 'required|date|date_format:Y-m-d',
        'name' => 'required|string',
        'price' => 'numeric|integer|digits_between:1,4',
        'number' => 'numeric|integer|digits_between:1,2'
    );

}
