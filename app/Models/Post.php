<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\CommentReply;
use App\Events\BlogPostCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $dispatchesEvents = [
      'created' => BlogPostCreated::class
    ];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){
      if($filters['tag'] ?? false){
        return $query->where('tags','like', '%'.request('tag').'%');
      }
      if($filters['search'] ?? false){
        return $query->where('title','like', '%'.request('search').'%')->orWhere('story','like', '%'.request('search').'%');
      }
    }
    public function comments():HasMany
    {
      return $this->hasMany(Comment::class);
    }
    public function commentReplies():HasMany
    {
      return $this->hasMany(CommentReply::class); 
    }
}
