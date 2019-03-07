<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\QrStatus;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        $users = User::users();
        return $users;
    }
    public function addQrStatus(Request $request)
    {
        $users = QrStatus::addQrStatus($request->all());
        return $users;
    }
}
