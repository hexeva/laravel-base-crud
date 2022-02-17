<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';

    protected $fillable = [
        'title',
        'type',
        'thumb',
        'price',
        'series',
        'sale_date',
        'description',
    ];
}
