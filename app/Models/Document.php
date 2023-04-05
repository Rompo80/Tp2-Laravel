<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_fr',
        'file_path',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}







