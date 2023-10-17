<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * generic helper method to throw the error reponse.
     *
     * @param string $message
     * @param \Throwable $exception
     * @return void
     */
    public function errorResponse(string $message = null, \Throwable $exception = null, $notifyException = true)
    {
        return response()->json(
            [
                'status' => false,
                'message' => $message,
                'exception' => is_null($exception) ? '' : $this->getExceptionMessage($exception),
            ]
        );
    }

    /**
     * Get Readable Exception Message.
     *
     * @param \Throwable $exception
     * @return void
     */
    public function getExceptionMessage(\Throwable $exception = null)
    {
        return $exception->getMessage() . ' at ' . $exception->getFile() . ' : ' . $exception->getLine();
    }
}
