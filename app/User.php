<?php

namespace TuNegocio;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'url', 'tittle', 'logo', 'theme_id', 'primary_color', 'secondary_color',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the thene that owns the user.
     */
    public function theme()
    {
        return $this->belongsTo('TuNegocio\Theme');
    }

    /**
     * The sections that belong to the user.
     */
    public function sections()
    {
        //return $this->belongsToMany('TuNegocio\Section')->using('TuNegocio\SectionUser');
        return $this->belongsToMany('TuNegocio\Section')->withPivot('user_id','section_id','primary_color','background_color', 'background_img','visible');
    }
}
