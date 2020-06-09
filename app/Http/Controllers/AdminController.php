<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Reservation;
use \App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        abort_if(!User::findOrFail(auth()->id())->isAdmin(), 403);

        $approved = Reservation::where('approved', 1)->get();
        $notApproved = Reservation::where('approved', 0)->get();

        return view('admin.index', ['approved' => $approved, 'notApproved' => $notApproved]);
    }


}