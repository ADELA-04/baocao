<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'Attributes';
    protected $primaryKey = 'AttributeID';
    protected $fillable = ['AttributeName'];

    public function values()
    {
        return $this->hasMany(AttributeValue::class, 'AttributeID', 'AttributeID');
    }
}
