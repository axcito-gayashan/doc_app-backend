<?php
/**
 *doctorweb
 *ASUS
 *3/24/2022
 *4:06 AM
 *SRILANKA-AXCITO
 */

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public function response($status, $message , $data, $http_code): JsonResponse
    {
        return response()->json([
            'status'  => $status,
            'message' => $message,
            'data'    => $data,
        ],$http_code);
    }
}
