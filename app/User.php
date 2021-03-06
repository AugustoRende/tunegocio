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
        'name', 'email', 'password', 'url', 'title', 'logo', 'theme_id', 'primary_color', 'secondary_color',
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

    /**
     * Get componentKeys for theme that owns the user.
     */
    public function getComponentKeys($section_name, $component_section_name, $key)
    {
        $data = DB::table('vw_component_attributes_user')->where([
            ['user_id',$this->id],
            ['visible',1],
            ['section_name',$section_name],
            ['component_section_name',$component_section_name],
            ['component_type_name',$key],
        ])->get();

        $valores = '';
        foreach ($data as $item) {
            $valores = $item->VALUE.' '.$valores;
        }
        
        return array_unique(explode(' ',trim($valores)));
    }


    /**
     * Get sectionData for section that owns the user.
     */
    public function getSectionValues($section_name)
    {
        $data = DB::table('vw_component_attributes_user')->where([
            ['user_id',$this->id],
            ['visible',1],
            ['section_name',$section_name],
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
     * Get sectionData TO EDIT for section that owns the user.
     */
    public function getSectionValuesToEdit($section_name)
    {
        $data = DB::table('vw_component_attributes_user')->where([
            ['user_id',$this->id],
            ['section_name',$section_name],
        ])->get();

        if ($data->count() == 0) {
            return null;
        }
        // if ($data->count() == 1) {
        //     return $data->first()->VALUE;
        // }
        return $data;
    }

    
    /**
     * Get sections that owns the user.
     */
    public function getSections()
    {
        $data = DB::table('vw_section_user')
            ->selectRaw('id, code, name, href, allow_image, MAX(visible) AS visible')
            ->where('user_id',$this->id)
            ->where('visible',1)
            ->groupBy('id')
            ->get();

        if ($data->count() == 0) {
            return null;
        }
        return $data;
    }

    
    /**
     * Get sections TO EDIT that owns the user.
     */
    public function getSectionsToEdit()
    {
        $data = DB::table('vw_section_user')
            ->selectRaw('id, code, name, href, allow_image, MAX(visible) AS visible')
            ->where('user_id',$this->id)
            ->groupBy('id')
            ->get();

        if ($data->count() == 0) {
            return null;
        }
        return $data;
    }


    /**
     * Generate schema for de selected theme
     */
    public function generateTheme()
    {
        DB::select('CALL inserts_component_section_users('.$this->id.', '.$this->theme_id.')');
        DB::select('CALL inserts_component_section_user_attribute('.$this->id.')');
    }


    /**
     * Edit value for user theme
     */
    public function updateValue($csua_id, $newValue, $visible)
    {
        DB::select('CALL update_component_section_user_attribute('.$csua_id.',"'.$newValue.'","'.$visible.'")');
    }


    /**
     * Edit visibility for user section
     */
    public function updateSectionVisibility($section_id,$visible)
    {
        DB::select('CALL update_component_section_users('.$section_id.',"'.$visible.'")');
        // $this->componentSectionUsers()
        //     ->where('id', $csu_id)
        //     ->update(['visible' => $visible]);
    }


    public function sections()
    {
        $auxiliar = $this->componentSections()->get()->groupBy('section_id')->toArray();
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
