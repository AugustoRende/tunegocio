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
        'comp_section_user_id', 'component_attribute_id', 'value', 'visible',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * Get the componentAttribute that owns the ComponentSectionAttribute.
     */
    public function componentAttribute()
    {
        return $this->belongsTo('TuNegocio\ComponentAttribute');
    }

    /**
     * Get the componentAttribute that owns the ComponentSectionAttribute.
     */
    public function componentSectionUser()
    {
        return $this->belongsTo('TuNegocio\ComponentSectionUser');
    }

}
