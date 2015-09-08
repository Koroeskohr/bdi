<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['facebook_id', 'year'];

    public function users()
    {
        return $this->hasMany('\App\User');
    }
}
