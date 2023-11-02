<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hizb extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function juz()
    {
        return $this->belongsTo(Juz::class);
    }

    public function verses()
    {
        return $this->hasMany(Verse::class);
    }
}
