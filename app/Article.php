<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['title', 'excerpt', 'body', 'published_at'];

    protected $dates = ['published_at'];

    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function author()
    {
        return $this->belongsTo('\App\User');
    }
}
