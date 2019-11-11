<?php

namespace App\models;

use App\Models\Section;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

        'name',
        'price',
        'country_origin',
        'section_id',
        'state_id'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
