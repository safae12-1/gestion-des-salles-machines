<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    use HasFactory;
    protected $fillable=['id','code','libelle'];
    public function machine()
    {
        return $this->hasMany('App\Models\machine');
    }
}
