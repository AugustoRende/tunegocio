<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ComponentSectionAttribute extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comp_section_id', 'comp_attribute_id', 'value',
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
     * Get the componentSection that owns the ComponentSectionAttribute.
     */
    public function componentSection()
    {
        return $this->belongsTo('TuNegocio\ComponentSection');
    }
}
