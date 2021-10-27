<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table='food';
    protected $primarykey='id';
    protected $fillable=['title', 'image-1', 'title-1', 'desc-1', 'image-2', 'title-2', 'desc-2', 'image-3', 'title-3', 'desc-3', 'image-4', 'title-4', 'desc-4', 'image-5', 'title-5', 'desc-5', 'image-6', 'title-6', 'desc-6'];
}
