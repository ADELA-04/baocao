<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Products';
    protected $primaryKey = 'ProductID';
    protected $fillable = ['ProductName', 'Description', 'Price', 'Image', 'Status', 'CategoryID', 'IsVisible', 'CreatedBy'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'ProductAttributes', 'ProductID', 'AttributeID');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'CreatedBy', 'UserID');
    }
}
