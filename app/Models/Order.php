<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'gender', 'DOB', 'phone', 'height',
         'weight', 'country_code', 'postal_code', 'status',
    ];

    protected $casts =[
       'created_at' => 'datetime',
    ];

    public function items(){
        return $this->hasMany(OrderItem::class);
    }

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
}
