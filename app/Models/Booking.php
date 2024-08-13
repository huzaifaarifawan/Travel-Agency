<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $table = 'booking';
    protected $fillable = ['email'];
    // protected $primaryKey = 'id';
    // public function groups()
    // {
    //     return this->hasMany('App\Models\User','email','email');
    // }
}
