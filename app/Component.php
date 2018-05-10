<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * Get the componentSections for the component.
     */
    public function componentSections()
    {
        return $this->hasMany('TuNegocio\ComponentSection');
    }

    /**
     * The sections that belong to the section.
     */
    public function sections()
    {
        return $this->belongsToMany('TuNegocio\Section','component_sections')->withPivot('component_id', 'section_id', 'name');

    }

    /**
     * Get the componentAttributes for the component.
     */
    public function componentAttributes()
    {
        return $this->hasMany('TuNegocio\componentAttributes');
    }

}
