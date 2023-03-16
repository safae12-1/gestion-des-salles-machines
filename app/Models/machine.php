<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class machine extends Model
{
    use HasFactory;
    protected $fillable=['id','reference','marque','dateAchat','prix','salleid'];
    public function salle()
    {
        return $this->belongsTo(salle::class);
    }
}