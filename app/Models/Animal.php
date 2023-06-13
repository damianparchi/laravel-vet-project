<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointment_date',
        'description'
    ];

    public function user() {
        $this->belongsTo(User::class);
    }

    public function appointments() {
        $this->hasMany(Appointment::class);
    }
}
