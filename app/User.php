<?php

namespace TuNegocio;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use TuNegocio\Section;

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
        return DB::table('vw_component_attributes_user')->where([
            ['user_id',$this->id],
            ['visible',1],
        ])->get();
    }

    /**
     * Get componentData for theme that owns the user.
     */
    public function getComponentValue($section_name, $component_section_name)
    {
        $data = DB::table('vw_component_attributes_user')->where([
            ['user_id',$this->id],
            ['visible',1],
            ['section_name',$section_name],
            ['component_section_name',$component_section_name],
        ])->get();

        if ($data->count() == 0) {
            return null;
        }
        if ($data->count() == 1) {
            return $data->first()->VALUE;
        }
        return $data;
    }

    /**
     * Get componentDataGroup for theme that owns the user .
     */
    public function getComponentValuesGroup($section_name, $component_section_name, $cant=null)
    {
        $data = DB::table('vw_component_attributes_user')->where([
            ['user_id',$this->id],
            ['visible',1],
            ['section_name',$section_name],
            ['component_section_name',$component_section_name],
        ])->get();

        if ($cant) {
            return $data->chunk($cant);
        }
        return $data;
    }

    public function sections()
    {
        $auxiliar = $this->componentSections()->where('visible',1)->get()->groupBy('section_id')->toArray();
        $sections = Section::whereIn('id',array_keys($auxiliar))->get();

        return $sections;
    }

    /**
     * Get the theme that owns the user.
     */
    public function theme()
    {
        return $this->belongsTo('TuNegocio\Theme');
    }

    /**
     * Get the componentSectionUsers for the section.
     */
    public function componentSectionUsers()
    {
        return $this->hasMany('TuNegocio\ComponentSectionUser');
    }

    /**
     * The componentSections that belong to the user.
     */
    public function componentSections()
    {
        return $this->belongsToMany('TuNegocio\ComponentSection','component_section_users')->withPivot('user_id','component_section_id','color','visible');
    }
}
