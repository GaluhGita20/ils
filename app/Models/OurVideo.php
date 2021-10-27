<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurVideo extends Model
{
    use HasFactory;
    protected $table='our_videos';
    protected $primarykey='id';
    protected $fillable=['title', 'desc', 'video-1', 'titlevideo-1', 'video-2', 'titlevideo-2', 'video-3', 'titlevideo-3', 'video-4', 'titlevideo-4', 'video-5', 'titlevideo-5',];
}
