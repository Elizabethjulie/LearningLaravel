<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodController extends Controller
{
    /**
     * Display a listing of the todo tasks.
     */
    public function index()
    {
        //
    }

  
    public function create()
    {
        //
    }

    /**
     * Add a new todo
     * @response todo
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'desc'=>['required','string','min:3']
        ]);
        $todo=Todo::create($data);
        return $todo;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
