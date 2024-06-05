<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    protected $table = 'talents';
    public function konser()
    {
        return $this->belongsToMany(Konser::class, 'konser_talent');
    }
}
