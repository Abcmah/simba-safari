<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentReply extends Model
{
    protected $guarded =[];
    use HasFactory;
    public function comment():BelongsTo
    {
        $this->belongsTo(Comment::class);
    }
    public function post():BelongsTo
    {
        $this->belongsTo(Post::class);
    }
}
