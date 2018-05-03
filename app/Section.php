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
        'code', 'name', 'theme_id', 'href', 'allow_image',
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
     * The users that belong to the section.
     */
    public function users()
    {
        return $this->belongsToMany('TuNegocio\User')->withPivot('user_id', 'section_id', 'primary_color', 'background_color', 'background_img', 'visible');

    }
}