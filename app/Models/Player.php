<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['team_id', 'name', 'ingame_name', 'rank', 'role'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function heroes()
    {
        return $this->hasMany(Hero::class);
    }
}
