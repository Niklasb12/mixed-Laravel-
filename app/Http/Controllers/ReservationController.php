<?php

namespace App\Http\Controllers;
use App\Reservation;
use App\User;
use App\Category;
use App\Time;
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

        $categories = Category::all();

        $times = Time::all();

        return view('reservations.create', ['times' => $times, 'categories' => $categories]);

    }

    public function store()
    {

        $attributes = request()->validate([
            'reservationType' => ['required', 'min:5'],
            'time' => ['required'],
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

        $user = User::findOrFail(auth()->id());

        return view('reservations.edit', ['reservations' => $reservations, 'user' => $user]);

    }

    public function update(Request $request, $id)
    {

        $reservations = Reservation::findOrFail($id);

        $reservations->reservationType = request('reservationType');
        $reservations->date = request('date');
        $reservations->amount = request('amount');

        $user = User::findOrFail(auth()->id());
        if($user->isAdmin()){
            if($request->has('approved') && request('approved')==='true'){
                $reservations->approved = 1;
            }else{
                $reservations->approved = 0;
            }
        }

        $reservations->save();

        return redirect('/reservations');

    }

    public function destroy($id)
    {

        $reservations = Reservation::findOrFail($id)->delete();

        return redirect('/reservations');

    }
}
