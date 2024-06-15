<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Syaratketentuan extends Model
{
    use HasFactory;
    protected $fillable = ['konser_id', 'syaratketentuan'];

    public function konser(): BelongsTo
    {
        return $this->belongsTo(Konser::class);
    }
}
