<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    protected $table = 'AttributeValues';
    protected $primaryKey = 'ValueID';
    protected $fillable = ['AttributeID', 'Value'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'AttributeID', 'AttributeID');
    }
}
