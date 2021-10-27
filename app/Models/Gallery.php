<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table='galleries';
    protected $primarykey='id';
    protected $fillable=['name_section', 'image-1','titleimage-1', 'image-2', 'titleimage-2', 'image-3', 'titleimage-3', 'image-4', 'titleimage-4', 'image-5', 'titleimage-5', 'image-6', 'titleimage-6'];
}
