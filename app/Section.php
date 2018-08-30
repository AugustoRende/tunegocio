<?php

namespace TuNegocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'theme_id', 'href', 'allow_image', 'visible',
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
     * Get the theme that owns the section.
     */
    public function theme()
    {
        return $this->belongsTo('TuNegocio\Theme');
    }

    /**
     * Get the componentSections for the section.
     */
    public function componentSections()
    {
        return $this->hasMany('TuNegocio\ComponentSection');
    }

    /**
     * The components that belong to the section.
     */
    public function components()
    {
        return $this->belongsToMany('TuNegocio\Component','component_sections')->withPivot('component_id', 'section_id', 'name');

    }
}