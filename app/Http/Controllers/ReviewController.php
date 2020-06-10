<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('auth')->only(['store', 'update']);
        $this->middleware('auth')->except('index');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $reviews = Review::all();
        // $reviews = Advert::findOrFail($id);
        // $this->authorize('view', $reviews);
        // $user = User::where('review_id', $reviews->id)->get();
        // dd($user);
        // return view('reviews', ['reviews' => $reviews, 'user' => $user]);

        // $reviews = Review::with('user')->get();
        $reviews = Review::all();

        $users = User::all();

        return view('reviews', ['reviews' => $reviews]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:5'],
            'content' => ['required', 'min:3']
        ]);


        $attributes['users_id'] = auth()->id();
        
        Review::create($attributes);

        // Posts::create($attributes + ['owner_id' => auth()->id()]);

        // $posts = new posts;

        // $posts->title = request('title');
        // $posts->desctription = request('desctription');

        // $posts->save();

        return redirect('/reviews');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        $reviews = Review::where('users_id', auth()->id())->get();

        // $reservations = \App\Reservation::all();

        return view('reviews.myreviews', ['reviews' => $reviews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $reviews = Review::findOrFail($id)->delete();

        return redirect('/reviews');
    }
}
