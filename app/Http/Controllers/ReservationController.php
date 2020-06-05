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
            'date' => ['required', 'min:3', 'date_format:Y-m-d'],
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

    public function edit($id)
    {

        $reservations = Reservation::findOrFail($id);

        return view('edit', compact('reservations'));

    }

    public function update($id)
    {

        $reservations = Reservation::findOrFail($id);

        $reservations->reservationType = request('reservationType');
        $reservations->date = request('date');
        $reservations->amount = request('amount');

        $reservations->save();

        return redirect('/reservations');

    }

    public function destroy($id)
    {

        $reservations = Reservation::findOrFail($id)->delete();

        return redirect('/reservations');

    }
}
