<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjectDetection extends Model
{
    protected $table = 'objects_detection';
    protected $fillable = [
        'kind',
        'initial_x',
        'initial_y',
        'current_x',
        'current_y',
        'distance',
        'step',
        'size',
    ];
}
