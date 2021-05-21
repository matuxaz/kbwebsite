<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;


class Post extends Model
{
    use HasFactory;
    use Commentable;

    protected $guarded = [];

    public function user(){
        return $this ->belongsTo(User::class);
    }
}
