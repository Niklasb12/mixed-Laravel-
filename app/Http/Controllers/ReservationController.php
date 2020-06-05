<?php

namespace App\Http\Controllers;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $reservations = Reservation::where('users_id', auth()->id())->get();

        // $reservations = \App\Reservation::all();

        return view('reservations', ['reservations' => $reservations]);

    }

    public function create() {

        return view('create');

    }

    public function store()
    {

        $attributes = request()->validate([
            'reservationType' => ['required', 'min:5'],
            'date' => ['required', 'min:3'],
            'amount' => ['required', 'min:1']
        ]);


        $attributes['users_id'] = auth()->id();
        
        Reservation::create($attributes);

        // Posts::create($attributes + ['owner_id' => auth()->id()]);

        // $posts = new posts;

        // $posts->title = request('title');
        // $posts->desctription = request('desctription');

        // $posts->save();

        return redirect('/reservations');

    
    }
}
