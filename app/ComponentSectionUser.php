<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Model;

class ComponentSectionUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'component_section_id', 'color',
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
     * Get the componentSectionUserAttributes for the ComponentSectionUser.
     */
    public function componentSectionUserAttributes()
    {
        return $this->hasMany('TuNegocio\ComponentSectionUserAttribute');
    }

    /**
     * Get the user that owns the componentSectionUser.
     */
    public function user()
    {
        return $this->belongsTo('TuNegocio\User');
    }

    /**
     * Get the componentSection that owns the componentSectionUser.
     */
    public function componentSection()
    {
        return $this->belongsTo('TuNegocio\ComponentSection');
    }

    /**
     * The attributes that belong to the componentSectionUser.
     */
    public function attributes()
    {
        return $this->belongsToMany('TuNegocio\ComponentAttribute','component_section_user_attribute','comp_section_user_id','component_attribute_id')->withPivot('comp_section_user_id', 'component_attribute_id', 'value','visible');

    }
}
