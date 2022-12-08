<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $grarded = [];

    public function patients(){
        $this->hasMany(Patient::class);
    }

    use HasFactory;
}
