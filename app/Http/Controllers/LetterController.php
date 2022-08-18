<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Http\Requests\StoreLetterRequest;
use App\Http\Requests\UpdateLetterRequest;
use App\Models\Dao;
use Illuminate\Http\Request;


class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function receives()
    {
        $letters = Letter::where('receiver_id', auth()->user()->id)->get();
        return view('dao.letter.receives', compact('letters'));
    }
    public function sent()
    {
        $letters = Letter::where('sender_id', auth()->user()->id)->get();
        return view('dao.letter.sent', compact('letters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dao = Dao::where('id', $request->id)->first();
        return view('dao.letter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLetterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Letter::create([]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $letter = Letter::where('id', $request->letter_id)->first();
        return view('dao.letter.show', compact('letter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLetterRequest  $request
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLetterRequest $request, Letter $letter)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $letter)
    {
    }
}
