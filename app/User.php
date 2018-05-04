<?php

namespace TuNegocio;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

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
     * Get data for theme that owns the user.
     */
    public function getData()
    {
        return DB::table('vw_component_attributes_user')->where('user_id',$this->id)->get();
    }

    /**
     * Get componentData for theme that owns the user.
     */
    public function getComponentValue($section_name, $component_name)
    {
        $data = DB::table('vw_component_attributes_user')->where([
                                                        ['user_id',$this->id],
                                                        ['section_name',$section_name],
                                                        ['component_name',$component_name],
                                                    ])->get();
        //dd($data);
        if ($data->count() == 1) {
            return $data->first()->VALUE;
        }
        return $data;
    }

    /**
     * Get componentDataGroup for theme that owns the user .
     */
    public function getComponentValuesGroup($section_name, $component_name, $cant=null)
    {
        $data = DB::table('vw_component_attributes_user')->where([
                                                        ['user_id',$this->id],
                                                        ['section_name',$section_name],
                                                        ['component_name',$component_name],
                                                    ])->get();
        if ($cant) {
            return $data->chunk($cant);
        }
        return $data;
    }

    /**
     * Get the theme that owns the user.
     */
    public function theme()
    {
        return $this->belongsTo('TuNegocio\Theme');
    }

    /**
     * Get the ComponentSectionUserAtributtes for the user.
     */
    public function componentSectionsAttributes()
    {
        return $this->hasMany('TuNegocio\ComponentSectionUserAttribute');
    }

    /**
     * The sections that belong to the user.
     */
    public function sections()
    {
        return $this->belongsToMany('TuNegocio\Section')->withPivot('user_id','section_id','primary_color','background_color', 'background_img','visible');
    }
}
