<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'ticket_id', 'status'];
    public function ticket()    
    {
        return $this->hasMany(Ticket::class);
    }
}
