<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CameraController extends Controller
{
    
    public function index() : View
    {
        return view('camera.index');
    }
}
