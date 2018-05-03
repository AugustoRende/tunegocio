<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Model;

class ComponentSectionUserAttribute extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'comp_section_user_id', 'comp_type_attribute_id', 'value',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
