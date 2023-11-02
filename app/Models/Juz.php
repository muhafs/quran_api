<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Juz extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function hizbs()
    {
        return $this->hasMany(Hizb::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function verses()
    {
        return $this->hasMany(Verse::class);
    }
}
