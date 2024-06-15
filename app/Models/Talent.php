<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Talent extends Model
{
    use HasFactory;
    protected $table = 'talents';
    protected $fillable = ['konser_id','name', 'image'];
    public function konser(): BelongsTo
    {
        return $this->belongsTo(Konser::class);
    }
}
