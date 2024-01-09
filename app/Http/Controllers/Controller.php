<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSuccessResponse($data = null): \Illuminate\Http\JsonResponse
    {
        $data['message'] = __('messages.SM-001');
        return $this->successResponse($data);
    }
    
    public function successResponse($data = null): \Illuminate\Http\JsonResponse
    {
        $data['code'] = ResponseAlias::HTTP_OK;
        return response()->json($data, ResponseAlias::HTTP_OK);
    }
    
    public function badRequestErrorResponse($e, $message = null): \Illuminate\Http\JsonResponse
    {
        
        if (!empty($e)) {
            Log::error($e->getFile());
            Log::error($e->getLine());
            Log::error($e->getMessage());
        }
        
        return response()->json([
            'code' => ResponseAlias::HTTP_BAD_REQUEST,
            'message' => $message ?? __('messages.EM-000'),
        ], ResponseAlias::HTTP_BAD_REQUEST);
    }
}
