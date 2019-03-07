<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::users();

        return view('users.users', compact('users'));
    }
    public function addQrStatus(Request $request)
    {
        $users = QrStatus::addQrStatus($request->all());
        return redirect()->back()->with($user);
    }
}
