<?php

namespace App\Http\Controllers;

use App\model;
use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('forms.links');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'link_desc' => 'required|string|max:255',
            'link_addr' => 'required|string|unique',
                                                      ]);

    }

    public function store(Request $request)
    {
        //         dd ($request);

        return Link::create([
          'link_desc' => $request['link_desc'],
          'link_addr' => $request['link_addr'],

          ]);
  return ('saved data');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  /**  public function store(array $data)
    {
      return ('validate done');
        //protected function create(array $data)
        dd ($data);
        return Link::create([
          'link_desc' => $data['link_desc'],
          'link_addr' => $data['link_addr'],

          ]);
          //return view('forms.links');
            return ('saved data');
    }  */


    /**
     * Display the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function show(odel $odel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function edit(odel $odel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, odel $odel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function destroy(odel $odel)
    {
        //
    }
}
