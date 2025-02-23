<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'UserID';
    protected $fillable = ['Username', 'Password', 'Role', 'Email','Phone'];

    public function personalProfile()
    {
        return $this->hasOne(PersonalProfile::class, 'UserID', 'UserID');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'CreatedBy', 'UserID');
    }

    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class, 'AuthorID', 'UserID');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'CreatedBy', 'UserID');
    }
}
