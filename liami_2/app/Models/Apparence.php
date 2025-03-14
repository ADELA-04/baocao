<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apparence extends Model
{
    use HasFactory;

    protected $table = 'apparence';
    protected $primaryKey = 'ApparenceID';
    protected $fillable = ['Title', 'LogoURL','FaviconURL','NavigationLinks','LinkFB','LinkIN'];
}
