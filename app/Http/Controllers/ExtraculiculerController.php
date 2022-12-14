<?php

namespace App\Http\Controllers;

use App\Models\extraculiculer;
use Illuminate\Http\Request;

class ExtraculiculerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = extraculiculer::with('student')->get();
        return (view("Extrakulikulerview", ["data" => $data])
        );
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\extraculiculer  $extraculiculer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = extraculiculer::with('Student')->findOrFail($id);
        return (view("Extraculicularshowview", [
            "data" => $data
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\extraculiculer  $extraculiculer
     * @return \Illuminate\Http\Response
     */
    public function edit(extraculiculer $extraculiculer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\extraculiculer  $extraculiculer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, extraculiculer $extraculiculer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\extraculiculer  $extraculiculer
     * @return \Illuminate\Http\Response
     */
    public function destroy(extraculiculer $extraculiculer)
    {
        //
    }
}
