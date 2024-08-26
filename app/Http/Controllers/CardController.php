<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cards = Card::all();
        return view('/cards', compact('cards'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|max:255|string|min:5',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('public/images'), $imageName);
        $title = $request->input('title');
        $card = new Card;
        $card->title=$title;
        $card->image=$imageName;
        $card->save();
        return redirect('/cards');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cards = Card::all();
        return view('/cards', compact('cards'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getCard=Card::find($id);
        return view('edit', compact('getCard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $cardData=Card::find($id);

       $request =request()->validate([
            'title' => 'required|max:255|string|min:5',
        ]);
        $cardData->update([
            'title'=>$request['title'],
        ]);
        return redirect('/cards');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cardData=Card::find($id);
        $cardData->delete();
        return redirect('/cards');
    }
}
