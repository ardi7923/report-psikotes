<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Result;

class School extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function results()
    {
        return $this->hasMany(Result::class,"sekolah","name");
    }
}
