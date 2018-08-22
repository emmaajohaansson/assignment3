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
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'destroy']]);
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
        return view("reviews.create", [
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
        $tvShow->save();

        //Use the StreamingServiceTvShow-model to connect
        //the tv-shows to the streaming services they are found on
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
        $tvShow = TvShow::find($id);
        $streamingServices = StreamingService::all();
        return view("tvshows.edit", [
            "tvShow" => $tvShow,
            "streamingServices" => $streamingServices
        ]);
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
        $tvShow = TvShow::find($id);
        $tvShow->title = $request->title;
        $tvShow->image = $request->image;
        $tvShow->description = $request->description;
        $tvShow->premiere_year = $request->premiere_year;
        $tvShow->save();

        //Remove the StreamingServiceTvShow's with the
        //id of the edited tv-show in order to be able
        //to replace them with new streaming-connections
        $showStreamers = StreamingServiceTvShow::all();
        foreach ($showStreamers as $showStreamer) {
            if ($id == $showStreamer->tv_show_id) {
              $streamerId = $showStreamer->id;
              StreamingServiceTvShow::destroy($streamerId);
            }
        }

        //Create new StreamingServiceTvShow's
        foreach ($request->get("streamingServices") as $service) {
            $showStreamer = new StreamingServiceTvShow;
            $showStreamer->tv_show_id = $tvShow->id;
            $showStreamer->streaming_service_id = $service;
            $showStreamer->save();
        }

        return redirect()->route('tvshows.show', ['id' => $tvShow->id]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        TvShow::destroy($id);

        return redirect()->route('tvshows.index');
    }
}
