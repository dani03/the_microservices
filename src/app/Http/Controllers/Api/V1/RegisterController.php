<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    
    public function __invoke(RegisterRequest $request) 
    {
        return "tu es connecté à l'api quiz dev";
    }
}
