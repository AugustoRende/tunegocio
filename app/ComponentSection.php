<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Model;

class ComponentSection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'component_id', 'section_id',
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
     * Get the componentSectionAttributes for the ComponentSection.
     */
    public function componentSectionAttributes()
    {
        return $this->hasMany('TuNegocio\ComponentSectionAttribute');
    }

    /**
     * Get the section that owns the ComponentSection.
     */
    public function section()
    {
        return $this->belongsTo('TuNegocio\Section');
    }

    /**
     * Get the component that owns the ComponentSection.
     */
    public function component()
    {
        return $this->belongsTo('TuNegocio\Section');
    }

    /**
     * The users that belong to the componentSection.
     */
    public function users()
    {
        return $this->belongsToMany('TuNegocio\User','component_section_users')->withPivot('user_id','component_section_id','color');
    }

    /**
     * The attributes that belong to the componentSection.
     */
    public function attributes()
    {
        return $this->belongsToMany('TuNegocio\ComponentAttribute', 'component_section_attribute','comp_section_id','comp_attribute_id')->withPivot('comp_attribute_id','comp_section_id','value');
    }
}
