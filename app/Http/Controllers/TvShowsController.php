<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TvShow;
use App\StreamingService;
use App\StreamingServiceTvShow;

class TvShowsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tvShows = TvShow::all();
      return view("tvshows.index", [
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
      $tvShow = TvShow::find($id);
      $tvShow->streamingServices = $tvShow->streamingServices;
      $tvShow->reviews = $tvShow->reviews;
      return view("tvshows.show", [
        "tvShow" => $tvShow
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $streamingServices = StreamingService::all();
      return view("tvshows.create", [
        "streamingServices" => $streamingServices
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
      $tvShow = new TvShow;
      $tvShow->title = $request->title;
      $tvShow->image = $request->image;
      $tvShow->description = $request->description;
      $tvShow->premiere_year = $request->premiere_year;
      //Save the new tv-show
      $tvShow->save();

      //Use the ProductStore-model to connect
      //the products to the stores it is in
      foreach ($request->get("streamingServices") as $service) {
        $showStreamer = new StreamingServiceTvShow;
        $showStreamer->tv_show_id = $tvShow->id;
        $showStreamer->streaming_service_id = $service;
        $showStreamer->save();
       }

       return redirect()->route('tvshows.index');
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
