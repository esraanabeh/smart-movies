<?php

namespace App\Exceptions;

use BadMethodCallException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $exception)
    {
            //  if($this->isHttpExeption($exception)){
            //      if($exception->getStatusCOde()==404){
            //          return response()->view('site.errors.not_found');
            //      }
            //  }


        if ($request->wantsJson()) {
            if ($exception instanceof ValidationException) {
                $errors = $exception->errors();
                foreach ($errors as $key => $error) {
                    $myerrors[$key] = $error[0];
                }
                return api_response($myerrors, $error[0], 0, 422);
            } elseif ($exception instanceof NotFoundHttpException) {
                return api_response(null, 'This url not found please check it again', 0, 404);
            } elseif ($exception instanceof MethodNotAllowedHttpException) {
                return api_response(null, $exception->getMessage(), 0, 405);
            } elseif ($exception instanceof BadMethodCallException) {
                // return api_response('error', $exception->getMessage(), null, 500);
            } elseif ($exception instanceof AuthenticationException) {
                return api_response(null, __("You must be loginned"), 0, 401);
            } elseif ($exception instanceof ModelNotFoundException) {
                return api_response(null, $exception->getMessage(), 0, 404);
            }
        } elseif (strpos(request()->url(), '/') == false &&
                  ($exception instanceof NotFoundHttpException || $exception instanceof ModelNotFoundException)) {
            return view('404', ['type' => 404]);

           
        }
        
        return parent::render($request, $exception);
    }
}
