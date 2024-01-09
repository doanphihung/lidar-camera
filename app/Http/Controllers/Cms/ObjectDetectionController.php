<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\ObjectDetection;
use Illuminate\Http\Request;

class ObjectDetectionController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $objectDetection = new ObjectDetection([
            'kind' => $data['kind'],
            'initial_x' => $data['initialPos']['x'],
            'initial_y' => $data['initialPos']['y'],
            'current_x' => $data['currentPos']['x'],
            'current_y' => $data['currentPos']['y'],
            'distance'  => $data['distance'],
            'step'      => $data['step'],
            'size'      => $data['size'],
        ]);
        
        if ($objectDetection->save()) {
            $countObjectDetectionNotReadNotice = ObjectDetection::where('read_notice', 0)->count();
            return $this->createSuccessResponse([
                'notice_not_read' =>  $countObjectDetectionNotReadNotice
            ]);
        }
        return $this->badRequestErrorResponse([]);
    }
}
