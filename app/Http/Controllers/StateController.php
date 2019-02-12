<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::all();

        return view('state.index', compact('state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = new State();

        $state->state_name = $request->get('state_name');
        $state->state_abbr = $request->get('state_abbr');
        $state->save();

        // redirect to index page with message
        return redirect('state')->with('success', 'New state has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = State::find($id);
        // Query: SELECT * FROM state WHERE id = $id;

        return view('state.show', compact('state'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::find($id);
        
        return view('state.edit', compact('state'));
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
        $state = State::find($id);
        $state->state_name = $request->get('state_name');
        $state->state_abbr = $request->get('state_abbr');
        $state->save();

        // redirect to index page
        return redirect('state')->with('success', 'State has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::find($id); // 1.1

        $state_name = $state->state_name;

        $state->delete(); // 1.2

        // SQL 1.1: SELECT * FROM state WHERE id = $id
        // SQL 1.2: DELETE FROM state WHERE id = $id

        // State::destroy($id); // 2
        // SQL 2: DELETE FROM state WHERE id = $id

        $msg = 'State ' . $state_name . ' has been deleted';

        return redirect('state')->with('error', $msg);
    }

    public function fungsi_tambahan()
    {
        echo 'Fungsi Tambahan';
    }
}
