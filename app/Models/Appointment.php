<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breed',
        'age'
    ];
    public function animal() {
        return $this->belongsTo(Animal::class);
    }

    public function vet() {
        return $this->belongsTo(Vet::class);
    }
}
