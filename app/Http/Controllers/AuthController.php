<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller {
    
    /*
     * @var JWTAuth
     */
    private $JWTAuth;
    
    public function __construct(JWTAuth $auth) {
        $this->JWTAuth = $auth;
    }
	//teste

     public function login(AuthRequest $request)
    {   // grab credentials from the request
        $credentials = $request->only('username', 'password');
        // attempt to verify the credentials and create a token for the user
        if (! $token = $this->JWTAuth->attempt($credentials)) {
            return response()->json(['error' => 'invalid_credentials'], 401);
        }
        
        return response()->json(compact('token'));
    }

    public function me() {
            if (!$user = $this->JWTAuth->parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        return response()->json(compact('user'));
    }
    
    public function refresh() {
        $token = $this->JWTAuth->refresh($this->JWTAuth->getToken());
        return response()->json(compact('token'));
    }
    
    public function logout() {
        $this->JWTAuth->invalidate($this->JWTAuth->getToken());
        return response()->json('Loged Out successfully!');
    }
    
    public function qlqrcoisa() {
        return response()->json(['message'=>'qualquer coisa']);
    }

}
