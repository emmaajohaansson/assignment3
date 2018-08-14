<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\TvShow;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reviews = Review::all();
      $tvShows = TvShow::all();
      return view("reviews.index", [
        "reviews" => $reviews,
        "tvShows" => $tvShows
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $review = Review::find($id);
      $tvShows = TvShow::all();
      return view("reviews.show", [
        "review" => $review,
        "tvShows" => $tvShows
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $tvShow = TvShow::find($id);
      return view("reviews.create", [
        "tvShow" => $tvShow
      ]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      $review = new Review;
      $review->name = $request->name;
      $review->comment = $request->comment;
      $review->grade = $request->grade;
      $review->tv_show_id = $request->tv_show_id;
      //Save the new tv-show
      $review->save();


       return redirect()->route('tvshows.show', ['id' => $review->tv_show_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
