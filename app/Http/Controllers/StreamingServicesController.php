<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StreamingService;

class StreamingServicesController extends Controller
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
      $streamingServices = StreamingService::all();
      return view("streamingservices.index", [
        "streamingServices" => $streamingServices
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
      $streamingService = StreamingService::find($id);
      return view("streamingservices.show", [
        "streamingService" => $streamingService
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("streamingservices.create");
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      $streamingService = new StreamingService;
      $streamingService->name = $request->name;
      $streamingService->price = $request->price;
      $streamingService->image = $request->image;
      //Save the new streaming service
      $streamingService->save();

       return redirect()->route('streamingservices.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $streamingService = StreamingService::find($id);
      return view("streamingservices.edit", [
        "streamingService" => $streamingService
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
        StreamingService::destroy($id);

        return redirect()->route('streamingservices.index');
    }
}
