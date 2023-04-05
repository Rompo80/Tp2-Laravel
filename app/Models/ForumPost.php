<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ForumPost extends Model
{
    use HasFactory;
   


    protected $fillable = [
        'title',
        'title_fr',
        'body',
        'body_fr',
        'user_id',
        'category_id'
        
    ];
     

    public function PostHasUser(){
        //l'ordre est important PK, FK
       return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function PostHasCategory(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    static function viewPosts(){
        $lang = session()->get('localeDB');

        return ForumPost::select('forum_posts.id', 'user_id', DB::raw("(CASE WHEN body$lang IS NULL THEN body ELSE body$lang END) as body"))
        ->join('users', 'users.id', '=', 'forum_posts.user_id')
        ->orderby('forum_posts.created_at', 'asc')
        ->paginate(4);
    }



}