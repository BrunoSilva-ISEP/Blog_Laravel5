<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * @param $value
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        if (! $this->exists)
        {
            $this->attributes['slug'] = str_slug($value);
        }
    }
}
