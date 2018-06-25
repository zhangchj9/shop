<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/9/20
 * Time: 18:02
 */

namespace BLMYX01\ExceptionHandler;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use BLMYX01\Exception\CommentNotAllowedException;

class BlogExceptionHandler
{
    /**
     * @param $request
     * @param Exception $exception
     * @return mixed
     */
    public function handler(Request $request, Exception $exception)
    {
        if ($request->expectsJson()) {
            $msg = 'Sorry, something went wrong.';
            if ($exception instanceof CommentNotAllowedException) {
                $msg = 'Sorry, comment is not allowed now.';
            } else if ($exception instanceof TokenMismatchException) {
                $msg = 'Sorry, CSRF token mismatched.';
            }
            return response()->json(
                ['status' => $exception->getCode(), 'msg' => $msg],
                500
            );
        }
        return false;
    }
}