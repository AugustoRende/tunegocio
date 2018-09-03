<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentAttribute extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'component_id', 'order'
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
     * Get the componentSectionAttributes for the ComponentAttribute.
     */
    public function componentSectionAttributes()
    {
        return $this->hasMany('TuNegocio\ComponentSectionAttribute');
    }

    /**
     * Get the componentSectionUserAttributes for the ComponentAttribute.
     */
    public function componentSectionUserAttributes()
    {
        return $this->hasMany('TuNegocio\ComponentSectionUserAttribute');
    }

    /**
     * Get the Component that owns the ComponentAttribute.
     */
    public function component()
    {
        return $this->belongsTo('TuNegocio\Component');
    }

    /**
     * The componentSectionUsers that belong to the ComponentAttribute.
     */
    public function componentSectionUsers()
    {
        return $this->belongsToMany('TuNegocio\ComponentSectionUser','component_section_user_attribute','component_attribute_id','comp_section_user_id')->withPivot('comp_section_user_id', 'component_attribute_id', 'value', 'visible');

    }

    /**
     * The attributes that belong to the componentSection.
     */
    public function componentSections()
    {
        return $this->belongsToMany('TuNegocio\ComponentSection','component_section_attribute','comp_attribute_id','comp_section_id')->withPivot('comp_attribute_id','comp_section_id','value');
    }
}
