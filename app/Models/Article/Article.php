<?php

namespace App\Models\Article;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'subject_id'];
    protected $with = ['subject', 'user']; //eager loading
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function User() //setiap artikel mempunyai satu user
    {
        return $this->belongsTo(User::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
