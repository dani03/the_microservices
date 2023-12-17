<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfilRessource;
use App\Http\Services\Profils\ProfilService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{

    public function __construct(private ProfilService $profilService)
    {
        $this->profilService->getProfile();
    }

    public function show(Request $request) {
        return Response()->json(['data' => new ProfilRessource($request->user())], Response::HTTP_OK);
    }
}
