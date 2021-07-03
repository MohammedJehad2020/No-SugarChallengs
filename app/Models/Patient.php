<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Rules\CheckAge;
use Illuminate\Validation\Rule;

class Patient extends Model
{
    use HasFactory;

    protected $perPage = 5;

    protected $fillable = [
        'name', 'email', 'gender', 'phone', 'weight', 'height', 'sugar_level', 'DOB', 'country',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class)->withDefault();
    }

    public static function validatePatientInfo($id = 0)
    {
        return [
            'name' => 'required|max:255|min:3',
            'email' => [
                'required',
                // 'unique:patients,email,$id',
                Rule::unique('patients', 'email')->ignore($id),
            ],
            'gender' => 'required|in:male,female',
            'birthday' => [
                'required',
                new CheckAge(),
            ],
            // 'phone' => 'required|regix:/^\(059|056)\-?([0-9]{7})$/',
            'weight' => 'required|numeric|max:255|min:35',
            'height' => 'required|numeric',
            'country' => 'required',
            'sugar_level' => 'required',
        ];
    }

    // function for validate input 
    public static function validateRules()
    {
        return [
            'name' => 'required|string|max:255|min:3',
        ];
    }
}
