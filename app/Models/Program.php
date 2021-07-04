<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class Program extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $perPage = 5;

    protected $fillable =[
        'name', 'slug', 'description', 'image', 'status', 
    ];

    public function scopeStatus(Builder $builder, $status = 'فعال'){
        $builder->where('status', '=', $status);
    }

    public function patients(){
        return $this->hasMany(Patient::class);
    }

   
    // Accessor:
    //get{AttrName}Attribute
    // $program->image_url
    public function getImageUrlAttribute(){
       if($this->image){
           if(strpos($this->image, 'http') === 0){
               return $this->image;
           }
           return asset('uploads/' . $this->image);
           return Storage::disk('uploads')->url($this->images);
       }
    }

    // function for validate input 
    public static function validateRules(){
        return [
            'name' => 'required|string|max:255|min:3',
            'description' => 'nullable|min:10',
            'image' => 'image',
        ];
    }
 
}
