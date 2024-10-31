<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponses
{
    /**
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    protected function successResponse(string $message, int $code = 200): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'status' => $code,
        ], $code);
    }
}
