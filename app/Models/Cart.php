<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
       'cart_id', 'user_id', 'program_id', 
    ];

    public function program(){
        return $this->belongsTo(Program::class);
    }

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

}
