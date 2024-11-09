<?php
   
namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\API\V1\BaseController as BaseController;
use App\Http\Requests\RegistrationRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
   
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegistrationRequest $request, AuthService $service): JsonResponse
    {
        $response = $service->register($request->all());
        return $this->sendResponse($response, 'User registered successfully.');
    }   
}