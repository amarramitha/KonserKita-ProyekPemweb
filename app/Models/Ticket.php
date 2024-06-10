<?php

namespace App\Models;

use App\Models\Konser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    //relasi menuju konser
    public function konser(): BelongsTo
    {
        return $this->belongsTo(Konser::class);
    }

    public function purchase(): BelongsTo   
    {
        return $this->belongsTo(Purchase::class);
    }
}
