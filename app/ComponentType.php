<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentType extends Model
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
     * Get the attributes for the component type.
     */
    public function attributes()
    {
        return $this->hasMany('TuNegocio\ComponentTypeAttribute');
    }

    /**
     * Get the components for the component type.
     */
    public function components()
    {
        return $this->hasMany('TuNegocio\Component');
    }
}
