<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'BlogPosts';
    protected $primaryKey = 'PostID';
    protected $fillable = ['Title', 'Content', 'Summary', 'ImageURL', 'IsVisible', 'AuthorID'];

    public function author()
    {
        return $this->belongsTo(User::class, 'AuthorID', 'UserID');
    }
}
