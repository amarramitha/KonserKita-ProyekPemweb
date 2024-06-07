<?php

namespace App\Models;

use App\Models\Talent;
use App\Models\Ticket;
use Illuminate\Support\Arr;
use App\Models\Syaratketentuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Konser extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'date', 'lokasi', 'slug', 'deskripsi'];

    //relasi dengan syarat ketentuan
    public function syaratketentuan(){
        return $this->hasMany(Syaratketentuan::class, 'konser_id');
    }

    // //relasi dengan tiket
    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'konser_id');
    }

    public function talent(): BelongsToMany
    {
        return $this->belongsToMany(Talent::class, 'konser_talent');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
